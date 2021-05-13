<?php

namespace Database\Seeders;

use App\Models\Libro;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       app()[PermissionRegistrar::class]->forgetCachedPermissions();
        $role3 = Role::create(['name' => 'super-admin']);
        $role6 = Role::create(['name' => 'admin']);

        $role4 = Role::create(['name' => 'user']);
        
        DB::table('users')->insert([
         
             'name'              => 'administrador',
             'last_name'         =>'Administrador',
             'telephone'         =>'098765432',
             'cedula'            => '098765432',
             'adress'            => 'Guayaquil',
             'email'             => 'admin@operador.com',
             'password'          => Hash::make('12345678'),
             'created_at'        => now(),
             'updated_at'        => now()
             ]);
            $user = User::find(1);
            $user->assignRole($role3);
        
        // $numero = 10000;

        // for ($i=0; $i < $numero; $i++) { 
        //     $libro = new Libro;
        //     $libro->fecha_inicio = now();
        //     $libro->fecha_fin = now();
        //     $libro->detalle = 'Libro '.$i;
        //     $libro->save();
        // }
    }
}
