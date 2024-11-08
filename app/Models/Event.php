<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_event', "description", "date", "location", "image_event"
    ];

    public function user()
    {
        return $this->hasOne(Event::class, 'user_id');
    }
}
