<?php

use JasperPHP\JasperPHP;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::group(['middleware' => 'auth'], function() {

	Route::get('/', function () {
    	return redirect('login');
	});

	Route::get('/home', 'HomeController@index')->name('home');

	//Protegendo os resources para usuarios com permissão no Sistema
	Route::group([
            'middleware' => ['role:admin,responsavel,gestor_convivencia'],
    ], function () {


	//Edição de Macro-regiões de Membros
	Route::get ('/membros/macroregiao', ['as' => 'membros.macroregiao', 'uses' => 'MembroController@index_todos']);
	Route::get ('/membros/{membro}/edit_macroregiao', ['as' => 'membros.edit_macroregiao', 'uses' => 'MembroController@edit_macroregiao']);
	Route::patch ('/membros/{membro}/update_macroregiao', ['as' => 'membros.update_macroregiao', 'uses' => 'MembroController@update_macroregiao']);

    Route::resource('membros', 'MembroController');

	Route::get('/convivencias/lista_ativas', ['as' => 'convivencias.lista_ativas', 'uses' => 'ConvivenciaController@lista_ativas']);	

	//Atualizacao do Perfil de Usuario
	Route::get ('/usuarios/{usuario}/perfil','UsuarioController@perfil');
	Route::patch ('/usuarios/{usuario}/perfil', ['as' => 'usuarios.perfil_update', 'uses' =>'UsuarioController@perfil_update']);
	
	//Troca de senha
	Route::get('/changePassword','HomeController@showChangePasswordForm');
	Route::post('/changePassword','HomeController@changePassword')->name('changePassword');

	//Inscrição Convivência
	Route::patch('/convivencias/{convivencia}/inscricao',['as' => 'convivencia_inscricao', 'uses' => 'ConvivenciaController@inscricao']);
	Route::get('/convivencias/{convivencia}/inscricao',['as' => 'convivencia_inscricao', 'uses' => 'ConvivenciaController@inscricao']);
	Route::get('/convivencias/{convivencia}/inscricao','ConvivenciaController@inscricao');

	Route::post('/convivencias/{convivencia}/seleciona_convivencia',['as' => 'seleciona_convivencia', 'uses' => 'ConvivenciaController@seleciona_convivencia']);

	Route::get ('/create/acolhidas/convivencia/{convivencia}/membro/{membro}','AcolhidaController@create');
	Route::get ('/acolhidas/convivencia/{convivencia}/membro/{membro}/create','AcolhidaController@create');
	Route::get('/acolhidas/convivencia/{convivencia}/membro/{membro}/create',['as' => 'create_inscricao', 'uses' => 'AcolhidaController@create']);

	Route::post ('/create/acolhidas/convivencia/{convivencia}/membro/{membro}','AcolhidaController@store');
	Route::post ('/acolhidas/convivencia/{convivencia}/membro/{membro}/create','AcolhidaController@store');

	Route::get ('/edit/acolhidas/convivencia/{convivencia}/membro/{membro}','AcolhidaController@edit');
	Route::get ('/acolhidas/convivencia/{convivencia}/membro/{membro}/edit','AcolhidaController@edit');

	Route::patch ('/acolhidas/convivencia/{convivencia}/membro/{membro}','AcolhidaController@update');
	Route::put ('/acolhidas/convivencia/{convivencia}/membro/{membro}','AcolhidaController@update');

	Route::resource('acolhidas', 'AcolhidaController');
    

    });


	Route::group([
            //'namespace'  => 'Backpack\PermissionManager\app\Http\Controllers',
            //'prefix'     => config('backpack.base.route_prefix', 'admin'),
            'middleware' => ['role:admin,gestor_acolhida'],
    ], function () {
			Route::resource('relatorioAcolhidas', 'RelatorioAcolhidaController');
			Route::resource('relatorioInscricoes', 'RelatorioInscricoesController');
			Route::resource('relatorioAcolhidasChegada', 'RelatorioAcolhidaChegadaController');
			Route::resource('relatorioAcolhidasTermino', 'RelatorioAcolhidaTerminoController');
			Route::resource('relatorioTransladosChegada', 'RelatorioTransladoChegadaController');
			Route::resource('relatorioTransladosTermino', 'RelatorioTransladoTerminoController');
			Route::resource('relatorioMembros', 'RelatorioMembrosController');

			Route::get('/gera_relatorio_acolhidas',['as' => 'gera_relatorio_acolhidas', 'uses' => 'RelatorioAcolhidaController@gera_relatorio_acolhidas']);
			Route::get('/gera_relatorio_acolhidas_chegada',['as' => 'gera_relatorio_acolhidas_chegada', 'uses' => 'RelatorioAcolhidaChegadaController@gera_relatorio_acolhidas_chegada']);
			Route::get('/gera_relatorio_acolhida_termino',['as' => 'gera_relatorio_acolhidas_termino', 'uses' => 'RelatorioAcolhidaTerminoController@gera_relatorio_acolhidas_termino']);
			Route::get('/gera_relatorio_translados_chegada',['as' => 'gera_relatorio_translados_chegada', 'uses' => 'RelatorioTransladoChegadaController@gera_relatorio_translados_chegada']);
			Route::get('/gera_relatorio_translados_termino',['as' => 'gera_relatorio_translados_termino', 'uses' => 'RelatorioTransladoTerminoController@gera_relatorio_translados_termino']);

			Route::get('/gera_relatorio_inscricoes',['as' => 'gera_relatorio_inscricoes', 'uses' => 'RelatorioInscricoesController@gera_relatorio_inscricoes']);
    });

	Route::group([
            //'namespace'  => 'Backpack\PermissionManager\app\Http\Controllers',
            //'prefix'     => config('backpack.base.route_prefix', 'admin'),
            'middleware' => ['web', 'admin','role:admin'],
    ], function () {
			Route::resource('dioceses', 'DioceseController');
			Route::resource('localConvivencias', 'LocalConvivenciaController');
			Route::resource('estados', 'EstadoController');
			Route::resource('tipoCarismas', 'TipoCarismaController');
			Route::resource('tipoTranslados', 'TipoTransladoController');
			Route::resource('etapas', 'EtapaController');
			Route::resource('convivencias', 'ConvivenciaController');
			Route::resource('equipes', 'EquipeController');
			Route::resource('tipoQuartos', 'TipoQuartoController');
			Route::resource('acolhidaExtras', 'AcolhidaExtraController');
			//Route::resource('convivenciaMembros', 'ConvivenciaMembroController');
			Route::resource('usuarios', 'UsuarioController');
			Route::resource('macroRegiaos', 'MacroRegiaoController');

    });
});