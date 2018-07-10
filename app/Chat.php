<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
  protected $fillable = ['user_ori', 'user_dst', 'text_chat', 'created_at', 'updated_at'];
}
