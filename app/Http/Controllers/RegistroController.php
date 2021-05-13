<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroCreateRequest;
use App\Http\Requests\RegistroEditRequest;
use App\Models\Libro;
use App\Models\Registro;
use App\Models\User;
use App\Models\registros;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistroController extends Controller
{
    
    public function index(Request $request)
    {
        //$findReg=trim($request->get('findReg'));
        //$registros=DB::table('registros')->get()
                                        //->where('numero_cedula','LIKE','%',$findReg,'%')
                                        //->orWhereR('nombre_empleado','LIKE','%',$findReg,'%')
                                        //->orderBy('id','asc')
                                        //->paginate(10);
                                       // ;

    $registros=Registro::paginate(2);
    return view('registros.index',compact('registros'));
    }
    public function create()
    {
        $libros = Libro::all(['id', 'detalles']);
        // return $libros;
        return view('registros/create', compact('libros'));
    }
    public function store(RegistroCreateRequest $request)
    {
        /*
        //validacion de campos de create lo reemplazo en el request para no saturar el controlador...
        $request->validate([
            'numero_cedula' =>'required|min:5|numeric',
            'nombre_empleado' => 'required|min:3|max:200|string',
            'apellidos_empleado' => 'required|min:3|string',
            'cargo' => 'nullable|min:4|string',
            'fecha_inicio' => 'nullable|min:10|max:11|date',
            'fecha_retiro' => 'nullable|min:10|max:11|date',
            'dias_laborados' => 'nullable|min:1|numeric',
            'sueldo' => 'nullable|numeric',
            'devengado' => 'nullable|numeric',
            'ley100' => 'nullable|numeric',

        ]);*/
         Registro::create([
            'numero_cedula'      => $request['numero_cedula'],
            'nombre_empleado'    => $request['nombre_empleado'],
            'apellidos_empleado' => $request['apellidos_empleado'],
            'cargo'              => $request['cargo'],
            'fecha_inicio'       => $request['fecha_inicio'],
            'cpsm'               => $request['cpsm'],
            'fecha_retiro'       => $request['fecha_retiro'],
            'dias_laborados'     => $request['dias_laborados'],
            'sueldo'             => $request['sueldo'],
            'caja_compensacion'  => $request['caja_compensacion'],
            'ley100'             => $request['ley100'],
            'libro_id'           =>$request['libro_id'],
            
        ]);
        return redirect()->route('registro.index')->with('success','Registro creado correctamente');
    }

    public function show($id)
    {
        
    }
    public function edit(Registro $registro)
    {
        return view('registros.edit', compact('registro'));
    }
    public function update(RegistroCreateRequest $request, $id)
    {
        $registro=Registro::findOrFail($id);
        $data= $request->all();
        $registro->update($data);
        return redirect()->route('registro.index')->with('success','Usuario actualizado');
     
    }
    public function destroy(Registro $registro)
    {
        $registro->delete();

        return redirect()->route('registro.index')->with('success','Registro eliminado');
    }
}
