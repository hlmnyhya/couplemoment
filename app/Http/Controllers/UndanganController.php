<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use Illuminate\Http\Request;

class UndanganController extends Controller
{
    public function index()
    {
        $invitations = Invitation::all(); // Mengambil semua invitation dari database
        return view('admin.my-undangan.index', [
            'invitations' => $invitations,
        ]);
    }
}
