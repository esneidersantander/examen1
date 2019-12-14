<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->bigIncrements('idEstudiante');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cedula');
            $table->string('sexo');
            $table->unsignedBigInteger('idSemestre');
            $table->foreign('idSemestre')->references('idSemestre')->on('semestres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
}
