@extends('layouts.main',['activePage'=>'registros','titlePage'=>'Nuevo registro'])
@section('content')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('registro.store')}}" method="post" class="form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Registro</h4>
                            <p class="card-category">Ingresar datos</p>
                        </div>
                        <!-- /*<div class="card-body">
                            @if($errors->any())
                            <div class="alert alert-danger"></div>
                            <ul>
                                @
                                @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                                
                            </ul>
                            @endif*/-->
                            <div class="card-body">
                                <div class="row">
                                    <label for="name" class="col-sm-4 col-form-label">Numero del libro:</label>
                                    <div class="md-sm-8">
                                        <select class="libro" placeholder="Selecciona un libro"  name="libro_id" style="width: 100%">
                                            <option value="" selected=""></option>
                                            @foreach ($libros as $libro)
                                                <option value="{{ $libro->id }}">Libro {{ $libro->id }}</option>
                                            @endforeach
                                        </select>
                                        {{-- <input type="text" class="form-control"  name="libro_id" placeholder="ingrese el numero de libro" value="{{old('numero_libro')}}" autofocus> --}}
                                        @if($errors->has('libro_id'))
                                        <span class="error text-danger" for="input-libro_id">{{$errors->first('libro_id')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="name" class="col-sm-4 col-form-label">Numero de cedula:</label>
                                    <div class="md-sm-8">
                                        <input type="text" class="form-control"  name="numero_cedula" placeholder="Ingrese el numero de cédula" value="{{old('numero_cedula')}}">
                                        @if($errors->has('numero_cedula'))
                                        <span class="error text-danger" for="input-numero_cedula">{{$errors->first('numero_cedula')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="name" class="col-sm-4 col-form-label"> Nombre:</label>
                                    <div class="md-sm-8">
                                        <input type="text" class="form-control"  name="nombre_empleado" placeholder="Ingrese el nombre" value="{{old('nombre_empleado')}}">
                                        @if($errors->has('nombre_empleado'))
                                        <span class="error text-danger" for="input-nombre_empleado">{{$errors->first('nombre_empleado')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="name" class="col-sm-4 col-form-label">Apellidos:</label>
                                    <div class="md-sm-8">
                                        <input type="text" class="form-control"  name="apellidos_empleado" placeholder="Ingrese el nombre" value="{{old('apellidos_empleado')}}">
                                        @if($errors->has('apellidos_empleado'))
                                        <span class="error text-danger" for="input-apellidos_empleado">{{$errors->first('apellidos_empleado')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="name" class="col-sm-4 col-form-label">Cargo:</label>
                                    <div class="md-sm-8">
                                        <input type="text" class="form-control"  name="cargo" placeholder="Ingrese el cargo" value="{{old('cargo')}}">
                                        @if($errors->has('cargo'))
                                        <span class="error text-danger" for="input-cargo">{{$errors->first('cargo')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="name" class="col-sm-4 col-form-label">Fecha de inicio:</label>
                                    <div class="md-sm-8">
                                        <input type="date" class="form-control"  name="fecha_inicio" placeholder="Año-Mes-Dia" value="{{old('fecha_inicio')}}">
                                        @if($errors->has('fecha_inicio'))
                                        <span class="error text-danger" for="input-fecha_inicio">{{$errors->first('fecha_inicio')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="name" class="col-sm-4 col-form-label">Fecha de retiro:</label>
                                    <div class="md-sm-8">
                                        <input type="date" class="form-control"  name="fecha_retiro" placeholder="Año-Mes-Dia" value="{{old('fecha_retiro')}}">
                                        @if($errors->has('fecha_retiro'))
                                        <span class="error text-danger" for="input-fecha_retiro">{{$errors->first('fecha_retiro')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="name" class="col-sm-4 col-form-label">Dias laborados:</label>
                                    <div class="md-sm-8">
                                        <input type="numeric" class="form-control"  name="dias_laborados" placeholder="Ingrese la candidad en dias" value="{{old('dias_laborados')}}">
                                        @if($errors->has('dias_laborados'))
                                        <span class="error text-danger" for="input-dias_laborados">{{$errors->first('dias_laborados')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="name" class="col-sm-4 col-form-label">Sueldo:</label>
                                    <div class="md-sm-8">
                                        <input type="numeric" class="form-control"  name="sueldo" placeholder="Ingrese el sueldo" value="{{old('sueldo')}}">
                                        @if($errors->has('sueldo'))
                                        <span class="error text-danger" for="input-sueldo">{{$errors->first('sueldo')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="name" class="col-sm-4 col-form-label">CPSM:</label>
                                    <div class="md-sm-8">
                                        <input type="numeric" class="form-control"  name="cpsm" placeholder="Ingrese el cpsm" value="{{old('cpsm')}}">
                                        @if($errors->has('cpsm'))
                                        <span class="error text-danger" for="input-cpsm">{{$errors->first('cpsm')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="name" class="col-sm-4 col-form-label">Caja de Compensacion:</label>
                                    <div class="md-sm-4">
                                        <input type="numeric" class="form-control"  name="caja_compensacion" placeholder="Ingrese Caja de Compensacion" value="{{old('caja_compensacion')}}">
                                        @if($errors->has('caja_compensacion'))
                                        <span class="error text-danger" for="input-caja_compensacion">{{$errors->first('caja_compensacion')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="name" class="col-sm-4 col-form-label">Ley 100:</label>
                                    <div class="md-sm-4">
                                        <input type="numeric" class="form-control"  name="ley100" placeholder="Ingrese el devengado">
                                        @if($errors->has('ley100'))
                                        <span class="error text-danger" for="input-ley100">{{$errors->first('ley100')}}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button class="btn btn-primary" type="submit">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @stop
    @section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
    $('.libro').select2({
  placeholder: 'Selecciona Un Libro'
});
});
    </script>
    @endsection