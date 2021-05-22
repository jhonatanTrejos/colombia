@extends('layouts.certificado.nav')
@section('content')
<div class="container mt-5">
    <div class="card">
    <div class="card-body">
      <h2 class="text-center font-weight-bold text-danger">Certificados</h2>
      <table class="table-striped table" style="position: absolute; z-index:10;">
        <thead>
          <tr>
            <th>ID</th>
            <th>Fecha de Solicitud</th>
            <th>Fecha de Despacho</th>
            <th>N° Registros</th>
            <th class="text-center">Acciones</th>
          
          </tr>
        </thead>
        <tbody>
          @foreach ($certificados as $certificado)
          <tr>
            <td>{{ $certificado->id }}</td>
            <td>{{ Carbon\Carbon::parse($certificado->created_at)->formatLocalized('%d de %B %Y ') }}</td>
            <td>{{ Carbon\Carbon::parse($certificado->updated_at)->formatLocalized('%d de %B %Y ') }}</td>
            <td> {{ count(json_decode($certificado->registros)) }}</td>
            <td class="text-center"><a href="{{ route('print', $certificado->id) }}" class="btn btn-danger"><i class="fas fa-file-pdf"></i>Ver Certificado</a></td>
            {{-- <td class="text-center"><a href="{{ route('print', $certificado->id) }}" class="btn btn-danger"><i class="fas fa-file-pdf"></i>Obtener Certificado</a></td> --}}
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection
 

