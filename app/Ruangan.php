<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
  protected $fillable = [
    'name',
    'bangunan_id',
    'luas_ruangan',
    'lantai',
    'peruntukkan',
    'kapasitas'

  ];

  public function bangunans(){
    return $this->belongsTo('App\Bangunan');
  }
}
