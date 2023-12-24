<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;

    protected $fillable = ['theme_id', 'title_invitation', 'name', 'code', 'thumbnail_img', 'language', 'url_description', 'date_invitation', 'time_invitation', 'timezone', 'address_invitation'];

    public function theme()
    {
        return $this->belongsTo(Theme::class, 'theme_id');
    }

    public function soundbank()
    {
        return $this->belongsTo(SoundBank::class, 'soundbank_id');
    }
}
