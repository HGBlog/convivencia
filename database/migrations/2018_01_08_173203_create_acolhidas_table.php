<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAcolhidasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acolhidas', function (Blueprint $table) {
            $table->integer('membro_id')->unsigned();
            $table->integer('convivencia_id')->unsigned();
            $table->integer('acolhida_extra_id')->unsigned();
            $table->integer('tipo_translado_id')->unsigned();
            $table->date('dt_chegada');
            $table->string('nu_hora_chegada', 16);
            $table->string('nu_voo_chegada', 10);
            $table->date('dt_saida');
            $table->string('nu_hora_saida', 16);
            $table->string('nu_voo_saida', 10);
            $table->text('no_observacoes');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('membro_id')->references('id')->on('membros');
            $table->foreign('convivencia_id')->references('id')->on('convivencias');
            $table->foreign('acolhida_extra_id')->references('id')->on('acolhida_extras');
            $table->foreign('tipo_translado_id')->references('id')->on('tipo_translados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('acolhidas');
    }
}
