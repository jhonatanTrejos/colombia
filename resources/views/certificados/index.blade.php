@extends('layouts.certificado.nav')
@section('content')
{{--        <div class="login-box">
        <img src="{{ asset('imagenes/logoquinchia.png') }}" class="avatar" alt="Avatar Image">
        <h1>Consultar registros</h1>
        <form action="{{route('certificados.consultaRegistros')}}" method="get">
          <label for="username">Número de documento</label>
          <input type="numeric" class="form-control" name="buscarReg" placeholder="Numero de cedula" autofocus required="required">
          <input type="submit" class="btn btn-primary" value="Buscar">
        </form>
      </div> --}}
<div class="container mt-5">
    <div class="card">
    <div class="card-body">
      <h2 class="text-center font-weight-bold text-danger">Registros</h2>
      
      <table class="table-striped table">
        <thead>
          <tr>
            <th>Numero de Cedula</th>
            <th>Cargo</th>
            <th>Fecha de Inicio</th>
            <th>Fecha de Retiro</th>
            <th>Dias Laborales</th>
            <th>Sueldo</th>
            <th>CPSM</th>
            <th>S. DGDO</th>
            <th>Ley 100</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($registros as $registro)
          <tr>
            <td>{{ $registro->numero_cedula }}</td>
            <td>{{ $registro->cargo }}</td>
            <td>{{ $registro->fecha_inicio }}</td>
            <td>{{ $registro->fecha_retiro }}</td>
            <td>{{ $registro->dias_laborados }}</td>
            <td>{{ $registro->sueldo }}</td>
            <td>{{ $registro->cpsm }}</td>
            <td>{{ $registro->caja_compensacion }}</td>
            <td>{{ $registro->ley100 }}</td>
          </tr>
          @endforeach
        
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection
 

