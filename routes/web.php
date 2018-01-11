<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::resource('membros', 'MembroController');

Route::get('/home', 'HomeController@index');

Route::resource('etapas', 'EtapaController');

Route::resource('convivencias', 'ConvivenciaController');

Route::resource('usuarios', 'UsuarioController');

Route::patch('/convivencias/{convivencia}/inscricao',['as' => 'convivencia_inscricao', 'uses' => 'ConvivenciaController@inscricao']);
Route::get('/convivencias/{convivencia}/inscricao',['as' => 'convivencia_inscricao', 'uses' => 'ConvivenciaController@inscricao']);
Route::get('/convivencias/{convivencia}/inscricao','ConvivenciaController@inscricao');

Route::post('/convivencias/{convivencia}/seleciona_convivencia',['as' => 'seleciona_convivencia', 'uses' => 'ConvivenciaController@seleciona_convivencia']);

Route::get('/lista_ativas', ['as' => 'convivencias.lista_ativas', 'uses' => 'ConvivenciaController@lista_ativas']);

Route::get('/create/ticket','TicketController@create');

Route::post('/create/ticket','TicketController@store');

Route::get('/tickets', 'TicketController@index');

Route::get('/edit/ticket/{id}','TicketController@edit');

Route::post('/edit/ticket/{id}','TicketController@update');

Route::delete('/delete/ticket/{id}','TicketController@destroy');

Route::resource('convivencias', 'ConvivenciaController');

Route::resource('convivenciaMembros', 'ConvivenciaMembroController');

Route::resource('tipoQuartos', 'TipoQuartoController');

Route::resource('acolhidaExtras', 'AcolhidaExtraController');

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


Route::resource('acolhidas', 'AcolhidaController');

Route::resource('usuarios', 'UsuarioController');

Route::resource('roles', 'RoleController');