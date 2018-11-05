<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
  protected $fillable = [
    'nama',
    'nidn',
    'tempat_lahir',
    'tanggal_lahir'

  ];

  
}
