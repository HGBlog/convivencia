<?php

use Illuminate\Database\Seeder;
use App\Models\TipoCarisma;

class TipoCarismaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carisma = new TipoCarisma();
	    $carisma->no_carisma = 'Vocacionado';
	    $carisma->save();
        $carisma = new TipoCarisma();
	    $carisma->no_carisma = 'Vocacionada';
	    $carisma->save();
        $carisma = new TipoCarisma();
	    $carisma->no_carisma = 'Seminarista';
	    $carisma->save();
        $carisma = new TipoCarisma();
	    $carisma->no_carisma = 'Seminarista itinerante';
	    $carisma->save();
	    $carisma = new TipoCarisma();
	    $carisma->no_carisma = 'Presbítero';
	    $carisma->save();
	   	$carisma = new TipoCarisma();
	    $carisma->no_carisma = 'Presbítero na Itinerância';
	    $carisma->save();
	    $carisma = new TipoCarisma();
	    $carisma->no_carisma = 'Família em missão';
	    $carisma->save();
	   	$carisma = new TipoCarisma();
	    $carisma->no_carisma = 'Família Levantada';
	    $carisma->save();
	    $carisma = new TipoCarisma();
	    $carisma->no_carisma = 'Madalena';
	    $carisma->save();
	   	$carisma = new TipoCarisma();
	    $carisma->no_carisma = 'Catequista Itinerante';
	    $carisma->save();
	   	$carisma = new TipoCarisma();
	    $carisma->no_carisma = 'CNC - Brasília';
	    $carisma->save();
	   	$carisma = new TipoCarisma();
	    $carisma->no_carisma = 'Irmã/Irmão em missão';
	    $carisma->save();  
	   	$carisma = new TipoCarisma();
	    $carisma->no_carisma = 'Irmã/Irmão em levantado';
	    $carisma->save();  
	   	$carisma = new TipoCarisma();
	    $carisma->no_carisma = 'Visitante';
	    $carisma->save();
    }
}

"Catequista Itinerante"
"Vocacionado" OK
"Seminarista Itinerante" OK
"Presbítero" OK
"Família Levantada"
"Família em missão"
"Madalena" OK
"CNC Brasília"
"Irmã/Irmão em missão" OK
"Irmã/Irmão Levantado" OK
"Presbítero na Itinerância" OK
"Vocacionada" OK
"Seminarista" OK
"Visitante" 
