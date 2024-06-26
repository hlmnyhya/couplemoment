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
>>>>>>> 7fa8e2330ce2d1ca7174b041708d2cf92c2c11e9

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
>>>>>>> 7fa8e2330ce2d1ca7174b041708d2cf92c2c11e9
}
