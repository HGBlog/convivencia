<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMembrosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membros', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_id')->unsigned();
            $table->string('no_usuario', 100);
            $table->string('no_pais', 50);
            $table->string('no_email', 100);
            $table->string('no_sexo');
            $table->string('co_telefone_pais', 5);
            $table->string('nu_telefone', 16);
            $table->string('no_cidade', 50);
            $table->string('no_paroquia', 50);
            $table->string('nu_comunidade', 3);
            $table->integer('etapa_id')->unsigned()->nullable();
            $table->integer('equipe_id')->unsigned()->nullable();
            $table->integer('diocese_id')->unsigned()->nullable();
            $table->integer('tipo_carisma_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('owner_id')->references('id')->on('users');
            $table->foreign('etapa_id')->references('id')->on('etapas');
            $table->foreign('diocese_id')->references('id')->on('dioceses');
            $table->foreign('equipe_id')->references('id')->on('equipes');
            $table->foreign('tipo_carisma_id')->references('id')->on('tipo_carismas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('membros');
    }
}
