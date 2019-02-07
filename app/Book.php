<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $privaryKey = 'book_id';
    public $timestamps = false;

    public function author(){
    return $this->belongsTo('App\User');
  }
}
