<?php

use Illuminate\Database\Seeder;
use App\Models\TipoQuarto;

class TipoQuartoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quarto = new TipoQuarto();
	    $quarto->no_quarto = 'Solteiro';
	    $quarto->save();
        $quarto = new TipoQuarto();
	    $quarto->no_quarto = 'Casal';
	    $quarto->save();
	    $quarto = new TipoQuarto();
	    $quarto->no_quarto = 'Triplo';
	    $quarto->save();
	    $quarto = new TipoQuarto();
	    $quarto->no_quarto = 'Triplo com cama extra';
	    $quarto->save();
    }
}
