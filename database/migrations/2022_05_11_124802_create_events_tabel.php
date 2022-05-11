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
        Schema::create('events_tabel', function (Blueprint $table) {
            $table->id();
            $table->string('tema_acara');
            $table->date('tanggal_acara');
            $table->integer('kuota');
            $table->longText('deskripsi');
            $table->string('lokasi');
            $table->string('kategori');
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
        Schema::dropIfExists('events_tabel');
    }
};
