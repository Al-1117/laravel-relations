<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covers', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->timestamps();
            // Creo la colonna album id
            $table->unsignedBigInteger('album_id');
            // Faccio la relazione col la tabella albums
            $table->foreign('album_id')
                // Riferimento alla album id
                  ->references('id')
                  // Nella tabella albums
                  ->on('albums');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('covers');
    }
}
