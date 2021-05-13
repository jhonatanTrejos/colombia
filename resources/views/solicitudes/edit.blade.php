@extends('layouts.main',['activePage'=>'','titlePage'=>'Editar Estado'])
@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form  action="{{route('solicitudes.update',$solicitud->id)}}" method="POST" class="form-horizontal">
            @csrf
            {{-- @method('PUT') --}}
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Cambiar el estado de una solicitud') }}</h4>
                <p class="card-category">{{ __('Editar estado de solicitud') }}</p>
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
                  <label class="col-sm-2 col-form-label">{{ __('Estado') }}</label>
                  <div class="col-sm-7">
                    <select name="estado" id="" class="custom-select">
                      <option value="pendiente" @if ($solicitud->estado == 'pendiente')
                        selected="" 
                      @endif>Pendiente</option>
                      <option value="despachado" @if ($solicitud->estado == 'despachado')
                        selected="" 
                      @endif>Despachado</option>
                    </select>
                      {{-- <input type="numeric" class="form-control" name="estado" value="{{old('estado',$solicitud->estado_id)}}" /> --}}
                      @if ($errors->has('estado'))
                        <span id="name-error" class="error text-danger" for="input-estado">{{ $errors->first('estado') }}</span>
                      @endif
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
        </div>
      </div>
    </div>
  </div>

@endsection