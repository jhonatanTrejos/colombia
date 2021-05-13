<?php

namespace App\Http\Controllers;
use App\Models\Certificado;
use App\Models\Registro;
use App\Models\Solicitud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()

    {
       $this->middleware('auth');
      
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    //controladores para certificados usuarios normales
    public function inicio(){
        $registros = Registro::where('numero_cedula', Auth::user()->cedula)->get();

        return view('certificados.index', compact('registros'));
    }
    // public function registro(Request $request){
    //     $buscarReg=trim($request->get('buscarReg'));
    //     $registros=DB::table('registros')->get()
    //                                     ->where('numero_cedula','like',$buscarReg);
    //                                     //->orWhereR('nombre_empleado','LIKE','%',$findReg,'%')
    //                                     //->orderBy('id','asc')
    //                                     //->paginate(10);
    //                                    // ;

    //    //esto busca todos los registros                                
    // //$registros=Registro::paginate(5);
    // return view('certificados.consultaRegistros',compact('registros'));
    // //esto me devuelve la vista vacia
    //    // return view('certificados.consultaRegistros');
    // }
    public function nuevo(){
        return view('certificados.nuevo');
    }
      public function create(){
        return view('certificados.create');
    }

      public function consulta(){
        $certificados = Auth::user()->certificados;

        return view('certificados.consulta', compact('certificados'));
    }

     public function obtenerPDF($id){
      $certificado = Certificado::find($id);
         $pdf = \PDF::loadView('pdfs.certificado', compact('certificado'));
        return $pdf->download(now().'-ejemplo.pdf');

    }


     public function store(Request $request){
        $consulta = Auth::user()->solicitudes->where('estado', 'pendiente')->count();

        if ($consulta > 0) {
            return redirect()->back()->with('error', 'Tienes Solicutudes Pendientes');   
        }
        $solicitud                  = new Solicitud;
        $solicitud->user_id         = Auth::id();
        $solicitud->motivo          = $request->motivo;
        $solicitud->estado          = 'pendiente';
        $solicitud->save();
        return redirect()->route('certificados.index')->with('success','Certificado enviado correctamente');
    }
    public function certificado(){
        return view('certificados.certificado');
    }
    public function solicitud(){
        return view('certificados.solicitud');
    }
    public function solicitudes()
    {
      $solicitudes = Auth::user()->solicitudes;
        return view('users.solicitudes', compact('solicitudes'));
      
    }

}
