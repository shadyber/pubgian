<?php

namespace App\Trait;

trait Notifiable
{
    use Notifier;

    public function notifications()
    {
        return $this->morphMany(DatabaseNotification::class, 'notifiable')->latest();
    }

}
