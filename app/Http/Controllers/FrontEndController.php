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

    public function About(){
        return view('about.v1');
    }
    public function Contact(){
        return view('pages.contact-us-v1');
    }
}
