<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_barang', function (Blueprint $table) {
            $table->id();
            $table->char('kode_barang')->unique();
            $table->string('nama_barang');
            $table->string('merk_barang');
            $table->string('nilai_perolehan');
            $table->string('tahun_perolehan');
            $table->string('user_created');
            $table->string('user_updated');
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
        Schema::dropIfExists('t_barang');
    }
}
