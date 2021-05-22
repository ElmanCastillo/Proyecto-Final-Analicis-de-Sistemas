<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregarLlavesforaneasATblInstalaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('instalacions', function (Blueprint $table) {
            $table->unsignedBigInteger('cliente')->after('id');
            $table->foreign("cliente")
                ->references("id")
                ->on("clientes")
                ->onDelete("cascade")
                ->onUpdate("cascade");
            $table->unsignedBigInteger('servicio')->after('cliente');
            $table->foreign("servicio")
                ->references("id")
                ->on("servicios")
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
        Schema::table('instalacions', function (Blueprint $table) {
            //
        });
    }
}
