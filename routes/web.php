<?php

use Illuminate\Support\Facades\Route;
use App\Persona;
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


//sql
Route::get('/insertar','PersonaController@insertar');
Route::get('/destroy/{id}','PersonaController@destroy');
Route::get('/update/{id}','PersonaController@update');
Route::get('/mostrar','PersonaController@mostrar');


//orm

Route::get('/orm/leer',function(){
    $persona = Persona::All();
    foreach($persona as $per){
        echo $per->Nombre;
        echo "<br/>";
    }
});


Route::get('/orm/actualizar',function(){
    Persona::where("ID",7)->update([
        'Nombre'=>"Laura Pancini"
    ]);
});

Route::get("/orm/borrar",function(){
    $persona = Persona::findOrFail(7);
    $persona->delete();
});