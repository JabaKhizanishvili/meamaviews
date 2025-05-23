<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Billing extends Component
{
    public function render()
    {
        $user = Auth::user();
        return view('livewire.billing', compact('user'));
    }
}
