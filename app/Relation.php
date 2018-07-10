<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
  protected $fillable = ['user_id_1', 'user_id_2', 'state_id'];

  public function users()
{
  return $this->belongsTo(User::class, 'id', 'user_id_1');
}
}
