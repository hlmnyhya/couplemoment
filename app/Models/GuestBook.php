<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class GuestBook extends Model
{
    use HasFactory;

    use Sluggable;

    protected $fillable = [
        'id',
        'invitation_id',
        'guest_name',
        'phone',
        'url',
        'slug',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'guest_name'
            ],
            'url' => [
                'source' => 'guest_name'
            ]
        ];
    }

    public function invitation()
    {
        return $this->belongsTo(Invitation::class);
    }
}
