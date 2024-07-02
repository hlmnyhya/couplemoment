<?php

namespace App\Http\Controllers;

use App\Models\Greeting;
use App\Models\GuestBook;
use App\Models\Invitation;
use App\Models\InvitationGreeting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UndanganController extends Controller
{
    public function index()
    {
        $user_id = Auth::id(); // Dapatkan ID user yang sedang login

        $invitations = Invitation::where('user_id', $user_id)->with('theme')->get();

        return view('admin.my-undangan.index', [
            'invitations' => $invitations,
        ]);
    }

    // public function show($title_invitation, $slug)
    // {
    //     $invitation = Invitation::where('title_invitation', $title_invitation)->firstOrFail();
    //     $guestbook = GuestBook::where('slug', $slug)->where('invitation_id', $invitation->id)->firstOrFail();

    //     // Mengambil data tema (theme) terkait
    //     $theme = $invitation->theme;

    //     // Set locale ke Bahasa Indonesia
    //     \Carbon\Carbon::setLocale('id');

    //     // Mengambil data relasi InvitationGreeting berdasarkan invitation_id
    //     $invitationGreetings = $invitation->invitationGreetings()->with('greeting')->get();
    //     // dd($invitation->theme->background_img);
    //     $formattedDate = \Carbon\Carbon::parse($invitation->date_invitation)->isoFormat('dddd, D MMMM YYYY');
    //     $formattedTime = \Carbon\Carbon::parse($invitation->time_invitation)->format('H.i');

    //     $formattedDateTime = \Carbon\Carbon::parse($invitation->date_invitation . ' ' . $invitation->time_invitation)->format('M d, Y H:i:s');

    //     return view('frontend.invitation-pages.invitation', compact('invitation', 'formattedDate', 'formattedTime', 'formattedDateTime', 'invitationGreetings', 'guestbook'));
    // }

    public function show($title_invitation, $slug)
    {
        $invitation = Invitation::where('title_invitation', $title_invitation)->firstOrFail();
        $guestbook = GuestBook::where('slug', $slug)->where('invitation_id', $invitation->id)->firstOrFail();

        // Mengambil data tema (theme) terkait
        $theme = $invitation->theme;

        // Mengambil data galeri terkait
        $galleries = $invitation->galleries;

        // Mengambil data foto terkait dari setiap galeri (maksimal 3 foto per galeri)
        $ascendingPhotos = [];
        $descendingPhotos = [];
        foreach ($galleries as $gallery) {
            $ascendingSortedPhotos = $gallery->photos->sortBy('file_path')->take(3);
            $descendingSortedPhotos = $gallery->photos->sortByDesc('file_path')->take(3);
            foreach ($ascendingSortedPhotos as $photo) {
                $ascendingPhotos[] = $photo;
            }
            foreach ($descendingSortedPhotos as $photo) {
                $descendingPhotos[] = $photo;
            }
        }


        // Mengambil data foto terkait dari setiap galeri yang memiliki is_title_photo bernilai true
        $filteredPhotos = [];
        foreach ($galleries as $gallery) {
            $galleryPhotos = $gallery->photos;
            foreach ($galleryPhotos as $photo) {
                if ($photo->is_title_photo || $photo->is_primary_photo || $photo->is_groom_photo || $photo->is_bride_photo) {
                    $filteredPhotos[] = $photo;
                }
            }
        }
        // Set locale ke Bahasa Indonesia
        \Carbon\Carbon::setLocale('id');

        // Mengambil data relasi InvitationGreeting berdasarkan invitation_id
        $invitationGreetings = $invitation->invitationGreetings()->with('greeting')->get();
        // dd($invitation->theme->background_img);
        $formattedDate = \Carbon\Carbon::parse($invitation->date_invitation)->isoFormat('dddd, D MMMM YYYY');
        $formattedTime = \Carbon\Carbon::parse($invitation->time_invitation)->format('H.i');

        $formattedDateTime = \Carbon\Carbon::parse($invitation->date_invitation . ' ' . $invitation->time_invitation)->format('M d, Y H:i:s');

        return view('frontend.invitation-pages.invitation', compact('invitation', 'formattedDate', 'formattedTime', 'formattedDateTime', 'invitationGreetings', 'guestbook', 'ascendingPhotos', 'descendingPhotos', 'filteredPhotos'));
    }


    public function show_by_url($title_invitation)
    {
        $invitation = Invitation::where('title_invitation', $title_invitation)->with('theme')->firstOrFail();
        // dd($invitation);
        // Mendapatkan data soundbank terkait
        $soundbank = $invitation->soundbank;

        // Mengambil data galeri terkait
        $galleries = $invitation->galleries;

        // Mengambil data foto terkait dari setiap galeri (maksimal 3 foto per galeri)
        $ascendingPhotos = [];
        $descendingPhotos = [];
        foreach ($galleries as $gallery) {
            $ascendingSortedPhotos = $gallery->photos->sortBy('file_path')->take(3);
            $descendingSortedPhotos = $gallery->photos->sortByDesc('file_path')->take(3);
            foreach ($ascendingSortedPhotos as $photo) {
                $ascendingPhotos[] = $photo;
            }
            foreach ($descendingSortedPhotos as $photo) {
                $descendingPhotos[] = $photo;
            }
        }

        // Mengambil data foto terkait dari setiap galeri yang memiliki is_title_photo bernilai true
        $filteredPhotos = [];
        foreach ($galleries as $gallery) {
            $galleryPhotos = $gallery->photos;
            foreach ($galleryPhotos as $photo) {
                if ($photo->is_title_photo || $photo->is_primary_photo || $photo->is_groom_photo || $photo->is_bride_photo) {
                    $filteredPhotos[] = $photo;
                }
            }
        }

        // Set locale ke Bahasa Indonesia
        \Carbon\Carbon::setLocale('id');

        // Mengambil data relasi InvitationGreeting berdasarkan invitation_id
        $invitationGreetings = $invitation->invitationGreetings()->with('greeting')->get();
        // dd($invitation);

        $formattedDate = \Carbon\Carbon::parse($invitation->date_invitation)->isoFormat('dddd, D MMMM YYYY');
        $formattedTime = \Carbon\Carbon::parse($invitation->time_invitation)->format('H.i');
        $formattedDateTime = \Carbon\Carbon::parse($invitation->date_invitation . ' ' . $invitation->time_invitation)->format('M d, Y H:i:s');
        // dd($soundbank->file_mp3);
        return view('frontend.invitation-pages.invitation', compact('invitation', 'formattedDate', 'formattedTime', 'invitationGreetings', 'formattedDateTime', 'galleries', 'ascendingPhotos', 'descendingPhotos', 'filteredPhotos'));
    }

    public function simpanUcapan(Request $request)
    {
        $validatedData = $request->validate([
            'formnama' => 'required',
            'hadiran' => 'required',
            'formpesan' => 'required',
        ]);

        $invitation = Invitation::where('url', $request->url)->firstOrFail();

        $greeting = new Greeting();
        $greeting->nama = $request->input('formnama');
        $greeting->kehadiran = $request->input('hadiran');
        $greeting->ucapan_doa = $request->input('formpesan');
        $greeting->save();

        // Simpan relasi antara ucapan dan undangan di tabel pivot
        $invitationGreeting = new InvitationGreeting();
        $invitationGreeting->invitation_id = $invitation->id;
        $invitationGreeting->greetings_id = $greeting->id;
        $invitationGreeting->save();

        return response()->json(['success' => true, 'greeting' => $greeting]);
    }
}
