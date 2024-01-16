<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function registerPersonal()
    {
        return view('admin.register');
    }

    public function registerVendor()
    {
        return view('admin.register_vendor');
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
