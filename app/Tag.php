<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  protected $fillable = [
    'name',
  ];

  // Creo la relazione con il model Song

  public function songs(){
    return $this->belongsToMany('App\Song');
  }
}
