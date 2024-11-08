<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tickeCategory extends Model
{
    use HasFactory;

    protected $table = "ticket_categories";

    protected $fillable = [
        'event_id', 'price'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id', "id");
    }
}
