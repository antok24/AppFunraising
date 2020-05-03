<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiDonasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_donasi', function (Blueprint $table) {
            $table->increments('id_donasi');
            $table->string('donatur',20);
            $table->string('kategori',20);
            $table->string('jenis',20);
            $table->integer('jumlah');
            $table->datetime('tgl_transaksi');
            $table->text('ket');
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
        Schema::dropIfExists('transaksi_donasi');
    }
}
