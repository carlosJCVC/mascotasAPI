<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdoptionRequests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $departamentos = ["LP", "OR", "PT", "CB", "SC", "BN", "PA", "TJ", "CH"];

        Schema::create('adoption_applications', function (Blueprint $table) use ($departamentos) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('cedula_identidad');
            $table->string('correo_electronico');
            $table->enum('departamento', $departamentos)->default("CB");
            $table->string('provincia');
            $table->string('direccion');
            $table->string('ocupacion');
            $table->enum('estado_civil', ["soltero", "casado", "divorciado", "viudo"]);
            $table->enum('estado_solicitud', ["ACEPTADO", "RECHAZADO", "EN PROCESO"])->default("EN PROCESO");
            $table->text('razon_adopcion');
            $table->text('mascotas_actuales');
            $table->text('razon_mascotas_esterilizadas');
            $table->text('mascotas_anteriomente');
            $table->text('estado_mascotas_anteriores');
            $table->text('visita_periodica_domicilio');

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
        Schema::dropIfExists('adoption_applications');
    }
}
