<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->date('fechaInicio')->nullable();
            $table->string('duracion');
            $table->integer('costo');
            $table->integer('costoMens');
            $table->integer('idMaestro')->unsigned();
            $table->foreign('idMaestro')->references('id')->on('maestros');
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
        Schema::dropIfExists('cursos');
    }
}
