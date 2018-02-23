<?php

use Illuminate\Database\Seeder;
use App\Models\TipoTranslado;

class TipoTransladoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $translado = new TipoTranslado();
	    $translado->no_translado = 'Nenhum';
	    $translado->save();
        $translado = new TipoTranslado();
	    $translado->no_translado = 'Translado na chegada';
	    $translado->save();
        $translado = new TipoTranslado();
	    $translado->no_translado = 'Translado no retorno';
	    $translado->save();
        $translado = new TipoTranslado();
	    $translado->no_translado = 'Translado na chegada e no retorno';
	    $translado->save();

    }
}
