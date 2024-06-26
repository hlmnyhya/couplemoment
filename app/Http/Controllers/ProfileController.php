<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index()
    {
        $user = auth()->user();

        // Define the profile fields to be checked for completion
        $profileFields = ['name', 'email', 'birth', 'phone', 'province', 'regency', 'address', 'photo'];

        // Count the number of filled fields
        $completedFields = 0;

        foreach ($profileFields as $field) {
            if (!empty($user->$field)) {
                $completedFields++;
            }
        }

        // Calculate the completion percentage
        $completionPercentage = ($completedFields / count($profileFields)) * 100;


        // Mendapatkan tanggal lahir dari database atau atribut lainnya
        $birthDate = $user->birth;

        // Menghitung umur menggunakan Carbon
        $age = Carbon::parse($birthDate)->age;
        // Memformat tanggal pembuatan akun
        $createdDate = Carbon::parse($user->created_at)->format('l, j F Y');
        // dd($user = auth()->user());
        // Menampilkan umur di view
        return view('profile.index', compact('user', 'age', 'createdDate', 'completionPercentage'));
    }

    public function edit()
    {
        // Fetch provinces and regencies as needed

        // Get the authenticated user
        $user = auth()->user();

        return view('profile.edit', compact('user'));
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'birth' => 'date',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'photo' => 'sometimes|nullable|file|mimes:jpeg,jpg,png',
            'province' => 'nullable|string|max:255',
            'regency' => 'nullable|string|max:255',
        ]);

        // Get the authenticated user
        $user = $request->user();

        // Update user data
        $user->name = $request->input('name');
        $user->birth = $request->input('birth');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->province = $request->input('province');
        $user->regency = $request->input('regency');

        // Check if new photo is provided
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $imageName = time() . '_' . $photo->getClientOriginalName();
            $imagePath = '/uploads/profile/' . $imageName;
            $photo->move(public_path('/uploads/profile/'), $imageName);

            // Delete previous photo if exists
            if ($user->photo && file_exists(public_path($user->photo))) {
                unlink(public_path($user->photo));
            }

            $user->photo = $imagePath;
        }

        // Save changes
        $user->save();

        return redirect()->route('profile.edit')->with('success', 'Profile successfully changed');
    }



    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function showChangePasswordForm()
    {
        // Fetch provinces and regencies as needed

        // Get the authenticated user
        $user = auth()->user();

        return view('profile.change_password', compact('user'));
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed|min:8',
        ], [
            'current_password.required' => 'Please enter your current password.',
            'password.required' => 'Please enter a new password.',
            'password.confirmed' => 'The new password confirmation does not match.',
            'password.min' => 'The new password must be at least 8 characters long.',
        ]);

        $user = $request->user();

        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->with('error', 'The current password is incorrect.');
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('profile.change-password')->with('success', 'Password changed successfully.');
    }
}
