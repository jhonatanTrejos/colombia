@extends('layouts.main',['activePage'=>'index','titlePage'=>'Ver Registros'])
@section('css')
    @livewireStyles
@endsection

@section('content')
@livewire('admin.registros')
 
@stop
@section('js')
 @livewireScripts
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{ asset('js/eventos.js') }}/"></script>
@endsection