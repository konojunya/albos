<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlbumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album', function (Blueprint $table) {
            $table->string('album_id', 10)->unique();
            $table->string('album_title', 20);
            $table->string('artwork_path', 40);
            $table->string('property', 20);
            $table->date('release');
            $table->string('band_id', 10);
            $table->string('genre_id', 10);
            

            // $table->foreign('band_id')->references('band')->on('band_id');
            // $table->foreign('genre_id')->references('genre')->on('genre_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('album');
    }
}
