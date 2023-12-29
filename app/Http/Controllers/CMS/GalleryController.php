<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Photo;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    //
    public function index(Request $request)
    {
        $search = $request->input('search');

        $galleries = Gallery::with('photos')
            ->when($search, function ($query, $search) {
                return $query->where('gallery_name', 'like', "%$search%");
            })
            ->get();

        return view('admin.gallery-pages.index', compact('galleries'));
    }


    public function create()
    {
        return view('admin.gallery-pages.create');
    }
    
    public function store(Request $request)
    {

        $request->validate([
            'gallery_name' => 'required',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:5048',
        ]);

        $gallery = Gallery::create([
            'gallery_name' => $request->gallery_name,
        ]);

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $file) {
                $extension = $file->getClientOriginalExtension();
                $name = 'gallery_' . $gallery->id . '_' . uniqid() . '_' . time() . '.' . $extension;
                $file->move(public_path().'/uploads/gallery/', $name);
                Photo::create([
                    'gallery_id' => $gallery->id,
                    'file_name' => $name,
                    'file_path' => '/uploads/gallery/'.$name,
                ]);
            }
        }

        return redirect()->route('gallery.index')->with('success', 'Gallery created successfully.');
    }

    public function edit()
    {
        return view('admin.gallery-pages.edit');
    }

    public function show($id)
    {
        $gallery = Gallery::with('photos')->findOrFail($id);
        // dd($gallery);
        
        return view('admin.gallery-pages.show', compact('gallery'));
    }
    
    public function update()
    {
        return view('admin.gallery-pages.update');
    }   

    public function deleteGallery($id)
    {
        // Temukan galeri berdasarkan ID
        $gallery = Gallery::findOrFail($id);
    
        // Ambil semua foto terkait dengan galeri
        $photos = Photo::where('gallery_id', $id)->get();
    
        // Hapus setiap foto dari direktori dan dari database
        foreach ($photos as $photo) {
            // Hapus dari direktori (public/uploads/gallery/)
            File::delete(public_path($photo->file_path));
    
            // Hapus dari database
            $photo->delete();
        }
    
        // Hapus galeri dari database
        $gallery->delete();
    
        return redirect()->route('gallery.index')->with('success', 'Gallery deleted successfully.');
    }

    public function deletePhoto($id)
    {
        // Temukan foto berdasarkan ID
        $photo = Photo::findOrFail($id);
    
        // Hapus file foto dari direktori (public/uploads/gallery/)
        File::delete(public_path($photo->file_path));
    
        // Hapus foto dari database
        $photo->delete();
    
        return redirect()->back()->with('success', 'Photo deleted successfully.');
    }

    public function deleteAllGallery()
    {
        // Ambil semua galeri beserta fotonya
        $galleries = Gallery::with('photos')->get();

        // Loop melalui setiap galeri
        foreach ($galleries as $gallery) {
            // Loop melalui setiap foto dan hapus file dari direktori
            foreach ($gallery->photos as $photo) {
                File::delete(public_path($photo->file_path));
            }

            // Hapus galeri dan fotonya dari database
            $gallery->delete();
        }

        return redirect()->route('gallery.index')->with('success', 'All galleries and photos deleted successfully.');
    }


}
