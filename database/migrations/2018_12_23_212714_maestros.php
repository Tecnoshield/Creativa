<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Maestros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maestros', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 40);
            $table->string('apPat', 40)->nullable();
            $table->string('apMat', 40)->nullable();
            $table->string('telC', 15)->nullable();
            $table->string('telP',15)->nullable();
            $table->string('comentarios')->nullable();
            $table->integer('status');
            
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
        Schema::dropIfExists('maestros');
        
    }
}
