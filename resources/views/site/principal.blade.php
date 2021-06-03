@extends('site.layouts.basico')
@section('titulo', 'Contato')
@section('corpo')
    <h1>View "principal"</h1>
    @include('site.layouts.parcial.menu')
    <div>
        {{-- Comentário do interpretador Blade --}}

        {{-- Imprimindo valor Blade VS PHP Puro --}}
        <h3>Imprimindo valores:</h3>
        <p><?='Texto de teste (PHP)'?></p>
        <p>{{'Texto de teste (Blade)'}}</p>

        @php
            //Espaço para código PHP puro...
            echo '<p>Texto de teste</p>';
            $meuArray = ['nome' => 'Elias'];
            $meuBoleano = true;
        @endphp

        {{-- IF/ELSE --}}
        @if(count($meuArray) > 10)
            <p>O array possui muitos itens</p>
        @elseif(count($meuArray) > 0)
            <p>O array possui itens</p>
        @else
            <p>O array está vazio</p>
        @endif

        {{-- UNLESS (IF/ELSE INVERTIDO) --}}
        @unless($meuBoleano)
            <p>O boleano é falso</p>
        @else
            <p>O boleano é verdadeiro</p>
        @endunless

        {{-- ISSET --}}
        @isset($meuArray)
            <p>A variavel $meuArray existe</p>
        @endisset

        {{-- EMPTY - Variavel está vazia? 0, '0', false, null, array(), $var declarada sem valor --}}
        @empty($meuArray)
            <p>O array está vazio</p>
        @endempty

        {{-- SWITCH/CASE --}}
        @switch($meuArray['nome'])
            @case('Elias')
                <p>o nome é Elias</p>
                @break
            @case('Neto')
                <p>o nome é Neto</p>
                @break
            @default
                <p>O nome é desconhecido</p>
        @endswitch

        {{-- FOR --}}
        @for($i = 0; $i < 3; $i++)
            <p>For, $i = {{$i}}</p>
        @endfor

        {{-- WHILE --}}
        @while(!isset($minhaString))
            <p>Testando o While</p>
            @php $minhaString = 'String de teste'; @endphp
        @endwhile

        {{-- ForEach --}}
        @foreach($meuArray as $indice => $valor)
            <p>Indice: {{$indice}}, Valor: {{$valor}}</p>
        @endforeach

        {{-- ForElse (indentico ao ForEach, mas há um comportamento caso o array esteja vazio) --}}
        @forelse($meuArray as $indice => $valor)
            <p>Indice: {{$indice}}, Valor: {{$valor}}</p>
        @empty
            <p>O array está vazio</p>
        @endforelse


        {{-- Imprime a variavel, mas se não houver valor (!isset || null) imprime o dado a seguir --}}
        {{ $meuArray['sobrenome'] ?? 'Não foi possível imprimir o dado' }}

        {{-- Imprime a variavel para debugar, melhor que usar var_dump --}}
        @dd($meuArray)
    </div>
@endsection
