<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations. 
     * 
     * CAMBIAR NOMBRE DE BOLETAS
     * Conciliación de cuenta bancaria
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boletas', function (Blueprint $table) {
            $table->id();
            $table->string('nBoleta');
            $table->string('vBoleta');
            $table->date('fBoleta');
            $table->string('lBoleta');
            $table->string('pBoleta');
            $table->string('bBoleta');
            $table->string('nRecibo');
            $table->string('mRecibo');
            $table->string('fRecibo');
            $table->string('tRecibo');
            $table->string('nAlumno');
            $table->string('gAlumno');
            $table->string('ncAlumno');
            $table->string('comentario')->nullable();
            $table->string('estado')->requiere();
            $table->string('uEdicion');
            $table->integer('CodEmpresa');
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
        Schema::dropIfExists('boletas');
    }
};
