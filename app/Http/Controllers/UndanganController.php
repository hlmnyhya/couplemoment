<?php

namespace App\Http\Controllers;

use App\Models\GuestBook;
use App\Models\Invitation;
use Illuminate\Http\Request;

class UndanganController extends Controller
{
    public function index()
    {
        $guestbooks = GuestBook::all(); // atau Anda bisa mengambil sesuai kebutuhan Anda
        return view('admin.my-undangan.index', [
            'invitations' => Invitation::with('theme')->get(),
            'guestbooks' => $guestbooks,
        ]);
    }

    public function show($slug)
    {
        $guestbook = GuestBook::where('slug', $slug)->firstOrFail();
        $invitation = $guestbook->invitation;

        $formattedDate = \Carbon\Carbon::parse($invitation->date_invitation)->isoFormat('dddd, D MMMM YYYY');
        $formattedTime = \Carbon\Carbon::parse($invitation->time_invitation)->format('H.i');
        // dd($formattedDate);
        return view('frontend.invitation-pages.invitation', compact('invitation', 'formattedDate', 'formattedTime'));
    }
}
