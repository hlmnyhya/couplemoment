<?php

namespace App\Http\Controllers;

use App\Models\GuestBook;
use App\Models\Invitation;
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

    public function show($url, $slug)
    {
        $guestbook = GuestBook::where('slug', $slug)->firstOrFail();
        $invitation = $guestbook->invitation;
        // dd($invitation);

        $formattedDate = \Carbon\Carbon::parse($invitation->date_invitation)->isoFormat('dddd, D MMMM YYYY');
        $formattedTime = \Carbon\Carbon::parse($invitation->time_invitation)->format('H.i');
        return view('frontend.invitation-pages.invitation', compact('invitation', 'formattedDate', 'formattedTime'));
    }

    public function show_by_url($url)
    {
        $invitation = Invitation::where('url', $url)->firstOrFail();

        $formattedDate = \Carbon\Carbon::parse($invitation->date_invitation)->isoFormat('dddd, D MMMM YYYY');
        $formattedTime = \Carbon\Carbon::parse($invitation->time_invitation)->format('H.i');

        return view('frontend.invitation-pages.invitation', compact('invitation', 'formattedDate', 'formattedTime'));
    }
}
