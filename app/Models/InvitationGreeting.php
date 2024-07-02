<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvitationGreeting extends Model
{
    use HasFactory;

    protected $fillable = ['invitation_id', 'greetings_id'];

    public function invitation()
    {
        return $this->belongsTo(Invitation::class);
    }

    public function greeting()
    {
        return $this->belongsTo(Greeting::class, 'greetings_id');
    }
}
