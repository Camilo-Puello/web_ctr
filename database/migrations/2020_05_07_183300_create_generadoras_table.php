<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneradorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generadoras', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('dir');
            $table->string('telefono');
            $table->string('cel');
            $table->string('correo');
            $table->string('descripcion', 500);
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
        Schema::dropIfExists('generadoras');
    }
}
