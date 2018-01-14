<?php

use Illuminate\Database\Seeder;
use App\Models\LocalConvivencia;

class LocalConvivenciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $local = new LocalConvivencia();
	    $local->no_local = 'Casa de Convivências Sagrada Família de Nazaré';
	    $local->nu_telefone = '06134567897';
	    $local->no_cidade = 'Brazlândia';
	    $local->no_endereco = 'INCRA 09 - Estrada para Brazlândia depois do Fassincra';
	  	$local->no_observacoes = 'Observações sobre o local';
	    $local->save();
	    $local = new LocalConvivencia();
	    $local->no_local = 'Casa de Convivências Domus Maria';
	    $local->nu_telefone = '06134567897';
	    $local->no_cidade = 'Brazlândia';
	    $local->no_endereco = 'INCRA 09 - Estrada para Brazlândia depois do Fassincra';
	  	$local->no_observacoes = 'Observações sobre o local';
	    $local->save();
	    $local = new LocalConvivencia();
	    $local->no_local = 'Casa de Convivências Angicos';
	    $local->nu_telefone = '06134567897';
	    $local->no_cidade = 'Brazlândia';
	    $local->no_endereco = 'INCRA 09 - Estrada para Brazlândia depois do Fassincra';
	  	$local->no_observacoes = 'Observações sobre o local';
	    $local->save();
	    $local = new LocalConvivencia();
	    $local->no_local = 'Casa de Convivências Arniqueiras';
	    $local->nu_telefone = '06134567897';
	    $local->no_cidade = 'Águas Claras';
	    $local->no_endereco = 'INCRA 09 - Estrada para Brazlândia depois do Fassincra';
	  	$local->no_observacoes = 'Observações sobre o local';
	    $local->save();
	    $local = new LocalConvivencia();
	    $local->no_local = 'Casa de Convivências Sagrada Família - Sérgio Guaraná';
	    $local->nu_telefone = '06134567897';
	    $local->no_cidade = 'Lago Oeste';
	    $local->no_endereco = 'INCRA 09 - Estrada para Brazlândia depois do Fassincra';
	  	$local->no_observacoes = 'Observações sobre o local';
	    $local->save();

    }
}
