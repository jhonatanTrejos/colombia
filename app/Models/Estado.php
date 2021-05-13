<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;
    


   public function solicituds()
    {
        return $this->hasOne(Solicitud::class);
    }


}