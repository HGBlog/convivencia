<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConvivenciasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convivencias', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('is_ativo');
            $table->integer('local_convivencia_id')->unsigned();
            $table->string('no_nome', 100);
            $table->text('no_observacoes');
            $table->date('dt_inicio');
            $table->date('dt_fim');
            $table->date('dt_inicio_inscricao');
            $table->date('dt_fim_inscricao');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('local_convivencia_id')->references('id')->on('local_convivencias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('convivencias');
    }
}
