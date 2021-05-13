<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
	   protected $fillable = [
        'user_id',
        'solicitud_id',
        'registros',
        'fecha_despacho',
        'total_dias'
    ];
    use HasFactory;

       public function user(){
    return $this->belongsTo(User::class,'user_id');
  }

}
