<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Livewire\Component;
class FrontEndController extends Controller
{
    //

    public function profile(Request $request){

        return view('livewire.profile');
    }
    public function dashboard()
    {
//        return view('pages.dashboard');
//        return view('profile.show');
        return view('livewire.dashboard')->layout('layouts.app');
    }

    public function billing(){
        return view('livewire.billing');
    }

    public function tables()
    {
        return view('livewire.tables');
    }


    public function user_profile()
    {
//        return view('livewire.user_profile');
        return view('livewire.laravel-examples.user-profile');
    }


    public function user_management(){
        return view('livewire.laravel-examples.user-management');
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
