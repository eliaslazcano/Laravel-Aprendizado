@extends('site.layouts.basico')
@section('titulo', 'Contato')
@section('corpo')
    <h1>View "contato" (Usando o template basico)</h1>
    <h2>Assunto: {{$assunto}}</h2>
    @include('site.layouts.parcial.menu')
    @component('site.components.form-contato', ['mensagem' => 'Digite sua mensagem'])
        @slot('topo')
            <h5 class="card-title">Título do formulário (usando $slot)</h5>
        @endslot
        <p>Preencha o formulário abaixo. Responderemos o mais breve possível.</p>
    @endcomponent
@endsection
