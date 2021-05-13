<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Usuarios extends Component
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
    	 $users = User::where('users.id', '!=', 1)
                ->where(function ($query) {
                       $query->where('name', 'like', '%'.$this->search.'%')
                       ->orWhere('last_name', 'like', '%'.$this->search.'%')
                       ->orWhere('telephone', 'like', '%'.$this->search.'%')
                       ->orWhere('cedula', 'like', '%'.$this->search.'%')
                       ->orWhere('adress', 'like', '%'.$this->search.'%')
                        ->orWhere('email', 'like', '%'.$this->search.'%');
                 })
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->paginate($this->perPage); 

        return view('livewire.admin.usuarios', compact('users'));
    }

        public function estadochange($id, $role)
    {
        $user =User::find($id);
        $user->syncRoles([$role]);
    
          $this->emit('info',['mensaje' => 'Rol Actualizado']);

    }
    
}
