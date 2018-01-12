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
	    $carisma->no_carisma = 'Leigo';
	    $carisma->save();
        $carisma = new TipoCarisma();
	    $carisma->no_carisma = 'Vocacionado';
	    $carisma->save();
        $carisma = new TipoCarisma();
	    $carisma->no_carisma = 'Seminarista';
	    $carisma->save();
	    $carisma = new TipoCarisma();
	    $carisma->no_carisma = 'Padre';
	    $carisma->save();
	    $carisma = new TipoCarisma();
	    $carisma->no_carisma = 'Itinerante';
	    $carisma->save();
	    $carisma = new TipoCarisma();
	    $carisma->no_carisma = 'Missão';
	    $carisma->save();
	    $carisma = new TipoCarisma();
	    $carisma->no_carisma = 'Família em missão';
	    $carisma->save();
	    $carisma = new TipoCarisma();
	    $carisma->no_carisma = 'Madalena';
	    $carisma->save();
    }
}
