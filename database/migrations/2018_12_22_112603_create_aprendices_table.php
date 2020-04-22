<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAprendicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aprendices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('tipoDocumento');
            $table->bigInteger('numeroDocumento');
            $table->string('tipoVinculacion');
            $table->string('foto')->default('fotos-usuarios/foto-default.png')->nullable();
            $table->bigInteger('numeroCelular')->nullable();
            $table->string('enlace_CvLac', 256)->nullable();
            $table->string('estado');
            $table->unsignedInteger('programa_formacion_id');
            $table->foreign('programa_formacion_id')->references('id')->on('programas_formacion')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('aprendices');
    }
}
