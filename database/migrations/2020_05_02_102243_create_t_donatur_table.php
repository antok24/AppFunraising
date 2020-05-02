<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTDonaturTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_donatur', function (Blueprint $table) {
            $table->increments('id_donatur');
            $table->string('nama_donatur',40);
            $table->text('alamat');
            $table->string('no_tlp',15);
            $table->string('kecamatan',30);
            $table->string('kabupaten',30);
            $table->string('provinsi',30);
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
        Schema::dropIfExists('t_donatur');
    }
}
