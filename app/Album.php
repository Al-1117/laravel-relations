<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
  // Creo la variabile fillable per le colonne da gestire
  protected $fillable = [
    'title',
    'artist',
    'year',
  ];

  public function songs() {

    // faccio la relazione tra con la tabella songs
    return $this->hasMany('App\Song');


  }
}
