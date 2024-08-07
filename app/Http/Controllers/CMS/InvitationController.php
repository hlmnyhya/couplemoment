<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\Invitation;
use App\Models\SoundBank;
use App\Models\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class InvitationController extends Controller
{
    public function index()
    {

        $userStatus = Auth::user()->status; // Mengambil status pengguna yang sedang login

        // Mengambil tema-tema yang sesuai dengan status pengguna
        $themes = Theme::where('status', $userStatus)->get();

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
            'panggilan_pria' => 'required',
            'panggilan_perempuan' => 'required',
            'name' => 'required',
            'name2' => 'required',
            'wali_name' => 'required',
            'wali_name2' => 'required',
            // 'url' => 'required',
            'description' => 'required',
            'date_invitation' => 'required|date',
            'time_invitation' => 'required',
            'timezone' => 'required',
            'address_invitation' => 'required',
            'address_url' => 'required',
            // 'address_maps' => 'required',
            'nama_bank' => 'required',
            'no_rekening' => 'required',
            'name_rekening' => 'required',
        ]);

        $user = auth()->user();

        // Buat objek Invitation baru
        $invitation = new Invitation();
        $invitation->theme_id = $validatedData['theme_id'];
        $invitation->soundbank_id = $validatedData['soundbank_id'];
        $invitation->title_invitation = $validatedData['title_invitation'];
        $invitation->panggilan_pria = $validatedData['panggilan_pria'];
        $invitation->panggilan_perempuan = $validatedData['panggilan_perempuan'];
        $invitation->name = $validatedData['name'];
        $invitation->name2 = $validatedData['name2'];
        $invitation->wali_name = $validatedData['wali_name'];
        $invitation->wali_name2 = $validatedData['wali_name2'];
        // $invitation->url = $validatedData['url'];
        $invitation->description = $validatedData['description'];
        $invitation->date_invitation = $validatedData['date_invitation'];
        $invitation->time_invitation = $validatedData['time_invitation'];
        $invitation->timezone = $validatedData['timezone'];
        $invitation->address_invitation = $validatedData['address_invitation'];
        $invitation->address_url = $validatedData['address_url'];
        // $invitation->address_maps = $validatedData['address_maps'];
        $invitation->nama_bank = $validatedData['nama_bank'];
        $invitation->no_rekening = $validatedData['no_rekening'];
        $invitation->name_rekening = $validatedData['name_rekening'];

        // Assign user_id berdasarkan user yang sedang login
        $invitation->user_id = $user->id;

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
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'theme_id' => 'required',
            'soundbank_id' => 'required',
            'title_invitation' => 'required',
            'panggilan_pria' => 'required',
            'panggilan_perempuan' => 'required',
            'name' => 'required',
            'name2' => 'required',
            'wali_name' => 'required',
            'wali_name2' => 'required',
            // 'url' => 'required',
            'description' => 'required',
            'date_invitation' => 'required|date',
            'time_invitation' => 'required',
            'timezone' => 'required',
            'address_invitation' => 'required',
            'address_url' => 'required',
            // 'address_maps' => 'required',
            'nama_bank' => 'required',
            'no_rekening' => 'required',
            'name_rekening' => 'required',
        ]);

        // Cari invitation berdasarkan ID
        $invitation = Invitation::findOrFail($id);

        // Update data invitation
        $invitation->theme_id = $validatedData['theme_id'];
        $invitation->soundbank_id = $validatedData['soundbank_id'];
        $invitation->title_invitation = $validatedData['title_invitation'];
        $invitation->panggilan_pria = $validatedData['panggilan_pria'];
        $invitation->panggilan_perempuan = $validatedData['panggilan_perempuan'];
        $invitation->name = $validatedData['name'];
        $invitation->name2 = $validatedData['name2'];
        $invitation->wali_name = $validatedData['wali_name'];
        $invitation->wali_name2 = $validatedData['wali_name2'];
        // $invitation->url = $validatedData['url'];
        $invitation->description = $validatedData['description'];
        $invitation->date_invitation = $validatedData['date_invitation'];
        $invitation->time_invitation = $validatedData['time_invitation'];
        $invitation->timezone = $validatedData['timezone'];
        $invitation->address_invitation = $validatedData['address_invitation'];
        $invitation->address_url = $validatedData['address_url'];
        // $invitation->address_maps = $validatedData['address_maps'];
        $invitation->nama_bank = $validatedData['nama_bank'];
        $invitation->no_rekening = $validatedData['no_rekening'];
        $invitation->name_rekening = $validatedData['name_rekening'];

        // Simpan perubahan ke dalam database
        $invitation->save();

        // Redirect ke halaman atau berikan respons sesuai kebutuhan Anda
        return redirect()->route('my-undangan')->with('success', 'Invitation updated successfully');
    }


    public function destroy($id)
    {
        $invitation = Invitation::findOrFail($id);
        $invitation->delete();

        return redirect()->route('my-undangan')->with('success', 'Invitation deleted successfully');
    }

    // public function test()
    // {
    //     return view('frontend.invitation-pages.invitation');
    // }

    public function simpanUcapan(Request $request)
    {
        // Validasi data form di sini jika diperlukan

        $data = [
            'nama' => $request->input('formnama'),
            'kehadiran' => $request->input('hadiran'),
            'pesan' => $request->input('formpesan'),
            'waktu' => Carbon::now()->toDateTimeString(),
            // tambahkan data lainnya sesuai kebutuhan
        ];

        $existingData = json_decode(Storage::get('public/ucapan.json'), true) ?? [];
        $existingData[] = $data;

        // Sort the data by timestamp in descending order
        usort($existingData, function ($a, $b) {
            return strtotime($b['waktu']) - strtotime($a['waktu']);
        });

        Storage::put('public/ucapan.json', json_encode($existingData));

        // Tambahkan logika lainnya jika diperlukan

        return redirect()->back();
    }
}
