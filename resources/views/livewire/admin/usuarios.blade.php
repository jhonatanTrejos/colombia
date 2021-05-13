<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header card-header-primary">
								<h4 class="card-tittle">Usuarios</h4>
								<p class="card-category">Usuarios Registrados</p>
							</div>
							
							<div class="card-body">
								@if(session('success'))
								<div class="alert alert-success" role="success">
									{{session('success')}}
								</div>
								@endif
								{{-- //esta es la busqueda--}}
								<div class="col-xl-12">
									
									<div class="form-row" wire:ignore>
										<div class="col-sm-4">
											<input  wire:model.debounce.300ms="search" type="text" class="form-control p-2" placeholder="Buscar Registros...">
											
										</div>
										<div class="col-auto">
											 <input class="btn btn-primary" type="submit" value="buscar">
										</div>
									</div>
									
								</div>
							
								<div class="table-responsive">
									<table class="table">
										<thead class="text-primary">
											<th>ID</th>
											<th>Cedula</th>
											<th>Nombre</th>
											<th>Apellido</th>
											<th>Telefono</th>
											<th>Direccion</th>
											<th>Correo</th>
											<th>Rol</th>
											<th>Creado</th>
											<th>Actualizado</th>
											<th class="right" colspan="2">Acciones</th>
										</thead>
										<tbody>
											@if ($users->isNotEmpty())
											@foreach ($users as $user)
											<tr>
												<td>{{$user->id}}</td>
												<td>{{$user->cedula}}</td>
												<td>{{$user->name}}</td>
												<td>{{$user->last_name}}</td>
												<td>{{$user->telephone}}</td>
												<td>{{$user->adress}}</td>
												<td>{{$user->email}}</td>
												<td class="p-0 text-center">@if ($user->hasRole('user'))
													<div style="cursor: pointer;" wire:click.prevent="estadochange({{ $user->id }}, 'admin')" class="badge badge-success badge-shadow">Usuario</div>
													
													@elseif ($user->hasRole('admin'))
													<div style="cursor: pointer;" wire:click.prevent="estadochange({{ $user->id }}, 'user')" class="badge badge-info badge-shadow">Administrador</div>
													
													@endif
												</td>
												<td>{{$user->created_at}}</td>
												<td>{{$user->updated_at}}</td>
												<td class="td-actions">
													<a href="{{ route('users.edit',$user->id) }}" class="btn btn-warning ">
														<i class="material-icons">edit</i>
													</a>
												</td>
												<td class="td-actions">
													<a href="" class="btn btn-danger" wire:click.prevent="$emit('eliminarRegistros','Seguro que deseas eliminar este Usuario?','eliminarRegistro', {{ $user->id }})" >
														<i class="fa fa-trash"></i>
													</a>
												</td>

											</tr>
											@endforeach
											@else
											<tr>
												<td colspan="15"><p class="text-center">No hay resultado para la busqueda <strong>{{ $search }}</strong> en la pagina <strong>{{ $page }}</strong> al mostrar <strong>{{ $perPage }} </strong> por pagina </p></td>
											</tr>
											
											@endif
										</tbody>
									</table>
								</div>
							</div>
							<div class="card-footer ml-auto"></div>
							{{$users->links()}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>