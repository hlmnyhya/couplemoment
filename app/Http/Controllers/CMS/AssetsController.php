<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\Assets;
use App\Models\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AssetsController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->input('theme_name');

        $assets = Assets::with('theme')
            ->whereHas('theme', function ($query) use ($search) {
                $query->where('name', 'like', "%$search%");
            })
            ->get();

        return view('admin.assets-pages.index', compact('assets'));
    }

    public function index()
    {
        $assets = Assets::with('theme')->get();
        return view('admin.assets-pages.index', compact('assets'));
    }


    public function create()
    {
        $themes = Theme::all();

        return view('admin.assets-pages.create', compact('themes'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'assets_img.*' => 'required|image|mimes:svg',
            'theme_id' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $theme = Theme::findOrFail($request->input('theme_id'));

        if ($request->hasFile('assets_img')) {
            foreach ($request->file('assets_img') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/assets'), $filename);

                $asset = new Assets();
                $asset->theme_id = $theme->id;
                $asset->assets_img = $filename;
                $asset->save();
            }
        }

        // Redirect ke route assets index jika diperlukan setelah debug selesai
        return redirect()->route('assets.index')->with('success', 'Assets added successfully!');
    }

    public function edit($id)
    {
        $assets = Assets::findOrFail($id);

        $themes = Theme::all();
        return view('admin.assets-pages.edit', compact('assets', 'themes'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'theme_id' => 'required|exists:themes,id',
            'assets_img' => 'nullable|file|mimes:svg',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $asset = Assets::findOrFail($id);

        $asset->theme_id = $request->input('theme_id');

        if ($request->hasFile('assets_img')) {
            $uploadedFile = $request->file('assets_img');
            $filename = time() . '_' . $uploadedFile->getClientOriginalName();
            $uploadedFile->move(public_path('uploads/assets'), $filename);

            $asset->assets_img = $filename;
        }

        $asset->save();

        return redirect()->route('assets.index')->with('success', 'Asset updated successfully!');
    }

    public function destroy($id)
    {
        $asset = Assets::findOrFail($id);

        if ($asset->assets_img) {
            $file_path = public_path('uploads') . '/' . $asset->assets_img;

            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }

        $asset->delete();

        return redirect()->route('assets.index')->with('success', 'Asset deleted successfully!');
    }
}
