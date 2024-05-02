<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Theme;
use Illuminate\Http\Request;

class UserThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $themes = Theme::get();
        $categoriesWithCount = Categories::withCount('themes')->get();
        return view('admin.themeuser.index', compact('themes', 'categoriesWithCount'));
    }


    public function detail(string $id)
    {
        $theme = Theme::findOrFail($id);
        $categories = $theme->categories; // Mendapatkan kategori-kategori dari tema
        return view('admin.themeuser.detail', compact('theme', 'categories'));
    }


    public function demo($id)
    {
        $theme = Theme::find($id); // Tema dengan ID yang diberikan
        $categories = $theme->categories; // Mendapatkan kategori-kategori dari tema
        // dd($categories);
        return view('frontend.invitation-pages.demo', compact('theme', 'categories'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
