<?php

namespace App\Http\Controllers;

use App\Models\Contact;
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
        $contacts = Contact::first();
        return view('pages.contact-us-v1', compact('contacts'));
    }

    public function Themes(Request $request){
        return view('pages.blog.minimal');
    }
}
