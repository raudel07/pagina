<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServiciosDomicilios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios_domicilios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_usuario')->unsigned();
            $table->bigInteger('id_producto')->unsigned();
            $table->string('direccion');
            $table->string('referencias');
            $table->timestamps();

            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_producto')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicios_domicilios');
    }
}
