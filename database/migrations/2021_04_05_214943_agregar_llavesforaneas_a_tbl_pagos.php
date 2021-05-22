<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregarLlavesforaneasATblPagos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pagos', function (Blueprint $table) {
            $table->unsignedBigInteger('servicio')->after('codigo_barra');
            $table->foreign("servicio")
                ->references("id")
                ->on("servicios")
                ->onDelete("cascade")
                ->onUpdate("cascade");
            $table->unsignedBigInteger('cliente')->after('servicio');
            $table->foreign("cliente")
                ->references("id")
                ->on("clientes")
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
        Schema::table('pagos', function (Blueprint $table) {
            //
        });
    }
}
