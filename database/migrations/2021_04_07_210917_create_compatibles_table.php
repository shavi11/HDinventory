<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompatiblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compatibles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('targeta_logica');
            $table->unsignedBigInteger('id_logica');

            $table->foreign('id_logica')
            ->references('id')
            ->on('discos')
            ->undelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compatibles');
    }
}
