<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
<<<<<<< HEAD
use App\Models\Photo;
=======
use App\Models\Invitation;
use App\Models\Photo;
use Illuminate\Support\Facades\Auth;
>>>>>>> 6046cce4b268caee4da34dfe670fa94f3793067b
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
<<<<<<< HEAD
        return view('admin.gallery-pages.create');
    }
    
=======
        $user = Auth::user();
        if ($user->isAdmin()) {
            $invitations = Invitation::all();
        } else {
            $invitations = Invitation::where('user_id', $user->id)->get();
        }
        return view('admin.gallery-pages.create', ['invitations' => $invitations]);
    }

>>>>>>> 6046cce4b268caee4da34dfe670fa94f3793067b
    public function store(Request $request)
    {

        $request->validate([
<<<<<<< HEAD
=======
            'invitation_id' => 'required',
>>>>>>> 6046cce4b268caee4da34dfe670fa94f3793067b
            'gallery_name' => 'required',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:5048',
        ]);

        $gallery = Gallery::create([
<<<<<<< HEAD
=======
            'invitation_id' => $request->invitation_id,
>>>>>>> 6046cce4b268caee4da34dfe670fa94f3793067b
            'gallery_name' => $request->gallery_name,
        ]);

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $file) {
                $extension = $file->getClientOriginalExtension();
                $name = 'gallery_' . $gallery->id . '_' . uniqid() . '_' . time() . '.' . $extension;
<<<<<<< HEAD
                $file->move(public_path().'/uploads/gallery/', $name);
                Photo::create([
                    'gallery_id' => $gallery->id,
                    'file_name' => $name,
                    'file_path' => '/uploads/gallery/'.$name,
                ]);
            }
        }

=======
                $file->move(public_path() . '/uploads/gallery/', $name);
                Photo::create([
                    'gallery_id' => $gallery->id,
                    'file_name' => $name,
                    'file_path' => '/uploads/gallery/' . $name,
                ]);
            }
        }
        // dd($request->all());
>>>>>>> 6046cce4b268caee4da34dfe670fa94f3793067b
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
<<<<<<< HEAD
        
        return view('admin.gallery-pages.show', compact('gallery'));
    }
    
    public function update()
    {
        return view('admin.gallery-pages.update');
    }   
=======

        return view('admin.gallery-pages.show', compact('gallery'));
    }

    public function update()
    {
        return view('admin.gallery-pages.update');
    }
>>>>>>> 6046cce4b268caee4da34dfe670fa94f3793067b

    public function deleteGallery($id)
    {
        // Temukan galeri berdasarkan ID
        $gallery = Gallery::findOrFail($id);
<<<<<<< HEAD
    
        // Ambil semua foto terkait dengan galeri
        $photos = Photo::where('gallery_id', $id)->get();
    
=======

        // Ambil semua foto terkait dengan galeri
        $photos = Photo::where('gallery_id', $id)->get();

>>>>>>> 6046cce4b268caee4da34dfe670fa94f3793067b
        // Hapus setiap foto dari direktori dan dari database
        foreach ($photos as $photo) {
            // Hapus dari direktori (public/uploads/gallery/)
            File::delete(public_path($photo->file_path));
<<<<<<< HEAD
    
            // Hapus dari database
            $photo->delete();
        }
    
        // Hapus galeri dari database
        $gallery->delete();
    
=======

            // Hapus dari database
            $photo->delete();
        }

        // Hapus galeri dari database
        $gallery->delete();

>>>>>>> 6046cce4b268caee4da34dfe670fa94f3793067b
        return redirect()->route('gallery.index')->with('success', 'Gallery deleted successfully.');
    }

    public function deletePhoto($id)
    {
        // Temukan foto berdasarkan ID
        $photo = Photo::findOrFail($id);
<<<<<<< HEAD
    
        // Hapus file foto dari direktori (public/uploads/gallery/)
        File::delete(public_path($photo->file_path));
    
        // Hapus foto dari database
        $photo->delete();
    
=======

        // Hapus file foto dari direktori (public/uploads/gallery/)
        File::delete(public_path($photo->file_path));

        // Hapus foto dari database
        $photo->delete();

>>>>>>> 6046cce4b268caee4da34dfe670fa94f3793067b
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

<<<<<<< HEAD

=======
    public function updatePhotoStatus(Request $request, $id)
    {
        $photo = Photo::findOrFail($id);

        // Reset status foto yang lain menjadi false
        if ($request->has('is_title_photo')) {
            Photo::where('gallery_id', $photo->gallery_id)->update(['is_title_photo' => false]);
            $photo->update(['is_title_photo' => true]);
        } elseif ($request->has('is_primary_photo')) {
            Photo::where('gallery_id', $photo->gallery_id)->update(['is_primary_photo' => false]);
            $photo->update(['is_primary_photo' => true]);
        } elseif ($request->has('is_groom_photo')) {
            Photo::where('gallery_id', $photo->gallery_id)->update(['is_groom_photo' => false]);
            $photo->update(['is_groom_photo' => true]);
        } elseif ($request->has('is_bride_photo')) {
            Photo::where('gallery_id', $photo->gallery_id)->update(['is_bride_photo' => false]);
            $photo->update(['is_bride_photo' => true]);
        }

        return redirect()->back()->with('success', 'Photo status updated successfully.');
    }
>>>>>>> 6046cce4b268caee4da34dfe670fa94f3793067b
}
