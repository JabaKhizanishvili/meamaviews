<?php

namespace App\Livewire;

use Livewire\Component;

class ProfileTabs extends Component
{
    public $activeTab = 'account'; // დეფოლტად აქტიური ტაბი
    protected $queryString = ['activeTab' => ['except' => 'account']];

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
