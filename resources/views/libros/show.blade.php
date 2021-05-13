@extends('layouts.main',['activePage'=>'#','titlePage'=>'Detalles del Libro'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card bg-dark">
                    <div class="card-header card-header-primary">
                        <div class="card-tittle"> Libro</div>
                            <p class="card-category">Vista detallada del libro {{$libro->id}}</p>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6 bg-dark">
                                    <div class="card card-user">
                                        <div class="card-body ">
                                            <p class="card-text ">
                                                <div class="author">
                                                    <a href="" class="d-flex">
                                                        <img src="{{asset('img/libro.png')}}" alt="image" class="avatar" >
                                                        <h5 class="tittle mx-3">   Libro {{$libro->id}}</h5>
                                                    </a>
                                                        <p class="description">
                                                        ID:             {{$libro->id}}<br>
                                                        Fecha de inicio:{{$libro->fecha_inicio}}<br>
                                                        Fecha de fin:   {{$libro->fecha_fin}}<br>
                                                        Creado el:      {{$libro->created_at}}<br>
                                                        Modificado el:  {{$libro->modified_by}}<br>
                                                        Creado por:     {{$libro->cratedby_id}}<br>
                                                        Modificado por: {{$libro->mobifiedby_id}}<br>
                                                        Descripción:    {{$libro->detalles}}<br>
                                                        </p>
                                                </div>
                                            </p>
                                            <div class="card-description">
                                            lorem
                                            </div>
                                        </div> 
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <button class="btn btn-sm btn-primary">Editar</button>
                                                <a href="{{route('libro.index')}}" class="btn  btn-sm btn-succes mr-6 ">Volver</a>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>                                    
</div>
@endsection