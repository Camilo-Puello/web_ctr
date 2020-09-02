<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servs', function (Blueprint $table) {
            $table->id();
            $table->string('empresa'); 
            $table->string('fecha');           
            $table->string('origen');
            $table->string('destino');
            $table->string('h_salida');
            $table->string('h_llegada');
            $table->string('capacidad_d');
            $table->string('vehiculo'); 
            $table->string('contacto'); 
            $table->string('correo');
            $table->string('logo');
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
        Schema::dropIfExists('servs');
    }
}
