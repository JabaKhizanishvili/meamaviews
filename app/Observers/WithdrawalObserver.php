<?php

namespace App\Observers;

use App\Models\Withdrawal;

class WithdrawalObserver
{
    /**
     * Handle the Withdrawal "created" event.
     */
    public function created(Withdrawal $withdrawal): void
    {
        //
    }

    /**
     * Handle the Withdrawal "updated" event.
     */
    public function updated(Withdrawal $withdrawal): void
    {
        //
        if ($withdrawal->isDirty('status') && $withdrawal->status === 'approved') {
            // ერთხელ თუ იყო approved, აღარ ქნას იგივე
            if (!$withdrawal->approved_at) {
                $withdrawal->approved_at = now();
                $withdrawal->saveQuietly();

//                // ბალანსიდან გამოაკლოს
//                $user = $withdrawal->user;
//                $user->balance -= $withdrawal->amount;
//                $user->save();
            }
        }
    }

    /**
     * Handle the Withdrawal "deleted" event.
     */
    public function deleted(Withdrawal $withdrawal): void
    {
        //
    }

    /**
     * Handle the Withdrawal "restored" event.
     */
    public function restored(Withdrawal $withdrawal): void
    {
        //
    }

    /**
     * Handle the Withdrawal "force deleted" event.
     */
    public function forceDeleted(Withdrawal $withdrawal): void
    {
        //
    }
}
