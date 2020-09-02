<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transportes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('apellido');
            $table->string('sex');
            $table->string('f_nac');
            $table->string('lugar_nac');
            $table->string('tipo_doct');
            $table->integer('num_doct');
            $table->string('tipo_lic');
            $table->string('num_lic');
            $table->string('f_vencimiento');
            $table->string('num_libret_t');
            $table->string('pasado_judicial');
            $table->string('estado_civil');
            $table->string('ciudad_recidencia');
            $table->string('dir');
            $table->string('logo');
            $table->string('t_fijo');
            $table->string('t_celular');
            $table->string('experiencia',500);
            $table->string('correo');
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
        Schema::dropIfExists('transportes');
    }
}
