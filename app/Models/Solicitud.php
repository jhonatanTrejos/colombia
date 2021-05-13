<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;
     //los campos fillable son los que vamos a llenar
    protected $fillable = [
      'id',
      'user_id',
  ];
    //relacion muchos a uno.. de usuario con solicitud  a nivel de eloquent documentacion
   public function users(){
    return $this->belongsTo(User::class,'user_id');
  }

  //relacion uno a uno con estados
  public function estados()
    {
        return $this->belongsTo(Estado::class,'estado_id');
    }
    
}
