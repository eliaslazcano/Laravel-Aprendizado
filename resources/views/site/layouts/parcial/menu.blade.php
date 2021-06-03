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
</div>