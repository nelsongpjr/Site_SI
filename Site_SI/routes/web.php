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

	Route::get('administrador/noticias', 'controllerAdministrador@noticias');

	Route::get('administrador/informacoes', 'controllerAdministrador@informacoes');

	Route::get('administrador/egressos', 'controllerAdministrador@egressos');

	Route::get('administrador/docentes', 'controllerAdministrador@docentes');

	Route::get('administrador/tgsis', 'controllerAdministrador@tgsi');

    Route::get('administrador/adicionar/noticia', 'controllerAdministrador@adicionarNoticias');

    Route::get('administrador/adicionar/informacao', 'controllerAdministrador@adicionarInformacoes');

    Route::get('administrador/adicionar/egresso', 'controllerAdministrador@adicionarEgressos');

    Route::get('administrador/adicionar/docente', 'controllerAdministrador@adicionarDocentes');

    Route::get('administrador/adicionar/tgsi', 'controllerAdministrador@adicionarTgsi');

});




