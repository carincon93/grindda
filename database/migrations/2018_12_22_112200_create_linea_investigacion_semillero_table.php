<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineaInvestigacionSemilleroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linea_investigacion_semillero', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('linea_investigacion_id');
            $table->unsignedInteger('semillero_id');
            $table->foreign('linea_investigacion_id')->references('id')->on('lineas_investigacion')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('semillero_id')->references('id')->on('semilleros')->onDelete('cascade')->onUpdate('cascade');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('linea_investigacion_semillero');
    }
}
