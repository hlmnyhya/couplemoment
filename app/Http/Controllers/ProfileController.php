<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Province;
use App\Models\Regency;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

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
        $provinces = Province::all();
        $regencies = Regency::all();

        // Get the authenticated user
        $user = auth()->user();

        return view('profile.edit', compact('user', 'provinces', 'regencies'));
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
            'province' => 'required|exists:provinces,id',
            'regency' => 'required|exists:regencies,id',
            'address' => 'nullable|string|max:255',
            'photo' => 'sometimes|nullable|file|mimes:jpeg,jpg,png',
        ]);

        // Get the authenticated user
        $user = $request->user();

        // Update user data
        $user->name = $request->input('name');
        $user->birth = $request->input('birth');
        $user->phone = $request->input('phone');

        // Fetch and store province name
        $province = Province::find($request->input('province'));
        $user->province = $province ? $province->name : null;

        // Fetch and store regency name
        $regency = Regency::find($request->input('regency'));
        $user->regency = $regency ? $regency->name : null;

        $user->address = $request->input('address');

        // Check if new background_img is provided
        if ($request->hasFile('photo')) {
            $backgroundImage = $request->file('photo');
            $imageName = time() . '_' . $backgroundImage->getClientOriginalName();
            $imagePath = '/uploads/profile/' . $imageName;
            $backgroundImage->move(public_path('/uploads/profile/'), $imageName);

            // Delete previous photo if exists
            if ($user->photo) {
                if (file_exists(public_path($user->photo))) {
                    unlink(public_path($user->photo));
                }
            }

            $user->photo = $imagePath;
        }

        // Save changes
        $user->save();

        return redirect()->route('profile.edit')->with('success', 'Profile successfully changed');
    }

    // public function update(ProfileUpdateRequest $request): RedirectResponse
    // {
    //     $request->user()->fill($request->validated());

    //     if ($request->user()->isDirty('email')) {
    //         $request->user()->email_verified_at = null;
    //     }

    //     $request->user()->save();

    //     return Redirect::route('profile.edit')->with('status', 'profile-updated');
    // }

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
}
