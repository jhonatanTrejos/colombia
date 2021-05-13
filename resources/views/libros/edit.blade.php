@extends('layouts.main',['activePage'=>'','titlePage'=>'Editar libro'])
@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form  action="{{route('libros.update',$libro->id)}}" method="post" class="form-horizontal">
            @csrf
            @method('PUT')
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Modulo para modificar libros') }}</h4>
                <p class="card-category">{{ __('Editar libro') }}</p>
              </div>
              <div class="card-body ">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Fecha de inicio') }}</label>
                  <div class="col-sm-7">
                      <input type="date" class="form-control" name="fecha_inicio" value="{{old('numero_cedula',$libro->fecha_inicio)}}" />
                      @if ($errors->has('fecha_inicio'))
                        <span id="name-error" class="error text-danger" for="input-fecha-inicio">{{ $errors->first('fecha_inicio') }}</span>
                      @endif
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Fecha de fin') }}</label>
                  <div class="col-sm-7">
                      <input class="form-control" name="fecha_fin"  type="date" value="{{old('numero_cedula',$libro->fecha_fin)}}" />
                      @if ($errors->has('fecha_fin'))
                        <span id="fecha_fin-error" class="error text-danger" for="input-fecha_fin">{{ $errors->first('fecha_fin') }}</span>
                      @endif
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Detalles') }}</label>
                  <div class="col-sm-7">
                      <textarea class="form-control" name="detalles"  type="textarea"
                       value="{{old('numero_cedula',$libro->detalles)}}"></textarea>
                      @if ($errors->has('detalles'))
                        <span id="detalles-error" class="error text-danger" for="input-detalles">{{ $errors->first('fecha_fin') }}</span>
                      @endif
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection