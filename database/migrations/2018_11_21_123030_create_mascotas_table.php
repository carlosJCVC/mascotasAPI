<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMascotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('raza');
            $table->string('especie');
            $table->string('edad');
            $table->string('sexo');
            $table->boolean('estado');
            $table->binary('imagen')->nullable();
            $table->string('enfermedades');
            $table->string('procedencia');
            $table->string('descripcion');
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
        Schema::dropIfExists('mascotas');
    }
}