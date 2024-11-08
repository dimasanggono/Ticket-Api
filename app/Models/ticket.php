<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id', 'category_id', 'status'
    ];

    public function ticketCategory()
    {
        return $this->belongsTo(tickeCategory::class, 'order_id', 'id');
    }
}
