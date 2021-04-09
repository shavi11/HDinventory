<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discos', function (Blueprint $table) {
<<<<<<< HEAD
            $table->string('id');
=======
            $table->bigIncrements('id');
            $table->string('id_numero');
>>>>>>> javier
            $table->string('targetaLogica');
            $table->string('modelo');
            $table->string('marca');
            $table->string('capacidad');
            $table->string('tipoEntrada');
            $table->string('compatibilidad');
            $table->text('observaciones')->nullable();
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
        Schema::dropIfExists('discos');
    }
}
