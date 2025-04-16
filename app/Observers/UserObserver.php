<?php

namespace App\Observers;

use App\Mail\UserChangedEmail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class UserObserver
{
    public function updated(User $user)
    {
        if ($user->email !== $user->getOriginal('email')) {
            Mail::to(config('mail.from.address'))
                ->send(new UserChangedEmail($user, $user->email, $user->getOriginal('email')));
        }
    }
}
