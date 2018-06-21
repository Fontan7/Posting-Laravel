<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Image;

class Post extends Model
{
    //
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
