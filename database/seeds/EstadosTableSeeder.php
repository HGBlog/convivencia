<?php

use Illuminate\Database\Seeder;
use App\Models\Estado;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$estado = new Estado();
	    $estado->no_estado = 'Acre';
	    $estado->no_sigla = 'AC';
	    $estado->save();
	    $estado = new Estado();
	    $estado->no_estado = 'Alagoas';
	    $estado->no_sigla = 'AL';
	    $estado->save();
	    $estado = new Estado();
	    $estado->no_estado = 'Amapá';
	    $estado->no_sigla = 'AP';
	    $estado->save();
	    $estado = new Estado();
	    $estado->no_estado = 'Amazonas';
	    $estado->no_sigla = 'AM';
	    $estado->save();
	    $estado = new Estado();
	    $estado->no_estado = 'Bahia';
	    $estado->no_sigla = 'BA';
	    $estado->save();
	    $estado = new Estado();
	    $estado->no_estado = 'Ceará';
	    $estado->no_sigla = 'CE';
	    $estado->save();
	    $estado = new Estado();
	    $estado->no_estado = 'Distrito Federal';
	    $estado->no_sigla = 'DF';
	    $estado->save();
	    $estado = new Estado();
	    $estado->no_estado = 'Espírito Santo';
	    $estado->no_sigla = 'ES';
	    $estado->save();
	    $estado = new Estado();
	    $estado->no_estado = 'Goiás';
	    $estado->no_sigla = 'GO';
	    $estado->save();
	    $estado = new Estado();
	    $estado->no_estado = 'Maranhão';
	    $estado->no_sigla = 'MA';
	    $estado->save();
	    $estado = new Estado();
	    $estado->no_estado = 'Mato Grosso';
	    $estado->no_sigla = 'MT';
	    $estado->save();
	    $estado = new Estado();
	    $estado->no_estado = 'Mato Grosso do Sul';
	    $estado->no_sigla = 'MS';
	    $estado->save();
	    $estado = new Estado();
	    $estado->no_estado = 'Minas Gerais';
	    $estado->no_sigla = 'MG';
	    $estado->save();
	    $estado = new Estado();
	    $estado->no_estado = 'Pará';
	    $estado->no_sigla = 'PA';
	    $estado->save();
	    $estado = new Estado();
	    $estado->no_estado = 'Paraíba';
	    $estado->no_sigla = 'PB';
	    $estado->save();
	    $estado = new Estado();
	    $estado->no_estado = 'Paraná';
	    $estado->no_sigla = 'PR';
	    $estado->save();
	    $estado = new Estado();
	    $estado->no_estado = 'Pernambuco';
	    $estado->no_sigla = 'PE';
	    $estado->save();
	    $estado = new Estado();
	    $estado->no_estado = 'Piauí';
	    $estado->no_sigla = 'PI';
	    $estado->save();
	    $estado = new Estado();
	    $estado->no_estado = 'Rio de Janeiro';
	    $estado->no_sigla = 'RJ';
	    $estado->save();
	    $estado = new Estado();
	    $estado->no_estado = 'Rio Grande do Norte';
	    $estado->no_sigla = 'RN';
	    $estado->save();
	    $estado = new Estado();
	    $estado->no_estado = 'Rio Grande do Sul';
	    $estado->no_sigla = 'RS';
	    $estado->save();
	    $estado = new Estado();
	    $estado->no_estado = 'Rondônia';
	    $estado->no_sigla = 'RO';
	    $estado->save();
	    $estado = new Estado();
	    $estado->no_estado = 'Roraima';
	    $estado->no_sigla = 'RR';
	    $estado->save();
	    $estado = new Estado();
	    $estado->no_estado = 'Santa Catarina';
	    $estado->no_sigla = 'SC';
	    $estado->save();
	    $estado = new Estado();
	    $estado->no_estado = 'São Paulo';
	    $estado->no_sigla = 'SP';
	    $estado->save();
	    $estado = new Estado();
	    $estado->no_estado = 'Sergipe';
	    $estado->no_sigla = 'SE';
	    $estado->save();
	    $estado = new Estado();
	    $estado->no_estado = 'Tocantins';
	    $estado->no_sigla = 'TO';
    }
}
