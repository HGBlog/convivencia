<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConvivenciaMembrosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convivencia_membros', function (Blueprint $table) {
            $table->integer('convivencia_id')->unsigned();
            $table->integer('membro_id')->unsigned();
	    $table->boolean('is_ativo');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('convivencia_id')->references('id')->on('convivencias');
            $table->foreign('membro_id')->references('id')->on('membros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('convivencia_membros');
    }
}
