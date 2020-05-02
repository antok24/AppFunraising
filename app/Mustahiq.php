<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mustahiq extends Model
{
    protected $table = 't_mustahiq';
    protected $fillable = ['id_mustahiq','nama_mustahiq', 'alamat', 'no_tlp', 'jenis', 'jumlah','ket'];
}
