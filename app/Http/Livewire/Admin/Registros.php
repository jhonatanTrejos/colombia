<?php

namespace App\Http\Livewire\Admin;

use App\Models\Registro;
use Livewire\Component;
use Livewire\WithPagination;

class Registros extends Component
{
	use WithPagination;
	protected $paginationTheme = 'bootstrap';
	protected $listeners       = ['eliminarRegistro'];
	protected $queryString     =['search' => ['except' => ''],
	'page'
	];
	public $perPage            = 10;
	public $search             = '';
	public $orderBy            = 'id';
	public $orderAsc           = true;

    public function render()
    {
    	$registros = Registro::where(function ($query) {
                       $query->where('numero_cedula', 'like', '%'.$this->search.'%')
                       ->orWhere('nombre_empleado', 'like', '%'.$this->search.'%')
                       ->orWhere('apellidos_empleado', 'like', '%'.$this->search.'%')
                       ->orWhere('cargo', 'like', '%'.$this->search.'%')
                       ->orWhere('fecha_inicio', 'like', '%'.$this->search.'%')
                       ->orWhere('fecha_retiro', 'like', '%'.$this->search.'%')
                       ->orWhere('dias_laborados', 'like', '%'.$this->search.'%')
                       ->orWhere('sueldo', 'like', '%'.$this->search.'%')
                       ->orWhere('caja_compensacion', 'like', '%'.$this->search.'%')
                       ->orWhere('cpsm', 'like', '%'.$this->search.'%')
                       ->orWhere('ley100', 'like', '%'.$this->search.'%');
                 })
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->paginate($this->perPage); 
        return view('livewire.admin.registros', compact('registros'));
    }
           public function eliminarRegistro($id)
    {
          	$user = Registro::find($id);
            $user->delete();
            $this->emit('info',['mensaje' => 'Registro Eliminado Correctamente']);

    }
}
