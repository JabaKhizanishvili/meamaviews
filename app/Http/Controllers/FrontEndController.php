<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //
    public function dashboard()
    {
//        return view('pages.dashboard');
        return view('profile.show');
    }
}
