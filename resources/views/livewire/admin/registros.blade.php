<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header card-header-primary">
								<h4 class="card-tittle">Registros</h4>
								<p class="card-category">Registro de historias</p>
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
								
								<div class="row">
									<div class="col-12 text-right">
										<a href="{{ route('registro.create') }}" class="btn btn-sm btn-success">Crear nuevo registro</a>
									</div>
								</div>
								<div class="table-responsive">
									<table class="table">
										<thead class="text-primary">
											<th>ID</th>
											<th>Numero de cedula</th>
											<th>Nombres</th>
											<th>Apellidos</th>
											<th>Cargo</th>
											<th>Fecha de inicio</th>
											<th>Fecha de retiro</th>
											<th>Dias Laborados</th>
											<th>Sueldo</th>
											<th>CPSM</th>
											<th>Caja de Compensacion</th>
											<th>Ley 100</th>
											<th>Creado</th>
											<th>Actualizado</th>
											<th class="right" colspan="2">Acciones</th>
										</thead>
										<tbody>
											@if ($registros->isNotEmpty())
											@foreach ($registros as $registro)
											<tr>
												<td>{{$registro->id}}</td>
												<td>{{$registro->numero_cedula}}</td>
												<td>{{$registro->nombre_empleado}}</td>
												<td>{{$registro->apellidos_empleado}}</td>
												<td>{{$registro->cargo}}</td>
												<td>{{$registro->fecha_inicio}}</td>
												<td>{{$registro->fecha_retiro}}</td>
												<td>{{$registro->dias_laborados}}</td>
												<td>{{$registro->sueldo}}</td>
												<td>{{$registro->cpsm}}</td>
												<td>{{$registro->caja_compensacion}}</td>
												<td>{{$registro->ley100}}</td>
												<td>{{$registro->created_at}}</td>
												<td>{{$registro->updated_at}}</td>
												<td class="td-actions">
													<a href="{{route('registro.edit',$registro->id)}}" class="btn btn-warning ">
														<i class="material-icons">edit</i>
													</a>
													{{--    <form action="{{route('registro.delete',$registro->id)}}" method="POST" style="display: inline-block;"
														onsubmit=return confirmation('¿Esta seguro que desea eliminar este Registro?')>
														@csrf
														@method('DELETE')
														<button class="btn btn-danger" type="submit">
														<i class="material-icons">delete</i>
														</button>
													</form> --}}
												</td>
												<td class="td-actions">
													<a href="" class="btn btn-danger" wire:click.prevent="$emit('eliminarRegistros','Seguro que deseas eliminar este Usuario?','eliminarRegistro', {{ $registro->id }})" >
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
							{{$registros->links()}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>