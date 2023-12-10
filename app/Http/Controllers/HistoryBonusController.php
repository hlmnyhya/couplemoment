<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryBonusController extends Controller
{
    public function index()
    {
        return view ('admin.history-bonus.index');
    }
}
