<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Dashboard extends Component
{
    public function render()
    {
        $user = User::with('videos.theme')->find(Auth::user()->id);
//        $user = Auth::user();
        return view('livewire.dashboard', compact('user'));
    }
}
