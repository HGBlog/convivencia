<?php

use Illuminate\Database\Seeder;
use App\Models\AcolhidaExtra;

class AcolhidaExtraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      	$acolhida = new AcolhidaExtra();
	    $acolhida->no_acolhida_extra = 'Translado Aeroporto->Casa de Convivência';
	    $acolhida->save();
	    $acolhida = new AcolhidaExtra();
	    $acolhida->no_acolhida_extra = 'Acolhida dias antes da Convivência';
	    $acolhida->save();
	    $acolhida = new AcolhidaExtra();
	    $acolhida->no_acolhida_extra = 'Translado Casa de Convivência -> Aeroporto';
	    $acolhida->save();
    }
}
