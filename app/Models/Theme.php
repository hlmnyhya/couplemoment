<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code', 'cover', 'backround_img', 'description', 'status'];

    public function getStatusAttribute($value)
    {
        return $value == 0 ? 'Free' : 'Membership';
    }

    public function invitations()
    {
        return $this->hasMany(Invitation::class, 'theme_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Categories::class, 'theme_category', 'theme_id', 'category_id');
    }
}
