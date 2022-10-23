<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('image');
            $table->string('alamat');
            $table->text('excerpt');
            $table->foreignId('user_id');
            $table->foreignId('tipe_id');
            $table->foreignId('gender_id');
            $table->foreignId('provinsi_id');
            $table->foreignId('kota_id');
            $table->foreignId('kecamatan_id');
            $table->foreignId('daerah_id');
            $table->integer('harga');
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
        Schema::dropIfExists('produks');
    }
};
