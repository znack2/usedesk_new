<?php

namespace App\Observers;

use App\Models\User;

class UserObserver
{
    /**
     * Listen to the User created event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(User $user)
    {
        //
    }

    /**
     * Listen to the User deleting event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleting(User $user)
    {
        //
    }
}