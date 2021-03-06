
/*
 * Rotas padrões do pacote SGIAuthorizer para login e exibição dos usuários logados.  
 */
//Rota para login
Route::get(Config::get('sgiauthorizer.app.loginRoute'), ['as' => 'login', 'uses' => '\Uepg\SGIAuthorizer\Http\Controllers\LoginController@getLogin']);
Route::post(Config::get('sgiauthorizer.app.loginRoute'), '\Uepg\SGIAuthorizer\Http\Controllers\LoginController@login');

//Rota para logout
Route::get('/logout', ['as' => 'logout', 'uses' => '\Uepg\SGIAuthorizer\Http\Controllers\LoginController@logout']);

//
Route::group(['middleware' => 'sgiauth'], function() {
	//Rota para exibir informações do usuario logado
	Route::any(Config::get('sgiauthorizer.app.userInfoRoute'), ['uses' => '\Uepg\SGIAuthorizer\Http\Controllers\DisplayUserInfoController@userInfo']);
});


/*
 * Rotas padrões do pacote SGIAuthorizer para login e exibição dos usuários logados.  
 */
//Rota para login
Route::get(Config::get('sgiauthorizer.app.loginRoute'), ['as' => 'login', 'uses' => '\Uepg\SGIAuthorizer\Http\Controllers\LoginController@getLogin']);
Route::post(Config::get('sgiauthorizer.app.loginRoute'), '\Uepg\SGIAuthorizer\Http\Controllers\LoginController@login');

//Rota para logout
Route::get('/logout', ['as' => 'logout', 'uses' => '\Uepg\SGIAuthorizer\Http\Controllers\LoginController@logout']);

//
Route::group(['middleware' => 'sgiauth'], function() {
	//Rota para exibir informações do usuario logado
	Route::any(Config::get('sgiauthorizer.app.userInfoRoute'), ['uses' => '\Uepg\SGIAuthorizer\Http\Controllers\DisplayUserInfoController@userInfo']);
});


/*
 * Rotas padrões do pacote SGIAuthorizer para login e exibição dos usuários logados.  
 */
//Rota para login
Route::get(Config::get('sgiauthorizer.app.loginRoute'), ['as' => 'login', 'uses' => '\Uepg\SGIAuthorizer\Http\Controllers\LoginController@getLogin']);
Route::post(Config::get('sgiauthorizer.app.loginRoute'), '\Uepg\SGIAuthorizer\Http\Controllers\LoginController@login');

//Rota para logout
Route::get('/logout', ['as' => 'logout', 'uses' => '\Uepg\SGIAuthorizer\Http\Controllers\LoginController@logout']);

//
Route::group(['middleware' => 'sgiauth'], function() {
	//Rota para exibir informações do usuario logado
	Route::any(Config::get('sgiauthorizer.app.userInfoRoute'), ['uses' => '\Uepg\SGIAuthorizer\Http\Controllers\DisplayUserInfoController@userInfo']);
});

