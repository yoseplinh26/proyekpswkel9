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
    //method yang bertugas untuk lakukan generate atribut table
    public function up()
    {
        Schema::create('t_siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('asal');
            // $table->text('riwayat_hidup');

            $table->timestamps();
            // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
        //method yang bertugas untuk lakukan rollback/hapus atribut table
    public function down()
    {
        Schema::dropIfExists('t_siswas');
    }
};
