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


Route::get('/testesregistros', function () {

  $usuario = App\User::find(1);
  //dd($usuario->carros);


});




Auth::routes();
Route::get('/', function(){
  return redirect('/admin');
});


Route::group(['middleware' => 'auth','prefix' => 'admin'], function () {

  Route::get('/', 'Admin\AdminController@index');
  Route::resource('usuarios', 'Admin\UsuarioController');

  Route::resource('pacientes', 'Admin\PacienteController');
  Route::resource('agendas', 'Admin\AgendaController');


});
