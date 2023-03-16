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
        Schema::create('medicinas', function (Blueprint $table) {
            $table->id();
            $table->string('NombreMedicamento');
            $table->string('TipoMedicamento');
            $table->string('ContenidoMedicamento');
            $table->decimal('PrecioMedicamento',10,2);
            $table->bigInteger('cantidad');
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
        Schema::dropIfExists('medicinas');
    }
};
