<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLugarPobladosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lugar_poblados', function (Blueprint $table) {
            $table->id();
            $table->string("nombre_lugar_poblado");
            $table->string("usuario")->nullable();
            $table->date("fecha_commit")->nullable();
            $table->time("hora_commit")->nullable();
            $table->integer("estatus")->nullable();
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
        Schema::dropIfExists('lugar_poblados');
    }
}
