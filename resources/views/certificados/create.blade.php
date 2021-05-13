@extends('layouts.certificado.nav')
@section('content')
<div class="container mt-4">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="card bg-dark">
        <div class="card-body">

          <h1 class="text-center text-light font-weight-bold">Solicitar un Certificado</h1>
                    @if (Session::has('error'))
<div class="alert alert-danger"> {{Session::get('error') }} </div>
 @endif
          <form action="{{route('certificado.solicitar')}}" method="POST">
            @csrf
            
            <label for="username" class="text-light">Motivo de Solicitud</label>
            <textarea name="motivo" id="" cols="30" rows="5" class="form-control"></textarea>
            {{-- <input type="numeric" class="form-control" name="buscarReg" placeholder="Numero de cedula" autofocus required="required"> --}}
            <div class="row justify-content-center mt-2">
            <input type="submit" class="btn btn-primary text-center" value="Solicitar">
            </div>
          </form>
        </div>
      </div>
      
    </div>
  </div>
</div>
{{--    <div class="login-box">
  <img src="{{ asset('imagenes/logoquinchia.png') }}" class="avatar" alt="Avatar Image">
  
</div> --}}
@endsection