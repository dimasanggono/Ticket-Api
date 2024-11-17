<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'user_id', 'ticket_id', 'code_transaction', 'total_transaction', 'status'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id');
    }

    public function ticket()
    {
        return $this->belongsTo(ticket::class, 'ticket_id', 'id');
    }
}
