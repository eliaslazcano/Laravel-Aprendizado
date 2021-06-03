@extends('site.layouts.basico')
@section('titulo', 'Contato')
@section('corpo')
    <h1>View "contato" (Usando o template basico)</h1>
    <h2>Assunto: {{$assunto}}</h2>
    @include('site.layouts.parcial.menu')
@endsection
