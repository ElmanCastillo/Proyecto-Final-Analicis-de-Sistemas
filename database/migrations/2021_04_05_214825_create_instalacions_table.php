<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstalacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instalacions', function (Blueprint $table) {
            $table->id();
            $table->string("dia");
            $table->string("mes");
            $table->string("anio");
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
        Schema::dropIfExists('instalacions');
    }
}
