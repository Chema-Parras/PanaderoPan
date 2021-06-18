<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePanaderosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panaderos', function (Blueprint $table) {
            $table->id('id_Panadero');
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Telefono');
            $table->string('DNI');
            $table->string('Movil');
            $table->string('Correo');
            $table->string('Direccion');
            $table->string('CodPostal');
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
        Schema::dropIfExists('panaderos');
    }
}
