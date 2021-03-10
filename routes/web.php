<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/index','PersonaController@index');
Route::get('/edita/{id}','PersonaController@editar');
Route::put('/persona/actuali/{id}','PersonaController@actualizar')->name('persona.update');
Route::get('/persona/borrar/{id}','PersonaController@borrar');
Route::post('/persona/nueva','PersonaController@crear');
Route::get('crear',function(){
    return view('nuevo');
});
