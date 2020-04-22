<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSemillerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semilleros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('tipoSemillero');
            $table->date('fechaCreacion');
            $table->string('imagen');
            $table->longText('descripcion');
            $table->longText('mision');
            $table->longText('vision');
            $table->longText('justificacion');
            $table->longText('objetivoGeneral');
            $table->longText('objetivosEspecificos');
            $table->longText('logros');
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
        Schema::dropIfExists('semilleros');
    }
}
