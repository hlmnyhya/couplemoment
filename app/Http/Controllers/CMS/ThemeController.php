<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\Theme;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function index()
    {
        $themes = Theme::get();
        // dd($theme);
        return view('admin.theme-pages.index', compact('themes'));
    }


    public function create()
    {
        return view('admin.theme-pages.create');
    }

    public function store(Request $request)
    {
        // Validation Rules
        $request->validate([
            'background_img' => 'required|file|mimes:webp',
            'code' => 'required',
            'name' => 'required',
            'status' => 'required|in:0,1',
        ]);


        // Initialization New Object
        $dataTheme = new Theme();
        $dataTheme->name = $request->name;
        $dataTheme->code = $request->code;
        $dataTheme->status = $request->has('status') ? $request->status : 0;

        // Store background_img to publich path
        $backgroundImage = $request->file('background_img');
        $imageName = time() . '_' . $backgroundImage->getClientOriginalName();
        $imagePath = '/theme/' . $imageName;
        $backgroundImage->move(public_path('theme'), $imageName);

        $dataTheme->background_img = $imagePath;

        $dataTheme->save();

        return redirect()->route('theme.index')->with('success', 'Theme created successfully.');
    }


    public function edit($id)
    {
        $theme = Theme::findOrFail($id);
        return view('admin.theme-pages.edit', compact('theme'));
    }

    public function update(Request $request, $id)
    {
        // Validation Rules for Update
        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'background_img' => 'sometimes|nullable|file|mimes:webp',
            'status' => 'required|in:0,1',
        ]);

        $dataTheme = Theme::findOrFail($id);
        $dataTheme->name = $request->name;
        $dataTheme->code = $request->code;
        $dataTheme->status = $request->has('status') ? $request->status : 0;

        // Check if new background_img is provided
        if ($request->hasFile('background_img')) {
            $backgroundImage = $request->file('background_img');
            $imageName = time() . '_' . $backgroundImage->getClientOriginalName();
            $imagePath = '/theme/' . $imageName;
            $backgroundImage->move(public_path('theme'), $imageName);

            // Delete previous background_img if exists
            if ($dataTheme->background_img) {
                if (file_exists(public_path($dataTheme->background_img))) {
                    unlink(public_path($dataTheme->background_img));
                }
            }

            $dataTheme->background_img = $imagePath;
        }

        $dataTheme->save();

        return redirect()->route('theme.index')->with('success', 'Theme updated successfully.');
    }

    public function destroy($id)
    {
        $theme = Theme::findOrFail($id);

        // Delete the theme's background image if exists
        if ($theme->background_img) {
            if (file_exists(public_path($theme->background_img))) {
                unlink(public_path($theme->background_img));
            }
        }

        $theme->delete();

        return redirect()->route('theme.index')->with('success', 'Theme deleted successfully.');
    }
}
