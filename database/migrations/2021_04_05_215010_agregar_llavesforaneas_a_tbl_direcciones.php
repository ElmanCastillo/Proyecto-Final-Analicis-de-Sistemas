<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregarLlavesforaneasATblDirecciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('direccions', function (Blueprint $table) {
            $table->unsignedBigInteger('cliente')->after('id');
            $table->foreign("cliente")
                ->references("id")
                ->on("clientes")
                ->onDelete("cascade")
                ->onUpdate("cascade");
            $table->unsignedBigInteger('lugar_poblado')->after('cliente');
            $table->foreign("lugar_poblado")
                ->references("id")
                ->on("lugar_poblados")
                ->onDelete("cascade")
                ->onUpdate("cascade");
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('direcciones', function (Blueprint $table) {
            //
        });
    }
}
