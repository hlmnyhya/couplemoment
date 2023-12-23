<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code', 'backround_img', 'status'];

    public function getStatusAttribute($value)
    {
        return $value == 0 ? 'Free' : 'Membership';
    }
}
