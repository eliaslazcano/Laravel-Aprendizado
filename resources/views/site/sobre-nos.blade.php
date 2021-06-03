<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sobre Nós</title>
</head>
<body>
<h1>View "sobre-nos"</h1>
<div>
    <p>Menu de navegação</p>
    <ul>
        <li>
            <a href="{{ route('site.index') }}">Principal</a>
        </li>
        <li>
            <a href="{{ route('site.contato', array('assunto' => 'Elias Neto')) }}">Contato</a>
        </li>
        <li>
            <a href="{{ route('site.sobrenos') }}">Sobre Nós</a>
        </li>
    </ul>

    <!-- Colocando assets na página: -->
    <img src="img/vue-logo.png" alt="Vue Logo" width="64" height="64"> <!-- Errado -->
    <img src="{{ asset('img/vue-logo.png') }}" alt="Vue Logo" width="64" height="64"> <!-- Correto -->
</div>
</body>
</html>
