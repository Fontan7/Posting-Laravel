<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Network extends Model
{
  use SoftDeletes;
  protected $fillable = ['description', 'image', 'characters', 'view'];

  public function posts()
{

  return $this->belongsToMany(Post::class);
}
}
