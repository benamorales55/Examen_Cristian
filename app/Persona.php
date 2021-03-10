<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
   protected $table='usuario';
   protected $primaryKey='Id';
   public $timestamps=false;
   protected $fillable=[
    'nombre',
    'apellido',
    'cedula',
    'direccion',
    'telefono',
    'user'
];

protected $guarded=[

];

}
