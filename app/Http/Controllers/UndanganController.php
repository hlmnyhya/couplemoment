<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UndanganController extends Controller
{
    public function index()
    {
        return view('admin.my-undangan.index');
    }
}
