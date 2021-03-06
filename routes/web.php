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

/*Route::get('/', function () {
    return view('app');
});*/

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/faq',function(){
  return view('faq');
});

Route::get('/home',function(){
  return view('home');
});

Route::get('/inicio',function(){
  return view('inicio');
})->middleware('auth');


Route::get('/eventos','EventoController@directory')->middleware('auth');
Route::get('/miseventos','EventoController@mineDirectory')->middleware('auth');
Route::get('/editarEvento/{id}','EventoController@editar')->middleware('auth');
Route::get('/unirParticipante/{id}','EventoController@agregarParticipante')->middleware('auth');
Route::get('/sacarParticipante/{id}','EventoController@eliminarParticipante')->middleware('auth');
Route::get('/eliminarEvento/{id}','EventoController@eliminar')->middleware('auth');
Route::get('/eventoUnico/{id}','EventoController@mostrarEvento')->middleware('auth');

Route::post('/eventos',"EventoController@create");
Route::post('/editarEvento/{id}','EventoController@sobrescribir');

Route::get('/miProfile', 'userController@miProfile');
Route::get('/profile/{id}', 'userController@profile');
Route::get('/followUser/{id}','userController@followUser')->middleware('auth');
Route::get('/unfollowUser/{id}','userController@unfollowUser')->middleware('auth');


Route::get('/search','userController@buscar')->middleware('auth');
