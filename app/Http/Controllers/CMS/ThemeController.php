<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Theme;
use App\Models\ThemeCategory;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function index()
    {
        $themes = Theme::get();
        // dd($themes);
        return view('admin.theme-pages.index', compact('themes'));
    }


    public function create()
    {

        $categories = Categories::get();

        return view('admin.theme-pages.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // Validation Rules
        $request->validate([
            'cover' => 'required|file|mimes:webp,jpg,jpeg,png',
            'background_img' => 'required|file|mimes:webp',
            'code' => 'required',
            'name' => 'required',
            'status' => 'required|in:0,1',
            'categories' => 'required|array',
            'description' => '',
        ]);

        // Store Theme
        $dataTheme = new Theme();
        $dataTheme->name = $request->name;
        $dataTheme->code = $request->code;
        $dataTheme->status = $request->has('status') ? $request->status : 0;
        $dataTheme->description = $request->description;

        // Store background_img to public path
        $backgroundImage = $request->file('background_img');
        $imageName = time() . '_' . $backgroundImage->getClientOriginalName();
        $imagePath = '/theme/' . $imageName;
        $backgroundImage->move(public_path('theme'), $imageName);

        $dataTheme->background_img = $imagePath;

        // Store cover to public path
        $cover = $request->file('cover');
        $coverName = time() . '_' . $cover->getClientOriginalName();
        $coverPath = '/theme/cover/' . $coverName;
        $cover->move(public_path('theme/cover'), $coverName);

        $dataTheme->cover = $coverPath;

        $dataTheme->save();

        // Store Theme Categories
        foreach ($request->categories as $categoryId) {
            $themeCategory = new ThemeCategory();
            $themeCategory->theme_id = $dataTheme->id;
            $themeCategory->category_id = $categoryId;
            $themeCategory->save();
        }

        return redirect()->route('theme.index')->with('success', 'Theme created successfully.');
    }



    public function edit($id)
    {
        $theme = Theme::with('categories')->findOrFail($id);
        $categories = Categories::all();
        $selectedCategories = $theme->categories ? $theme->categories->pluck('id')->toArray() : [];
        return view('admin.theme-pages.edit', compact('theme', 'categories', 'selectedCategories'));
    }



    public function update(Request $request, $id)
    {
        // Validation Rules for Update
        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'cover' => 'file|mimes:webp,jpg,jpeg,png',
            'background_img' => 'sometimes|nullable|file|mimes:webp',
            'status' => 'required|in:0,1',
            'description' => '',
        ]);

        $dataTheme = Theme::findOrFail($id);
        $dataTheme->name = $request->name;
        $dataTheme->code = $request->code;
        $dataTheme->status = $request->has('status') ? $request->status : 0;
        $dataTheme->description = $request->description;

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

        // Check if new cover is provided
        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $coverName = time() . '_' . $cover->getClientOriginalName();
            $coverPath = '/theme/cover/' . $coverName;
            $cover->move(public_path('theme/cover'), $coverName);

            // Delete previous cover if exists
            if ($dataTheme->cover) {
                if (file_exists(public_path($dataTheme->cover))) {
                    unlink(public_path($dataTheme->cover));
                }
            }

            $dataTheme->cover = $coverPath;
        }
        $dataTheme->save();

        // Sync Theme Categories
        $dataTheme->categories()->sync($request->categories);

        return redirect()->route('theme.index')->with('success', 'Theme updated successfully.');
    }

    public function destroy($id)
    {
        $theme = Theme::findOrFail($id);

        // Delete the theme's cover if exists
        if ($theme->cover) {
            if (file_exists(public_path($theme->cover))) {
                unlink(public_path($theme->cover));
            }
        }

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
