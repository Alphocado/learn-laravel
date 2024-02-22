<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
  // agar nama table tidak berubah jadi jamak
  // agar ditau nama tablenya
  protected $table = 'mahasiswa';
}
