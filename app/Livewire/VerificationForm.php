<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Auth;


use Livewire\Component;

class VerificationForm extends Component
{
    public $iban;
    public $tiktok_link;

    public function mount()
    {
        $user = Auth::user();
        $this->iban = $user->iban?->iban ?? '';  // თუ ცარიელია, დააყენე ''-ზე

        // თუ socialAccount არის hasOne ურთიერთობა და აქვს 'url' სვეტი
        $this->tiktok_link = $user->socialAccount?->url ?? '';
    }

    public function save()
    {
        $this->validate([
            'iban' => 'required|string|min:10',
            'tiktok_link' => 'required|url',
        ]);

        $user = Auth::user();

//        iban
        $user->iban()->updateOrCreate(
            ['user_id' => $user->id],
            ['iban' => $this->iban]
        );

        // TikTok Link - SocialAccount
        $user->socialAccount()->updateOrCreate(
            ['user_id' => $user->id, 'provider' => 'tiktok'],
            ['url' => $this->tiktok_link]
        );

        $hasIban = $user->iban()->exists();
        $hasTikTok = $user->socialAccount()->where('provider', 'tiktok')->exists();

        if ($hasIban && $hasTikTok) {
            $user->verified = true;
            $user->save();
        }


        session()->flash('success', 'განახლდა წარმატებით ✅');
    }
    public function render()
    {
        return view('livewire.verification-form');
    }
}
