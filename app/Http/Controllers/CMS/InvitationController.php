<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\Invitation;
use App\Models\SoundBank;
use App\Models\Theme;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function index()
    {
        $themes = Theme::all(); // Mengambil semua tema dari database

        $soundbanks = SoundBank::all(); // Mengambil semua bank suara dari database

        return view('admin.invitation-pages.index', [
            'themes' => $themes,
            'soundbanks' => $soundbanks // Mengirim data bank suara ke tampilan
        ]);
    }


    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'theme_id' => 'required',
            'soundbank_id' => 'required',
            'title_invitation' => 'required',
            'name' => 'required',
            'url' => 'required',
            'description' => 'required',
            'date_invitation' => 'required|date',
            'time_invitation' => 'required',
            'timezone' => 'required',
            'address_invitation' => 'required',
            'address_url' => 'required',
            'address_maps' => 'required',
        ]);

        // Buat objek Invitation baru
        $invitation = new Invitation();
        $invitation->theme_id = $validatedData['theme_id'];
        $invitation->soundbank_id = $validatedData['soundbank_id'];
        $invitation->title_invitation = $validatedData['title_invitation'];
        $invitation->name = $validatedData['name'];
        $invitation->url = $validatedData['url'];
        $invitation->description = $validatedData['description'];
        $invitation->date_invitation = $validatedData['date_invitation'];
        $invitation->time_invitation = $validatedData['time_invitation'];
        $invitation->timezone = $validatedData['timezone'];
        $invitation->address_invitation = $validatedData['address_invitation'];
        $invitation->address_url = $validatedData['address_url'];
        $invitation->address_maps = $validatedData['address_maps'];

        // Simpan data ke dalam database
        $invitation->save();

        // Redirect ke halaman atau berikan respons sesuai kebutuhan Anda
        return redirect()->route('my-undangan')->with('success', 'Invitation created successfully');
    }


    public function getTheme($id)
    {
        $theme = Theme::find($id);

        if (!$theme) {
            return response()->json(['error' => 'Theme not found'], 404);
        }

        // Sesuaikan dengan struktur data yang ingin Anda kirimkan kembali ke frontend
        return response()->json([
            'code' => $theme->code, // Ubah dengan nama kolom yang sesuai
            'background_img' => $theme->background_img, // Ubah dengan nama kolom yang sesuai
            // Anda dapat menambahkan data lain yang diperlukan di sini
        ]);
    }

    public function getSoundbank($id)
    {
        // Lakukan pengambilan data soundbank berdasarkan ID yang diberikan
        $soundbank = Soundbank::find($id);

        if (!$soundbank) {
            return response()->json(['error' => 'Soundbank not found'], 404);
        }

        // Sesuaikan dengan struktur data yang ingin Anda kirimkan kembali ke frontend
        return response()->json([
            'audio_src' => $soundbank->file_mp3, // Ubah dengan nama kolom yang sesuai
            // Anda dapat menambahkan data lain yang diperlukan di sini
        ]);
    }

    public function edit($id)
    {
        $themes = Theme::all();

        $soundbanks = SoundBank::all();

        $invitation = Invitation::findOrFail($id);

        return view('admin.invitation-pages.edit', [
            'themes' => $themes,
            'soundbanks' => $soundbanks,
            'invitation' => $invitation
        ]);
    }

    public function update(Request $request, $id)
    {
        $invitation = Invitation::findOrFail($id);
        $validatedData = $request->validate([
            'theme_id' => 'required',
            'soundbank_id' => 'required',
            'title_invitation' => 'required',
            'name' => 'required',
            'url' => 'required',
            'description' => 'required',
            'date_invitation' => 'required|date',
            'time_invitation' => 'required',
            'timezone' => 'required',
            'address_invitation' => 'required',
            'address_url' => 'required',
            'address_maps' => 'required',
        ]);

        $invitation->theme_id = $validatedData['theme_id'];
        $invitation->soundbank_id = $validatedData['soundbank_id'];
        $invitation->title_invitation = $validatedData['title_invitation'];
        $invitation->name = $validatedData['name'];
        $invitation->url = $validatedData['url'];
        $invitation->description = $validatedData['description'];
        $invitation->date_invitation = $validatedData['date_invitation'];
        $invitation->time_invitation = $validatedData['time_invitation'];
        $invitation->timezone = $validatedData['timezone'];
        $invitation->address_invitation = $validatedData['address_invitation'];
        $invitation->address_url = $validatedData['address_url'];
        $invitation->address_maps = $validatedData['address_maps'];

        $invitation->save();
        return redirect()->route('my-undangan')->with('success', 'Invitation updated successfully');
    }

    public function destroy($id)
    {
        $invitation = Invitation::findOrFail($id);
        $invitation->delete();

        return redirect()->route('my-undangan')->with('success', 'Invitation deleted successfully');
    }

    public function test()
    {
        return view('admin.invitation-pages.test');
    }

    public function test2()
    {
        return view('admin.invitation-pages.test2');
    }
}
