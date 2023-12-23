<?php

namespace App\Http\Controllers\CMS;

use Alert;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GuestBook;
use Cviebrock\EloquentSluggable\Services\SlugService;
use App\Imports\GuestImport;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class GuestBookController extends Controller
{
    public function index()
    {
        $data = GuestBook::paginate(20);
        return view('admin.guest-books-pages.index', ['data' => $data]);
    }

    public function create()
    {
        return view('admin.guest-books-pages.store');
    }

    public function store(Request $request)
    {
        $nameGuest = $request->guest_name;
        $phone = $request->phone;

        foreach ($nameGuest as $key => $name) {
            $phoneNumber = $phone[$key];

            $existingGuest = GuestBook::where('guest_name', $name)->first();

            if ($existingGuest) {
                $uniqueSlug = SlugService::createSlug(GuestBook::class, 'slug', $name . '-' . uniqid());

                $guest = GuestBook::create([
                    'guest_name' => $name,
                    'phone' => $phoneNumber,
                    'slug' => $uniqueSlug,
                    'url' => '/guestbook/' . $uniqueSlug
                ]);
            } else {
                $uniqueSlug = SlugService::createSlug(GuestBook::class, 'slug', $name);

                $guest = GuestBook::create([
                    'guest_name' => $name,
                    'phone' => $phoneNumber,
                    'slug' => $uniqueSlug,
                    'url' => '/guestbook/' . $uniqueSlug
                ]);
            }
        }
        Alert::success('Hore!', 'Data kamu berhasil ditambahkan Yay!!!');
        return redirect()->route('guestbook.index');
    }

    public function edit($id)
    {
        $guest = GuestBook::findOrFail($id);
        return view('admin.guest-books-pages.edit', ['guest' => $guest]);
    }

    public function update(Request $request, $id)
    {
        $guest = GuestBook::find($id);

        if (!$guest) {
            Alert::error('Yahh!', 'Data kamu gagal diupdate, Maaf Ya!!!');
            return redirect()->route('guestbook.index');
        }

        $guest->guest_name = $request->guest_name;
        $guest->phone = $request->phone;

        if ($guest->isDirty('guest_name')) {
            $guest->slug = SlugService::createSlug(GuestBook::class, 'slug', $guest->guest_name);
            $guest->url = '/guestbook/' . $guest->slug;
        }

        $guest->save();
        Alert::success('Hore!', 'Data kamu berhasil diupdate Yay!!!');
        return redirect()->route('guestbook.index');
    }

    public function destroy($id)
    {
        $guest = GuestBook::find($id);
        if (!$guest) {
            return redirect()->route('guestbook.index')->with('error', 'Data tidak ditemukan');
        }

        $guest->delete();
        alert()->success('Hore!','Data kamu berhasil dihapus Yay!!!');
        return redirect()->route('guestbook.index')->with('success', 'Data berhasil dihapus');
    }

    public function import(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');

        $nama_file = $file->hashName();

        $path = $file->storeAs('public/excel/',$nama_file);

        $import = Excel::import(new GuestImport(), storage_path('app/public/excel/'.$nama_file));

        Storage::delete($path);

        if($import) {
            Alert::success('Hore!', 'Data kamu berhasil diupdate Yay!!!');
            return redirect()->route('guestbook.index');
        } else {
            Alert::error('Yahh!', 'Data kamu gagal diupdate, Maaf Ya!!!');
            return redirect()->route('guestbook.index');
        }
    }

}
