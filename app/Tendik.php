<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tendik extends Model
{
  protected $fillable = [
    'nama',
    'nip',
    'tempat_lahir',
    'tanggal_lahir'

  ];
}
