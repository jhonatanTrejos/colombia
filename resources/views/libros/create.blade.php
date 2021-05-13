@extends('layouts.main',['activePage'=>'crear','titlePage'=>'Nuevo Libro'])
@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form  action="{{route('libro.store')}}" method="post" class="form-horizontal">
            @csrf
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Modulo para crear libros') }}</h4>
                <p class="card-category">{{ __('Crea un libro') }}</p>
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
                      <input type="date" class="form-control" name="fecha_inicio" value=""  placeholder="{{ __('Fecha de inicio del libro') }}" />
                      @if ($errors->has('fecha_inicio'))
                        <span id="name-error" class="error text-danger" for="input-fecha-inicio">{{ $errors->first('fecha_inicio') }}</span>
                      @endif
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Fecha de fin') }}</label>
                  <div class="col-sm-7">
                      <input class="form-control" name="fecha_fin"  type="date" placeholder="{{ __('Fecha de fin del libro') }}" value="" required />
                      @if ($errors->has('fecha_fin'))
                        <span id="fecha_fin-error" class="error text-danger" for="input-fecha_fin">{{ $errors->first('fecha_fin') }}</span>
                      @endif
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Detalles') }}</label>
                  <div class="col-sm-7">
                      <textarea class="form-control" name="detalles"  type="textarea"
                       placeholder="{{ __('Aqui detalles del libro, opcional') }}" value=""></textarea>
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