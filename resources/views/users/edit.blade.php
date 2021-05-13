@extends('layouts.main',['activePage'=>'','titlePage'=>'Editar libro'])
@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form  action="{{route('users.update',$user->id)}}" method="post" class="form-horizontal">
            @csrf
            @method('PUT')
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Modulo para actualizar Usuarios') }}</h4>
                <p class="card-category">{{ __('Editar Usuario') }}</p>
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
                  <label class="col-sm-2 col-form-label">{{ __('Nombres') }}</label>
                  <div class="col-sm-7">
                      <input type="text" class="form-control" name="name" value="{{$user->name}}" />
                      @if ($errors->has('name'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                      @endif
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Apellidos') }}</label>
                  <div class="col-sm-7">
                      <input type="text" class="form-control" name="last_name" value="{{$user->last_name}}" />
                      @if ($errors->has('last_name'))
                        <span id="name-error" class="error text-danger" for="input-last_name">{{ $errors->first('last_name') }}</span>
                      @endif
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Teléfono') }}</label>
                  <div class="col-sm-7">
                      <input type="text" class="form-control" name="telephone" value="{{$user->telephone}}" />
                      @if ($errors->has('telephone'))
                        <span id="name-error" class="error text-danger" for="input-telephone">{{ $errors->first('telephone') }}</span>
                      @endif
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Cédula') }}</label>
                  <div class="col-sm-7">
                      <input type="text" class="form-control" name="cedula" value="{{$user->cedula}}" />
                      @if ($errors->has('cedula'))
                        <span id="name-error" class="error text-danger" for="input-cedula">{{ $errors->first('cedula') }}</span>
                      @endif
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Direccion') }}</label>
                  <div class="col-sm-7">
                      <input type="text" class="form-control" name="adress" value="{{$user->adress}}" />
                      @if ($errors->has('adress'))
                        <span id="name-error" class="error text-danger" for="input-adress">{{ $errors->first('adress') }}</span>
                      @endif
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('E-mail') }}</label>
                  <div class="col-sm-7">
                      <input type="text" class="form-control" name="email" value="{{$user->email}}" />
                      @if ($errors->has('email'))
                        <span id="name-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                      @endif
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Contraseña') }}</label>
                  <div class="col-sm-7">
                      <input type="text" class="form-control" name="password" placeholder="Ingrese una nueva contraseña o deje en blanco para conservar la anterior" />
                      @if ($errors->has('password'))
                        <span id="name-error" class="error text-danger" for="input-password">{{ $errors->first('password') }}</span>
                      @endif
                  </div>
                </div>
                </div>
                <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
                </div>
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