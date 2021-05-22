<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->string("nombre_servicio");
            $table->string("descripcion_servicio");
            $table->decimal('precio_servicio', 8, 2);
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
        Schema::dropIfExists('servicios');
    }
}
