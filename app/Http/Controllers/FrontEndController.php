<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Theme;
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
        $search = $request->input('search') ?? $request->search;

        $query = Theme::where('active', 1);

        if (!empty($search)) {
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', '%'.$search.'%')
                    ->orWhere('text', 'like', '%'.$search.'%');
            });
        }

        $theme = $query->paginate(6);
//        $theme = Theme::where('active', 1)->paginate('6');
        return view('pages.blog.minimal', compact('theme'));
    }

    public function SingleTheme(Request $request, $slug){
        $theme = Theme::where('slug', $slug)
            ->where('active', 1)
            ->firstOrFail();
        $similar = Theme::where('slug', '!=', $slug)
            ->where('active', 1)
            ->inRandomOrder()
            ->get()->take(3);


        return view('pages.blog.single', compact('theme', 'similar'));
    }

    public function PrivacyPolicy(){
        return view('pages.blog.privacy');
    }

    public function Terms(){
        return view('pages.blog.terms');
    }


}
