<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function themes()
    {
        return $this->belongsToMany(Theme::class, 'theme_category', 'category_id', 'theme_id');
    }
}
