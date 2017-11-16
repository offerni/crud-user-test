<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/',['as'=>'site.home','uses'=>'UsuarioController@index']);

Auth::routes();



Route::get('/index',['as'=>'index','uses'=>'UsuarioController@index']); // Vai para o controller da página principal
Route::get('/home', ['as'=>'home', 'uses'=>'UsuarioController@index']);

Route::group(['middleware'=>'auth'], function() {
//USUÁRIOS

    Route::post('/usuario/salvar', ['as' => 'usuario.salvar', 'uses' => 'UsuarioController@salvar']); // rota controller salvar
    Route::get('/usuario/editar/{id}', ['as' => 'usuario.editar', 'uses' => 'UsuarioController@editar']); // rota view editar
    Route::put('/usuario/atualizar/{id}', ['as' => 'usuario.atualizar', 'uses' => 'UsuarioController@atualizar']); // rota controller atualizar
    Route::get('/usuario/deletar/{id}', ['as' => 'usuario.deletar', 'uses' => 'UsuarioController@deletar']); // rota view deletar

//CONTATOS

    Route::get('/contato/adicionar/{id}', ['as' => 'contato.adicionar', 'uses' => 'ContatoController@adicionar']); // rota view adicionar
    Route::post('/contato/salvar/{id}', ['as' => 'contato.salvar', 'uses' => 'ContatoController@salvar']); // rota controller salvar
    Route::get('/contato/editar/{id}', ['as' => 'contato.editar', 'uses' => 'ContatoController@editar']); // rota view editar
    Route::put('/contato/atualizar/{id}', ['as' => 'contato.atualizar', 'uses' => 'ContatoController@atualizar']); // rota controller atualizar
    Route::get('/contato/deletar/{id}', ['as' => 'contato.deletar', 'uses' => 'ContatoController@deletar']); // rota view deletar

});