<?php

namespace App\Http\Controllers;

use App\Models\Certificado;
use App\Models\Libro;
use App\Models\Registro;
use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Livewire;

class AdminController extends Controller
{
     public function __construct()

    {
       $this->middleware('auth');
    }

    public function index()
    {
        $user = User::count();
        $registros = Registro::count();
        $libros = Libro::count();
        $certificados = Certificado::count();
        return view('home',compact('user','registros','libros','certificados'));
    }
   



      public function usuarios()
    {
        return view('admin.users');
    }
    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }
    public function update(Request $request,$id)
    {
        $user=User::findOrFail($id);
        $data = $request->only('name','last_name','telephone','cedula','adress','email');
        if(trim($request->password)==''){
            $data=$request->except('password');
        }else{
            $data=$request->all();
            $data['password']=bcrypt($request->password);
        }

        $user->update($data);
        return redirect()->back()->with('status','usuario actualizado');
    }

}
