@extends('layouts.certificado.nav')
@section('content')
<div class="container mt-5">
    <div class="card">
    <div class="card-body">
      <h2 class="text-center font-weight-bold text-danger">Solicitudes</h2>
      <table class="table-striped table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Fecha de Solicitud</th>
            <th>Motivo</th>
            <th>Fecha de Despacho</th>
            <th>Estado</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($solicitudes as $solicitud)
          <tr>
            <td>{{ $solicitud->id }}</td>
            <td>{{ Carbon\Carbon::parse($solicitud->created_at)->formatLocalized('%d de %B %Y ') }}</td>
            <td>{{ $solicitud->motivo }}</td>
            <td>
              @isset ($solicitud->fecha_despacho)
              {{ Carbon\Carbon::parse($solicitud->fecha_despacho)->formatLocalized('%d de %B %Y ') }}
              @endisset

            </td>
            <td>
              <span class="badge @if ($solicitud->estado == 'despachado')
                badge-success
                @else
                badge-danger
              @endif">{{ $solicitud->estado }}</span>
              
            </td>
          </tr>
          @endforeach
        
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection
 
