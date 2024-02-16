<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThemeCategory extends Model
{
    use HasFactory;

    protected $table = 'theme_category';

    protected $fillable = [
        'id',
        'theme_id',
        'category_id',
    ];

    public function theme()
    {
        return $this->belongsTo(Theme::class, 'theme_id');
    }

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }
}
