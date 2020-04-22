<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineasInvestigacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lineas_investigacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->date('fechaCreacion');
            $table->longText('descripcion');
            $table->string('imagen');
            $table->unsignedInteger('lider_id');
            $table->string('estado');
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
        Schema::dropIfExists('lineas_investigacion');
    }
}
