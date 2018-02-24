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
    
    Route::resource('membros', 'MembroController');

	Route::get('/home', 'HomeController@index')->name('home');

	Route::get('/convivencias/lista_ativas', ['as' => 'convivencias.lista_ativas', 'uses' => 'ConvivenciaController@lista_ativas']);	

	Route::get('/acolhidas/relatorio_acolhidas',['as' => 'relatorio_acolhidas', 'uses' => 'AcolhidaController@relatorio_acolhidas']);
	//Route::post('/acolhidas/relatorio_acolhidas/{convivencia_id}', 'AcolhidaController@gera_relatorio_acolhidas');
	Route::get('/acolhidas/{convivencia_id}',['as' => 'acolhidas', 'uses' => 'AcolhidaController@gera_relatorio_acolhidas__']);


	Route::resource('usuarios', 'UsuarioController');
	//Atualizacao do Perfil de Usuario
	Route::get ('/usuarios/{usuario}/perfil','UsuarioController@perfil');
	Route::patch ('/usuarios/{usuario}',['as' => 'usuarios.perfil_update', 'uses' =>'UsuarioController@perfil_update']);

	Route::get('/changePassword','HomeController@showChangePasswordForm');
	Route::post('/changePassword','HomeController@changePassword')->name('changePassword');

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
    Route::get ('/relatorios','ReportController@index');
    

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
    });
});