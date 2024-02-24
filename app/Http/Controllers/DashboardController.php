<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Mendapatkan user yang sedang login
        $user = Auth::user();

        // Menentukan status berdasarkan nilai status pada user
        $status = $user->status == 0 ? 'Free' : 'Membership';

        // Menghitung jumlah data invitation milik user yang sedang login
        $invitationCount = Invitation::where('user_id', $user->id)->count();

        // Mengirimkan data ke view
        return view('admin.index', ['invitationCount' => $invitationCount, 'status' => $status]);
    }
}
