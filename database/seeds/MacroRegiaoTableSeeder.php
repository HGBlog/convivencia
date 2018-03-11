<?php

use Illuminate\Database\Seeder;
use App\Models\MacroRegiao;

class MacroRegiaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regiao = new MacroRegiao();
	    $regiao->no_macro_regiao = 'Nacional';
	    $regiao->save();
        $regiao = new MacroRegiao();
	    $regiao->no_macro_regiao = 'Brasília';
	    $regiao->save();
        $regiao = new MacroRegiao();
	    $regiao->no_macro_regiao = 'São Paulo - Cidade';
	    $regiao->save();
        $regiao = new MacroRegiao();
	    $regiao->no_macro_regiao = 'Franca';
	    $regiao->save();
        $regiao = new MacroRegiao();
	    $regiao->no_macro_regiao = 'Umuarama';
	    $regiao->save();
        $regiao = new MacroRegiao();
	    $regiao->no_macro_regiao = 'Jundiaí (interior São Paulo)';
	    $regiao->save();
        $regiao = new MacroRegiao();
	    $regiao->no_macro_regiao = 'São João da Boavista';
	    $regiao->save();
        $regiao = new MacroRegiao();
	    $regiao->no_macro_regiao = 'Mogi das Cruzes';
	    $regiao->save();
        $regiao = new MacroRegiao();
	    $regiao->no_macro_regiao = 'São Carlos';
	    $regiao->save();
        $regiao = new MacroRegiao();
	    $regiao->no_macro_regiao = 'Amazonas';
	    $regiao->save();
        $regiao = new MacroRegiao();
	    $regiao->no_macro_regiao = 'Pará';
	    $regiao->save();
        $regiao = new MacroRegiao();
	    $regiao->no_macro_regiao = 'Tocantins';
	    $regiao->save();
        $regiao = new MacroRegiao();
	    $regiao->no_macro_regiao = 'Maranhão';
	    $regiao->save();
        $regiao = new MacroRegiao();
	    $regiao->no_macro_regiao = 'Ceará';
	    $regiao->save();
        $regiao = new MacroRegiao();
	    $regiao->no_macro_regiao = 'Piauí';
	    $regiao->save();
        $regiao = new MacroRegiao();
	    $regiao->no_macro_regiao = 'Pernambuco - Paraíba';
	    $regiao->save();
        $regiao = new MacroRegiao();
	    $regiao->no_macro_regiao = 'Alagoas - Sergipe';
	    $regiao->save();
        $regiao = new MacroRegiao();
	    $regiao->no_macro_regiao = 'Bahia';
	    $regiao->save();
        $regiao = new MacroRegiao();
	    $regiao->no_macro_regiao = 'Goiás';
	    $regiao->save();
        $regiao = new MacroRegiao();
	    $regiao->no_macro_regiao = 'Mato-Grosso e Mato-Grosso do Sul';
	    $regiao->save();
        $regiao = new MacroRegiao();
	    $regiao->no_macro_regiao = 'Minas Gerais';
	    $regiao->save();
        $regiao = new MacroRegiao();
	    $regiao->no_macro_regiao = 'Rio de Janeiro';
	    $regiao->save();
        $regiao = new MacroRegiao();
	    $regiao->no_macro_regiao = 'Grande São Paulo';
	    $regiao->save();
        $regiao = new MacroRegiao();
	    $regiao->no_macro_regiao = 'São Paulo - Oeste';
	    $regiao->save();
        $regiao = new MacroRegiao();
	    $regiao->no_macro_regiao = 'Paraná';
	    $regiao->save();
        $regiao = new MacroRegiao();
	    $regiao->no_macro_regiao = 'Rio Grande do Sul e Santa Catarina';
	    $regiao->save();
        $regiao = new MacroRegiao();
	    $regiao->no_macro_regiao = 'Seminário Redemptoris Mater Brasília';
	    $regiao->save();
        $regiao = new MacroRegiao();
	    $regiao->no_macro_regiao = 'Seminário Redemptoris Mater Belém';
	    $regiao->save();
        $regiao = new MacroRegiao();
	    $regiao->no_macro_regiao = 'Seminário Redemptoris Mater São Paulo';
	    $regiao->save();
        $regiao = new MacroRegiao();
	    $regiao->no_macro_regiao = 'Seminário Redemptoris Mater Rio de Janeiro';
	    $regiao->save();

    }
}
