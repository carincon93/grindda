<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->longText('resultado');
            $table->string('lineaProgramatica');
            $table->date('fechaCreacion');
            $table->longText('objetivoGeneral');
            $table->string('imagen')->nullable();
            $table->string('url', 256)->nullable();
            $table->unsignedInteger('lider_id');
            // $table->string('estado');
            $table->string('estadoPublicacion');
            $table->foreign('lider_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('proyectos');
    }
}
