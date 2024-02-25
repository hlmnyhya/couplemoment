<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = ['gallery_id', 'file_name', 'file_path', 'is_title_photo', 'is_primary_photo', 'is_groom_photo', 'is_bride_photo'];

    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }

    public function getFileSize()
    {
        // Get the file size of the all photos in the gallery
        return filesize(public_path($this->file_path));
    }
}
