<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            $table->string('NombreDueno');
            $table->string('ApellidoP');
            $table->string('ApellidoM');
            $table->bigInteger('TelefonoDueno');
            $table->string('NombreMascota');
            $table->string('EspecieMascota');
            $table->string('RazaMascota');
            $table->string('PesoMascota')->nullable();
            $table->string('AsistenciaStatus')->default('En espera');
            $table->date('FechaCita');
            $table->string('DiagnosticoMascota')->nullable();
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
        Schema::dropIfExists('consultas');
    }
};
