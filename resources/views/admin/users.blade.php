@extends('layouts.main',['activePage'=>'users','titlePage'=>'Ver Usuarios'])
@section('css')
    @livewireStyles
@endsection

@section('content')
@livewire('admin.usuarios')
 
@stop
@section('js')
 @livewireScripts
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{ asset('js/eventos.js') }}/"></script>
@endsection