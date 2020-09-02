<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Ramsey\Uuid\v1;

class CreatePropietariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propietarios', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('doc_pro');
            $table->string('tenedor');
            $table->string('doc_ten');
            $table->string('trans');
            $table->string('afiliado');
            $table->string('conductor');
            $table->string('telef');            
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
            $table->string('manifiesto');
            $table->string('ciudad');
            $table->string('fecha');
            $table->string('r_carga');
            $table->string('tarjeta_p');
            $table->string('r_combustible');
            $table->string('tarjeta_re');
            $table->string('placa_re');            
            $table->string('num_ejes');
            $table->string('marc');                       
            $table->string('tecno_m');            
            $table->string('venci');
            $table->string('cer_gases');            
            $table->string('vto');
            $table->string('seg_obli');           
            $table->string('vence');
            $table->string('compa_sec');
            $table->string('seg_contra');           
            $table->string('ven');
            $table->string('compa_cont');
            $table->string('seg_extra');           
            $table->string('venc');
            $table->string('compa_extra');
            $table->string('image_1');
            $table->string('image_2');         
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
        Schema::dropIfExists('propietarios');
    }
}
