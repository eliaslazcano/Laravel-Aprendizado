<form action="{{ route('site.contato', ['assunto' => 'Sem assunto']) }}" class="card mx-auto" style="max-width: 30rem">
    <div class="card-header">{{ $topo }}</div>
    <div class="card-body">
        {{ $slot }}
        <label for="ipt-nome" class="form-label">Nome</label>
        <input id="ipt-nome" name="nome" type="text" placeholder="Nome" class="form-control">
        <br/>
        <label for="ipt-telefone" class="form-label">Telefone</label>
        <input id="ipt-telefone" name="telefone" type="text" placeholder="Telefone" class="form-control">
        <br/>
        <label for="ipt-email" class="form-label">E-mail</label>
        <input id="ipt-email" name="email" type="text" placeholder="E-mail" class="form-control">
        <br/>
        <label for="ipt-motivo" class="form-label">Motivo</label>
        <select id="ipt-motivo" name="motivo" class="form-control">
            <option value="">Qual o motivo do contato?</option>
            <option value="1">Dúvida</option>
            <option value="2">Elogio</option>
            <option value="3">Reclamação</option>
        </select>
        <br/>
        <label for="ipt-mensagem" class="form-label">Mensagem</label>
        <textarea id="ipt-mensagem" name="mensagem" rows="2" class="form-control">{{ $mensagem }}</textarea>
    </div>
    <div class="card-footer text-center">
        <button type="submit" class="btn btn-primary">ENVIAR</button>
    </div>
</form>
