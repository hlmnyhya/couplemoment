<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = ['invitation_id', 'gallery_name'];

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function totalSize()
    {
        // Get the total size of all photos in the gallery
        return $this->photos->sum->getFileSize();
    }

    public function invitation()
    {
        return $this->belongsTo(Invitation::class, 'invitation_id');
    }
}
