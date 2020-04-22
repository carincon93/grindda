<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposInvestigacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos_investigacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->longText('descripcion');
            $table->longText('que_hacemos');
            $table->longText('objetivo');
            $table->longText('mision');
            $table->longText('vision');
            $table->string('logo');
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
        Schema::dropIfExists('grupos_investigacion');
    }
}
