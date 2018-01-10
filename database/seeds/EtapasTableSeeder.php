<?php

use Illuminate\Database\Seeder;
use App\Models\Etapa;

class EtapasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $etapa = new Etapa();
	    $etapa->no_etapa = 'Pré-catecumenato';
	    $etapa->save();
	   	$etapa = new Etapa();
	    $etapa->no_etapa = '1o Escrutínio';
	    $etapa->save();
  	   	$etapa = new Etapa();
	    $etapa->no_etapa = 'Shemá';
	    $etapa->save();
  	   	$etapa = new Etapa();
	    $etapa->no_etapa = '2o Escrutínio';
	    $etapa->save();
  	   	$etapa = new Etapa();
	    $etapa->no_etapa = 'Iniciação a oração';
	    $etapa->save();
  	   	$etapa = new Etapa();
	    $etapa->no_etapa = 'Traditio';
	    $etapa->save();
  	   	$etapa = new Etapa();
	    $etapa->no_etapa = 'Retraditio';
	    $etapa->save();
  	   	$etapa = new Etapa();
	    $etapa->no_etapa = 'Redditio';
	    $etapa->save();
  	   	$etapa = new Etapa();
	    $etapa->no_etapa = 'Pai-nosso - 1a Parte';
	    $etapa->save();
  	   	$etapa = new Etapa();
	    $etapa->no_etapa = 'Pai-nosso - 2a Parte';
	    $etapa->save();
  	   	$etapa = new Etapa();
	    $etapa->no_etapa = 'Pai-nosso - 3a Parte';
	    $etapa->save();
  	   	$etapa = new Etapa();
	    $etapa->no_etapa = 'Eleição - 1a parte';
	    $etapa->save();
  	   	$etapa = new Etapa();
	    $etapa->no_etapa = 'Eleição - 2a parte';
	    $etapa->save();
  	   	$etapa = new Etapa();
	    $etapa->no_etapa = 'Renovação das promessas batismais';
	    $etapa->save();
  	   	$etapa = new Etapa();
	    $etapa->no_etapa = 'Educação Permanente na fé';
	    $etapa->save();
    }
}
