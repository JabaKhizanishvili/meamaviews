<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ChangePassword extends Component
{
    public $user;
    public $current_password;
    public $new_password;
    public $repeat_password;
    public $showSuccesNotification=false;

    protected $rules = [
        'current_password' => 'required|min:6',
        'new_password' => 'required|min:6',
        'repeat_password' => 'required|same:new_password',
    ];

    public function mount()
    {
        $this->user =  Auth::user();
        $this->showSuccesNotification = false;
    }

    public function changePassword()
    {
        $this->validate();

        if (!Hash::check($this->current_password, $this->user->password)) {
            $this->addError('current_password', 'მიმდინარე პაროლი არასწორია');
            return;
        }
        $this->user->password = Hash::make($this->new_password);
        $this->user->save();

        $this->reset(['current_password', 'new_password', 'repeat_password']);
        $this->showSuccesNotification = true;


    }

    public function render()
    {
        return view('livewire.change-password');
    }
}
