@extends('site.layouts.basico')
@section('titulo', 'Contato')
@section('corpo')
    <h1>View "sobre-nos"</h1>
    @include('site.layouts.parcial.menu')
    
    <!-- Colocando assets na página: -->
    <img src="img/vue-logo.png" alt="Vue Logo" width="64" height="64"> <!-- Errado -->
    <img src="{{ asset('img/vue-logo.png') }}" alt="Vue Logo" width="64" height="64"> <!-- Correto -->
@endsection
