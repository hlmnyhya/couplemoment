<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Greeting extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'kehadiran', 'ucapan_doa'];

    public function invitations()
    {
        return $this->belongsToMany(Invitation::class, 'invitation_greetings');
    }
}
