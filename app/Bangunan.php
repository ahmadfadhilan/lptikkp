<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bangunan extends Model
{
    protected $fillable = [
      'name',
      'tahun_bangun',
      'jumlah_lantai',
      'luas'
    ];

    public function ruangans(){
      return $this->hasMany('App\Ruangan');
    }
}
