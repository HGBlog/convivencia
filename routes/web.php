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

	Route::resource('convivencias', 'ConvivenciaController');

	Route::resource('convivenciaMembros', 'ConvivenciaMembroController');

	Route::resource('tipoQuartos', 'TipoQuartoController');

	Route::resource('acolhidaExtras', 'AcolhidaExtraController');

	Route::resource('acolhidas', 'AcolhidaController');

	Route::resource('usuarios', 'UsuarioController');

	Route::resource('tipoCarismas', 'TipoCarismaController');

	Route::resource('tipoCarismas', 'TipoCarismaController');

	Route::resource('tipoTranslados', 'TipoTransladoController');

	Route::resource('equipes', 'EquipeController');

	Route::resource('convivencias', 'ConvivenciaController');

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

	Route::get('/lista_ativas', ['as' => 'convivencias.lista_ativas', 'uses' => 'ConvivenciaController@lista_ativas']);

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

    Route::resource('etapas', 'EtapaController');

    Route::get ('/relatorios','ReportController@index');

    Route::resource('localConvivencias', 'LocalConvivenciaController');


	Route::resource('dioceses', 'DioceseController');



});


/*
Route::get('/relatorios', function () {

  $output = public_path() . '/reports'.time().'_hello_world';
    $report = new JasperPHP;
    $report->process(
    	public_path() . '/reports/Customers.jrxml',
        $output,
        array('pdf', 'rtf', 'xml'),
        array(),
        array()  
        )->execute();
});
*/

//Route::get('/home', 'HomeController@index');
//Route::get('/create/ticket','TicketController@create');
//Route::post('/create/ticket','TicketController@store');
//Route::get('/tickets', 'TicketController@index');
//Route::get('/edit/ticket/{id}','TicketController@edit');
//Route::post('/edit/ticket/{id}','TicketController@update');
//Route::delete('/delete/ticket/{id}','TicketController@destroy');









