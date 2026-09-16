<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'code',
        'title',
        'description',
        'status', 
        'priority',
        'completed_at'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function TicketReplies()
    {
        return $this->hasMany(TicketReply::class);
    }
}
