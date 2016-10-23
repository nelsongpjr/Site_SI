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


Route::auth();

Route::group(['middleware' => 'auth'], function(){
	Route::get('/administrador', 'controllerAdministrador@noticia');

	Route::get('/logout', 'controllerAdministrador@logout');

	Route::get('administrador/noticia', 'controllerAdministrador@noticia');

	Route::get('administrador/informacao', 'controllerAdministrador@informacao');

	Route::get('administrador/egresso', 'controllerAdministrador@egresso');

	Route::get('administrador/docente', 'controllerAdministrador@docente');

	Route::get('administrador/tgsi', 'controllerAdministrador@tgsi');

});




