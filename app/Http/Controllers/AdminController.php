<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function registerPage()
    {
        return view('admin.register');
    }

    public function loginPage()
    {
        return view('admin.login');
    }

    public function AdminDashboard()
    {
        return view('admin.index');
    }
}
