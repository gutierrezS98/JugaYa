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

Route::get('/perfil',function(){
  $eventos=\App\Evento::all();
  $vac=compact('eventos');
  return view('perfil',$vac);
})->middleware('auth');

Route::get('/eventos',function(){
  $eventos=\App\Evento::all();
  $vac=compact('eventos');
  return view('evento',$vac);
});

Route::get('/listaAmigos',function(){
  return view('listaAmigos');
})->middleware('auth');

Route::get('/listaEventos',function(){
  return view('listaEventos');
});

Route::get('/eventos',function(){
  $locations=\App\location::all();
  $vac=compact('locations');
  return  view('evento',$vac);
});

Route::get('/master',function(){
  return view('layouts/master');
});

Route::post('/eventos',"eventoController@create");

Route::get('/evento/{id}',function(){
  return view('evento');
});