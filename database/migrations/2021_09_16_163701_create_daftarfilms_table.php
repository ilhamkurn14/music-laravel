<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarfilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftarfilms', function (Blueprint $table) {
            $table->id();
            $table->string('Judul');
            $table->string('Sutradara');
            $table->string('Durasi');
            $table->unsignedBigInteger('GenreId');
            $table->foreign('GenreId')->references('id')->on('daftargenres');
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
        Schema::dropIfExists('daftarfilms');
    }
}
