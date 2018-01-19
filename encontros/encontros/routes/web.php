<?php
/* Rotas para o sgiAuth */
//Rota para login
Route::get(Config::get('sgiauthorizer.app.loginRoute'), ['as' => 'login', 'uses' => '\Uepg\SGIAuthorizer\Http\Controllers\LoginController@getLogin']);
Route::post(Config::get('sgiauthorizer.app.loginRoute'), '\Uepg\SGIAuthorizer\Http\Controllers\LoginController@login');

//Rota para logout
Route::get('/logout', ['as' => 'logout', 'uses' => '\Uepg\SGIAuthorizer\Http\Controllers\LoginController@logout']);
/* Fim Rotas para o sgiAuth */

Route::get('/', ['as' => 'inicio', 'uses' => 'HomeController@inicio']);
Route::get('/contato/create', ['as' => 'contato.create', 'uses' => 'ContatoController@create']);
Route::post('/contato/store', ['as' => 'contato.store', 'uses' => 'ContatoController@store']);

Route::group(['middleware'=>'sgiauth'], function(){
    //Todas as rotas que precisarão da autenticação
    Route::group(['prefix' => 'inscricao'], function () {
        Route::get('/',['as'=>'inscricao.index', 'uses'=>'InscricaoController@index']);
        Route::get('/novo', ['as'=>'inscricao.create','uses'=>'InscricaoController@create']);
        Route::post('/novo',['as'=>'inscricao.store','uses'=>'InscricaoController@store']);
        Route::post('/{id}/deletar',['as'=>'inscricao.destroy','uses'=>'InscricaoController@destroy']);
        Route::get('/{id}/editar',['as'=>'inscricao.edit', 'uses'=>'InscricaoController@edit']);
        Route::patch('/{id}/editar',['as'=>'inscricao.update','uses'=>'InscricaoController@update']);
    });

    Route::group(['prefix' => 'encontro'], function () {
        Route::get('/',['as'=>'encontro.index', 'uses'=>'EncontroController@index']);
        Route::get('/novo', ['as'=>'encontro.create','uses'=>'EncontroController@create']);
        Route::post('/novo',['as'=>'encontro.store','uses'=>'EncontroController@store']);
        Route::post('/{id}/deletar',['as'=>'encontro.destroy','uses'=>'EncontroController@destroy']);
        Route::get('/{id}/editar',['as'=>'encontro.edit', 'uses'=>'EncontroController@edit']);
        Route::patch('/{id}/editar',['as'=>'encontro.update','uses'=>'EncontroController@update']);
    });
});


