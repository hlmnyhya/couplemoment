<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assets extends Model
{
    use HasFactory;

    protected $fillable = ['theme_id', 'assets_img'];


    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }
}
