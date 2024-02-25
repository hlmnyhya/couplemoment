<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'theme_id', 'soundbank_id', 'title_invitation', 'panggilan_pria', 'panggilan_perempuan', 'name', 'name2', 'wali_name', 'wali_name2', 'code', 'thumbnail_img', 'language', 'url', 'description', 'date_invitation', 'time_invitation', 'timezone', 'address_invitation', 'address_url', 'address_maps', 'no_rekening', 'name_rekening'];

    public function theme()
    {
        return $this->belongsTo(Theme::class, 'theme_id');
    }

    public function soundbank()
    {
        return $this->belongsTo(SoundBank::class, 'soundbank_id');
    }

    public function invitationGreetings()
    {
        return $this->hasMany(InvitationGreeting::class, 'invitation_id');
    }
}
