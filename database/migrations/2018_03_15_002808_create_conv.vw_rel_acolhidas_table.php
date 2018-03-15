<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRelatorioAcolhidasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conv.vw_rel_acolhidas', function (Blueprint $table) {
            $table->increments('id');
            $table->db_type('no_usuario');
            $table->db_type('no_conjuge');
            $table->db_type('convivencia_id');
            $table->db_type('no_acolhida_extra');
            $table->db_type('tipo_translado');
            $table->db_type('dt_chegada');
            $table->db_type('nu_hora_chegada');
            $table->db_type('nu_voo_chegada');
            $table->db_type('no_local_chegada');
            $table->db_type('dt_saida');
            $table->db_type('nu_hora_saida');
            $table->db_type('nu_voo_saida');
            $table->db_type('no_local_saida');
            $table->db_type('no_observacoes');
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
        Schema::drop('conv.vw_rel_acolhidas');
    }
}
