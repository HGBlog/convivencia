<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocalConvivenciasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('local_convivencias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_local', 100);
            $table->string('nu_telefone', 16);
            $table->string('no_cidade', 50);
            $table->string('no_endereco', 200);
            $table->text('no_observacoes');
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
        Schema::drop('local_convivencias');
    }
}
