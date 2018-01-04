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
            $table->string('no_nome', 50);
            $table->string('no_local', 50);
            $table->string('nu_telefone', 16);
            $table->text('no_observacoes');
            $table->date('dt_inicio');
            $table->date('dt_fim');
            $table->date('dt_inicio_inscricao');
            $table->date('dt_fim_inscricao');
            $table->timestamps();
            $table->softDeletes();
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
