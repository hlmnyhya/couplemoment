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
    //     $guestbook = GuestBook::where('slug', $slug)->firstOrFail();
    //     $invitation = $guestbook->invitation;
    //     $formattedDate = \Carbon\Carbon::parse($invitation->date_invitation)->isoFormat('dddd, D MMMM YYYY');
    //     $formattedTime = \Carbon\Carbon::parse($invitation->time_invitation)->format('H.i');
    //     dd($invitation);
    //     // Mengambil data relasi InvitationGreeting berdasarkan invitation_id
    //     $invitationGreetings = $invitation->invitationGreetings()->with('greeting')->get();

    //     return view('frontend.invitation-pages.invitation', compact('invitation', 'formattedDate', 'formattedTime', 'invitationGreetings'));
    // }

    public function show($title_invitation, $slug)
    {
        $invitation = Invitation::where('title_invitation', $title_invitation)->firstOrFail();
        $guestbook = GuestBook::where('slug', $slug)->where('invitation_id', $invitation->id)->firstOrFail();

        // Set locale ke Bahasa Indonesia
        \Carbon\Carbon::setLocale('id');

        // Mengambil data relasi InvitationGreeting berdasarkan invitation_id
        $invitationGreetings = $invitation->invitationGreetings()->with('greeting')->get();
        // dd($invitation);
        $formattedDate = \Carbon\Carbon::parse($invitation->date_invitation)->isoFormat('dddd, D MMMM YYYY');
        $formattedTime = \Carbon\Carbon::parse($invitation->time_invitation)->format('H.i');

        return view('frontend.invitation-pages.invitation', compact('invitation', 'formattedDate', 'formattedTime', 'invitationGreetings', 'guestbook'));
    }


    public function show_by_url($title_invitation)
    {
        $invitation = Invitation::where('title_invitation', $title_invitation)->firstOrFail();

        $formattedDate = \Carbon\Carbon::parse($invitation->date_invitation)->isoFormat('dddd, D MMMM YYYY');
        $formattedTime = \Carbon\Carbon::parse($invitation->time_invitation)->format('H.i');

        // Set locale ke Bahasa Indonesia
        \Carbon\Carbon::setLocale('id');

        // Mengambil data relasi InvitationGreeting berdasarkan invitation_id
        $invitationGreetings = $invitation->invitationGreetings()->with('greeting')->get();
        // dd($invitation);
        return view('frontend.invitation-pages.invitation', compact('invitation', 'formattedDate', 'formattedTime', 'invitationGreetings'));
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
