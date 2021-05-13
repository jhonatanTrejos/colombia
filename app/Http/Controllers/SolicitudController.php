<?php

namespace App\Http\Controllers;

use App\Models\Certificado;
use App\Models\Estado;
use App\Models\Registro;
use App\Models\Solicitud;
use App\Models\Users;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class SolicitudController extends Controller
{
    public function index()
    {
     $solicituds=Solicitud::get();
    //esto retorna la vitsta y compacta la variable para consumirla en la vista
   return view('solicitudes.index',compact('solicituds'));
    }
    public function edit(Solicitud $solicitud)
    {
        if ($solicitud->estado == 'despachado') {
            return redirect()->route('solicitudes.index')->with('error','No se puede cambiar el estado de esta solicitud');
        }
        return view('solicitudes.edit',compact('solicitud'));
    }
    public function update(Request $request, $id)
    {
        $solicitud                 = Solicitud::findOrFail($id);
        $solicitud->estado         = $request->estado;
        $solicitud->fecha_despacho = now();
        $solicitud->save();

        if($request->estado == 'despachado') {
        $registros = Registro::where('numero_cedula', $solicitud->users->cedula)->get(); 
        $dias = 0;
        
        foreach ($registros as $registro) {
           $dias += $registro->dias_laborados; 
        }
        $certificado = Certificado::updateOrCreate(
            ['solicitud_id' => $solicitud->id, 'user_id' => $solicitud->user_id],
            ['registros' => json_encode($registros), 'fecha_despacho' => now(), 'total_dias' => $dias]
            );
        // $certificado                 =  new Certificado;   
        // $certificado->user_id        = $solicitud->user_id;   
        // $certificado->solicitud_id   = $solicitud->id;  

        // $certificado->registros      = $solicitud;   
        // $certificado->fecha_despacho =  now();   
        // $certificado->save();   
        }
        
        return redirect()->route('solicitudes.index')->with('success','Estado actualizado');
     
    }
    
}
