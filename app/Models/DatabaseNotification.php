<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatabaseNotification extends \Illuminate\Notifications\DatabaseNotification
{

    // --- get data attribute
    public function getDataAttribute()
    {
        if (isset($this->attributes['data'])) {
            $data = json_decode($this->attributes['data'], true);

            if (isset($this->attributes['serialized']) && $this->attributes['serialized']) {
                $obj = unserialize($data['data']);
                if (method_exists($obj, 'toDatabase')) {
                    return unserialize($data['data'])->toDatabase($this->notifiable);
                } else {
                    return unserialize($data['data'])->toArray($this->notifiable);
                }
            } else {
                return $data;
            }
        }

        return [];
    }
}
