<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MusicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music', function (Blueprint $table) {
            $table->string('album_id', 10)->unique();
            $table->string('music_id', 10)->unique();
            $table->string('music_title', 20);
            $table->text('lyrics');
            $table->integer('price');
            $table->string('music_data_path', 40);
            $table->time('time');

            $table->primary(['album_id', 'music_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('music');
    }
}
