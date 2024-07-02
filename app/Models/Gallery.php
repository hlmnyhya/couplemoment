<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = ['gallery_name'];
=======
    protected $fillable = ['invitation_id', 'gallery_name'];
>>>>>>> 6046cce4b268caee4da34dfe670fa94f3793067b

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function totalSize()
    {
        // Get the total size of all photos in the gallery
        return $this->photos->sum->getFileSize();
    }
<<<<<<< HEAD
=======

    public function invitation()
    {
        return $this->belongsTo(Invitation::class, 'invitation_id');
    }
>>>>>>> 6046cce4b268caee4da34dfe670fa94f3793067b
}
