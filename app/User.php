<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $primaryKey = 'user_id';
    public $timestamps = false;
    public function books(){
    return $this->hasMany('App\Book', 'user_id', 'user_id');
  }
}
