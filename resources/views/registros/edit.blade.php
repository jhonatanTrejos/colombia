@extends('layouts.main',['activePage'=>'','titlePage'=>'Editar registro'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('registro.update',$registro->id)}}" method="post" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Registro</h4>
                            <p class="card-category">Editar datos</p>
                        </div>
                        <!-- //<div class="card-body">genera problemas quitar el div de cierre-->
                        <div class="row">
                            <label for="name" class="col-sm-4 col-form-label">Numero de cedula:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control"  name="numero_cedula" value="{{old('numero_cedula',$registro->numero_cedula)}}">
                                @if($errors->has('numero_cedula'))
                                <span class="error text-danger" for="input-numero_cedula">{{$errors->first('numero_cedula')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <label for="name" class="col-sm-4 col-form-label"> Nombre:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control"  name="nombre_empleado" value="{{old('nombre_empleado',$registro->nombre_empleado)}}">
                                @if($errors->has('nombre_empleado'))
                                <span class="error text-danger" for="input-nombre_empleado">{{$errors->first('nombre_empleado')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <label for="name" class="col-sm-4 col-form-label">Apellidos:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control"  name="apellidos_empleado" value="{{old('apellidos_empleado',$registro->apellidos_empleado)}}" >
                                @if($errors->has('apellidos_empleado'))
                                <span class="error text-danger" for="input-apellidos_empleado">{{$errors->first('apellidos_empleado')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <label for="name" class="col-sm-4 col-form-label">Cargo:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control"  name="cargo" value="{{old('cargo',$registro->cargo)}}" >
                                @if($errors->has('cargo'))
                                <span class="error text-danger" for="input-cargo">{{$errors->first('cargo')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <label for="name" class="col-sm-4 col-form-label">Fecha de inicio:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control"  name="fecha_inicio" value="{{old('fecha_inicio',$registro->fecha_inicio)}}">
                                @if($errors->has('fecha_inicio'))
                                <span class="error text-danger" for="input-fecha_inicio">{{$errors->first('fecha_inicio')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <label for="name" class="col-sm-4 col-form-label">Fecha de retiro:</label>
                            <div class="md-sm-8">
                                <input type="text" class="form-control"  name="fecha_retiro" value="{{old('fecha_retiro',$registro->fecha_retiro)}}" >
                                @if($errors->has('fecha_retiro'))
                                <span class="error text-danger" for="input-fecha_retiro">{{$errors->first('fecha_retiro')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <label for="name" class="col-sm-4 col-form-label">Dias laborados:</label>
                            <div class="md-sm-8">
                                <input type="numeric" class="form-control"  name="dias_laborados" value="{{old('dias_laborados',$registro->dias_laborados)}}">
                                @if($errors->has('dias_laborados'))
                                <span class="error text-danger" for="input-dias_laborados">{{$errors->first('dias_laborados')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <label for="name" class="col-sm-4 col-form-label">Sueldo:</label>
                            <div class="md-sm-8">
                                <input type="numeric" class="form-control"  name="sueldo" value="{{old('sueldo',$registro->sueldo)}}">
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
                                <input type="numeric" class="form-control"  name="ley100" value="{{old('ley100',$registro->ley100)}}">
                                @if($errors->has('ley100'))
                                <span class="error text-danger" for="input-ley100">{{$errors->first('ley100')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop