<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // guarded = gk boleh diisi datanya
    // fillable = boleh diisi datanya nya
    // untuk mencegah user jahat
    protected $fillable = ['nama', 'nrp', 'email', 'jurusan'];
}
