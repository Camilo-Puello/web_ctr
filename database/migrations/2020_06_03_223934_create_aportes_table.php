<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aportes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tipo');
            $table->integer('doc');
            $table->string('email')->unique();
            $table->string('contacto1');
            $table->string('contacto2');
            $table->string('empresa');
            $table->string('razon');
            $table->integer('nit');
            $table->string('descripcion');
            $table->string('adjunto');
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
        Schema::dropIfExists('aportes');
    }
}
