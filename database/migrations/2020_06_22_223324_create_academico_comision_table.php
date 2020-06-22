<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicoComisionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academico_comision', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('academico_id');
            $table->unsignedBigInteger('comision_id');
            $table->timestamps();
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
        Schema::dropIfExists('academico_comision');
    }
}
