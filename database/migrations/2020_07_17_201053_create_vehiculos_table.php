<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('vinculado');
            $table->string('afiliado');         
            $table->string('placa');
            $table->string('clase');
            $table->string('marca');
            $table->string('modelo');
            $table->string('tipo');           
            $table->string('color');
            $table->string('linea');
            $table->string('motor');
            $table->string('chasis');
            $table->string('capacidad');
            $table->string('n_seguro_o');
            $table->date('f-vencimiento_o');
            $table->string('compañia_seguro_o');
            $table->string('n_seguro_contractual');
            $table->date('f-vencimiento_co');
            $table->string('compañia_seguro_co');
            $table->string('n_seguro_extracontractual');
            $table->date('f-vencimiento_ext');
            $table->string('compañia_seguro_ext');
            $table->integer('userId');
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
        Schema::dropIfExists('vehiculos');
    }
}
