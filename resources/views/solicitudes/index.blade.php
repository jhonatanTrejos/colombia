@extends('layouts.main',['activePage'=>'solicitud','titlePage'=>'Solicitudes'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                   @if (Session::has('error'))
                            <div class="alert alert-danger"> {{Session::get('error') }} </div>
                            @endif
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-tittle">Solicitudes</h4>
                                <p class="card-category">todas las Solicitudes</p>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>ID</th>
                                        <th>Solicitado por</th>
                                        <th>Fecha solicitud</th>
                                        <th>Fecha actualización</th>
                                        <th>Estado</th>
                                        <th class="right">Acciones</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($solicituds as $solicitud)
                                        <tr>
                                            <td>{{$solicitud->id}}</td>
                                            <td>{{$solicitud->users->name}} {{$solicitud->users->last_name}}</td>
                                            <td>{{ Carbon\Carbon::parse($solicitud->created_at)->formatLocalized('%d de %B %Y ') }}</td>
                                            <td>
                                                @isset ($solicitud->fecha_despacho)
                                                {{ Carbon\Carbon::parse($solicitud->fecha_despacho)->formatLocalized('%d de %B %Y ')}}
                                                @endisset
                                            </td>
                                            <td>
                                                <span class="badge @if ($solicitud->estado == 'pendiente')
                                                    badge-danger
                                                    @else
                                                    badge-success
                                                @endif">{{$solicitud->estado}}</span>
                                                
                                            </td>
                                            @if ($solicitud->estado == 'pendiente')
                                            <td class="td-actions">
                                                <a href="{{route('solicitudes.edit',$solicitud->id)}}" class="btn btn-sm btn-success">
                                                    <i class="material-icons">edit</i>Cambiar estado
                                                </a>
                                            </td>
                                            @else
                                            <td class="td-actions">
                                                <a href="" class="btn btn-sm btn-success disabled">
                                                    <i class="material-icons">edit</i>Cambiar estado
                                                </a>
                                            </td>
                                            @endif
                                            
                                        </tr>
                                        
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop