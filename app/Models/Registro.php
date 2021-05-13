<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Registro extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'numero_cedula',
        'nombre_empleado',
        'apellidos_empleado',
        'cargo',
        'fecha_inicio',
        'fecha_retiro',
        'dias_laborados',
        'sueldo',
        'cpsm',
        'caja_compensacion',
        'ley100',
        'libro_id',

    ];
    //relacion muchos a uno.. de usuario con registro  a nivel de eloquent
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    //relacion muchos a uno.. de  con libro registro  a nivel de eloquent
    public function libro(){
       return $this->belongsTo('App\Models\Libro');
    }
    
}
