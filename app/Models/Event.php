<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';
    protected $fillable = [
        'name_event', "description", "date", "location", "image_event", "user_id"
    ];

    public function user()
    {
        return $this->hasOne(Event::class, 'user_id');
    }
}
