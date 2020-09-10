<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
  // Creo la variabile fillable per le colonne da gestire

  protected $fillable = [
    'title',
    'genre',
    'album_id',

  ];

  public function album() {
    return $this->belongsTo('App\Album');
  }

  public function tags() {
    return $this->belongsToMany('App\Tag');
  }


}
