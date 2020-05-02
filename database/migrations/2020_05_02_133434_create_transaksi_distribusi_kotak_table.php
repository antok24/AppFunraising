<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiDistribusiKotakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_distribusi_kotak', function (Blueprint $table) {
            $table->increments('id_transaksi');
            $table->datetime('tanggal_distribusi');
            $table->datetime('tanggal_tarik');
            $table->string('id_karyawan');
            $table->string('nama_toko');
            $table->string('alamat');
            $table->string('hp');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->string('penanda_lokasi');
            $table->string('kode_kotak');
            $table->string('status');
            $table->string('area');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_distribusi_kotak');
    }
}
