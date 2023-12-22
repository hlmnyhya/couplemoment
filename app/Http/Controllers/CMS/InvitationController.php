<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function index()
    {
        return view('admin.invitation-pages.index');
    }
}
