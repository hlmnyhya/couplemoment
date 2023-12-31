<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoundBank extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'singer', 'duration', 'file_mp3'];

    public function invitations()
    {
        return $this->hasMany(Invitation::class, 'soundbank_id');
    }
}
