<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'last_name',
        'telephone',
        'cedula',
        'adress',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    //relacion uno a muchos.. de usuario con registro  a nivel de eloquent
    public function registros(){
        return $this->hasMany('App\Models\Registro');
    }
     //relacion uno a muchos.. de usuario con libro  a nivel de eloquent
    public function libros(){
        return $this->hasMany('App\Models\Libro');
    }
    //relacion muchos a uno.. de  con solicitud registro  a nivel de eloquent documentacion
    //public function solicituds(){
      // return $this->hasMany(Solicitud::class);
   // }
    //relacion muchos a uno.. de  con solicitud registro  a nivel de eloquent stack overflow
    public function solicitudes(){
        return $this->hasMany('App\Models\Solicitud');
     }
        public function certificados(){
        return $this->hasMany('App\Models\Certificado');
     }
}
