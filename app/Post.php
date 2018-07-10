<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Image;

class Post extends Model
{
    protected $fillable = ['text_post', 'user_id'];

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function networks()
  {
    return $this->belongsToMany(Network::class);
  }


}
