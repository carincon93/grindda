<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombreEvento')->unique();
            $table->string('clasificacion');
            $table->longText('descripcion');
            $table->string('lugar');
            $table->longText('logros');
            $table->string('imagen');
            $table->string('miniatura');
            $table->string('estadoPublicacion');
            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->year('ano');
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
        Schema::dropIfExists('eventos');
    }
}
