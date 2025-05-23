<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Withdrawal;

class RequestWithdrawal extends Component
{
    public $user;

    public function mount() {
        $this->user = Auth::user();
    }

    public function request()
    {
        $today = now();
        $endOfMonth = $today->copy()->endOfMonth();
        $startAllowedDay = $endOfMonth->copy()->subDays(4);

        if ($today->lt($startAllowedDay)) {
            $this->dispatch('notify', type: 'error', message: 'გატანა შესაძლებელია მხოლოდ თვის ბოლო 5 დღეს.');
            return;
        }

        if ($this->user->available_balance < 50) {
            $this->dispatch('notify', type: 'error', message: 'გატანის მინიმუმი: 50 ლარი.');
            return;
        }

        $currentMonth = $today->format('Y-m');
        $existingWithdrawal = Withdrawal::where('user_id', $this->user->id)
            ->whereRaw("DATE_FORMAT(created_at, '%Y-%m') = ?", [$currentMonth])
            ->first();

        if ($existingWithdrawal) {
            $this->dispatch('notify', type: 'error', message: 'თვეში მხოლოდ ერთი გატანის მოთხოვნა შეგიძლიათ.');
            return;
        }


        Withdrawal::create([
            'user_id' => $this->user->id,
            'amount' => $this->user->available_balance,
            'status' => 'pending',
        ]);

        $this->dispatch('notify', type: 'success', message: 'გატანის მოთხოვნა გაგზავნილია.');
    }

    public function render()
    {
        return view('livewire.request-withdrawal');
    }
}
