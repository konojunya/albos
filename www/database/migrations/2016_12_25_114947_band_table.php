<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('band', function (Blueprint $table) {
            $table->string('band_id', 10)->unique();
            $table->string('band_name', 20);
            $table->string('mail_address', 40);
            $table->string('band_icon_pass', 40);
            $table->string('band_profile_bg_path', 40);
            $table->text('band_profile');
            $table->string('activity_area', 20);
            $table->string('genre_array', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('band');
    }
}
