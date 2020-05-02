<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DistribusiKotak extends Model
{
    protected $table = 'transaksi_distribusi_kotak';
    protected $guarded = ['id','created_at', 'updated_at'];
}
