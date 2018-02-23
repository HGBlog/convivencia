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
        $acolhida->no_acolhida_extra = 'Nenhum';
        $acolhida->save();
      	$acolhida = new AcolhidaExtra();
	    $acolhida->no_acolhida_extra = 'Antes da Convivência';
	    $acolhida->save();
	    $acolhida = new AcolhidaExtra();
	    $acolhida->no_acolhida_extra = 'Depois da Convivência';
	    $acolhida->save();
	    $acolhida = new AcolhidaExtra();
	    $acolhida->no_acolhida_extra = 'Antes e depois da Convivência';
	    $acolhida->save();
    }
}
