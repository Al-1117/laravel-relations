<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    // TABELLA PONTE TRA SONGS E TAGS
    {
        Schema::create('song_tag', function (Blueprint $table) {
          // TABELLA SONGS
            $table->unsignedBigInteger('song_id');
            $table->foreign('song_id')
                  ->references('id')
                  ->on('songs');

          // TABELLA TAGS
            $table->unsignedBigInteger('tag_id');
            $table->foreign('tag_id')
                  ->references('id')
                  ->on('tags');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('song_tag');
    }
}
