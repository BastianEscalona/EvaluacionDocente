<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateAcademicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academicos', function (Blueprint $table) {
            $table->id();
            $table->string('rut');
            $table->string('titulo');
            $table->string('gradoAcademico');
            $table->string('categoria');
            $table->integer('HorasContrato');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email');
            $table->softDeletes();
            $table->unsignedBigInteger('departamento_id');
            $table->timestamps();
            $table->foreign('departamento_id')
            ->references('id')
            ->on('departamentos')
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
        Schema::dropIfExists('academicos');
    }
}
