<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pans', function (Blueprint $table) {
            $table->id('id_Pan');
            $table->string('Nombre');
            $table->string('Ingredientes');
            $table->string('ClasePan');
            $table->date('FechaHecho');
            $table->string('Foto');
            $table->double('Coste');
            $table->unsignedBigInteger('Panadero_id');
            $table->foreign('Panadero_id') 
            ->references('id_Panadero')
            ->on('panaderos');
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
        Schema::dropIfExists('pans');
    }
}
