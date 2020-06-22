<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('academico_id');
            $table->unsignedBigInteger('comision_id');
            $table->string('nombre');
            $table->date('fechainicio');
            $table->date('fechafinal');
            $table->string('titulo');
            $table->string('gradoAcademico');
            $table->string('categoria');
            $table->integer('HorasContrato');
            $table->string('calificacionanterior');
            $table->string('tipoplanta');
            $table->float('t1')->nullable();
            $table->float('t2')->nullable();
            $table->float('t3')->nullable();
            $table->float('t4')->nullable();
            $table->float('t5')->nullable();
            $table->float('nota1')->nullable();
            $table->float('nota2')->nullable();
            $table->float('nota3')->nullable();
            $table->float('nota4')->nullable();
            $table->float('nota5')->nullable();
            $table->float('notafinal')->nullable();
            $table->string('argumento');
            $table->date('fechaevaluacion');
            $table->string('email');

            $table->foreign('academico_id')
            ->references('id')
            ->on('academicos')
            ->onDelete('cascade');

            $table->foreign('comision_id')
            ->references('id')
            ->on('comisions')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluacions');
    }
}
