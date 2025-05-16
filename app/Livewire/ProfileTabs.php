<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProfileTabs extends Component
{
    public $activeTab = 'account'; // დეფოლტად აქტიური ტაბი
    protected $queryString = ['activeTab' => ['except' => 'account']];
    public $verified;

    public function mount(){
        $user = Auth::user();
        $this->verified = $user->fresh()->verified ?? false;
    }
    // ტაბის გადართვის მეთოდი
    public function switchTab($tab)
    {
        $this->activeTab = $tab;
    }
    public function render()
    {
        return view('livewire.profile-tabs');
    }
}
