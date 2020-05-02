<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';
    protected $fillable = ['id','nama_karyawan', 'alamat', 'no_hp', 'email', 'status','nama_pasangan'];
}
