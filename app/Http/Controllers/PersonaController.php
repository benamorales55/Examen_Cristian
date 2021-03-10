<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Persona;
use DB;

class PersonaController extends Controller
{
    public function index(){
        $persona =DB::table('usuario')->get();
        return view('index',['persona'=>$persona]);
    }

    public function editar($id){
        return view ('editar',['persona'=>Persona::findOrFail($id)]);
    }

    public function actualizar(Request $request,$id){
        
        $persona=Persona::findOrFail($id);

        $persona->Nombre =$request->get('nombre');
        $persona->Apellido=$request->get('apellido');
        $persona->Cedula=$request->get('cedula');
        $persona->Direccion =$request->get('direccion');
        $persona->Telefono =$request->get('telefono');
        $persona->user =$request->get('user');
        

        $persona->save();
        return Redirect::to('/index');
    }
    public function borrar($id){
        $persona = Persona::findOrFail($id);
        $persona->delete();
        return Redirect::to('/index');
    }

    public function crear(Request $request){
        $persona= new Persona;
        $persona->Nombre =$request->get('nombre');
        $persona->Apellido =$request->get('apellido');
        $persona->Cedula=$request->get('cedula');
        $persona->Direccion =$request->get('direccion');
        $persona->Telefono =$request->get('telefono');
        $persona->user =$request->get('user');
        

        $persona->save();

        return Redirect::to('/index');
    }
}
