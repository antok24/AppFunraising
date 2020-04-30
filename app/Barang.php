<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $tabel = 't_barang';
    protected $fillable = ['kode_barang','nama_barang','merk_barang','nilai_perolehan','tahun_perolehan'];
}
