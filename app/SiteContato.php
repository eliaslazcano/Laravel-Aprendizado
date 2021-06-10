<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    //Este é um Model que trabalhará com o ORM (Mapeamento Objeto-Relacional) realizado pela biblioteca Eloquent.
    //O objeto terá atributos com o mesmo nome das colunas da relativa tabela do banco.
    //Eles não precisam ser explicitamente declarados aqui na classe para existirem, exemplo $objSiteContato->coluna = 'Valor'.

    //Atributos para configuração
    protected $table = 'nome_da_tabela';  //Nome da tabela. Default: 'site_contatos' (Estilo snake_case + caractere 's')
    protected $primaryKey = 'usuario_id'; //Nome da coluna de chave primária. Default: 'id'
    public $incrementing = false; //Apenas coloque isso se a chave primária não for INT & AUTOINCREMENT. Default: true
    protected $fillable = ['column1', 'column2']; //Colunas autorizadas para o comando ::create();

    //Por causa do 'extends Model', esta classe oferecerá os seguintes métodos:

    /*
     * Consultas:
     * $contato  = SiteContato::find(2); //Indique a chave primaria, obterá uma instancia desse objeto alimentada.
     * $contatos = SiteContato::all();  //Obtem todos os registros da tabela em objeto Collection.
     * $contatos = SiteContato::where('nome', '=', 'elias')->orderBy('nome')->take(10)->get();
     * $contatos = SiteContato::whereNull('nome')->get();
     * $contatos = SiteContato::whereNotNull('nome')->get();
     * $contatos = SiteContato::whereIn('motivo_contato', ['elogio', 'sugestao'])->get(); //Obtem registros com alguma das correspondencias
     * $contatos = SiteContato::whereNotIn('motivo_contato', ['elogio', 'sugestao'])->get();
     * $contatos = SiteContato::whereBetween('id', [3, 6])->get(); //Obtem registros de um dado intervalo (inclusive)
     * $contatos = SiteContato::whereNotBetween('id', [3, 6])->get();
     * $contatos = SiteContato::whereDate('created_at', '2020-08-31')->get();
     * $contatos = SiteContato::whereDay('created_at', '31')->get();
     * $contatos = SiteContato::whereMonth('created_at', '8')->get();
     * $contatos = SiteContato::whereYear('created_at', '2020')->get();
     * $contatos = SiteContato::whereTime('created_at', '>', '22:30:00')->get();
     * $contatos = SiteContato::whereColumn('created_at', '=', 'updated_at')->get();
     *
     * Você pode encadear vários ->where(), os outros métodos são opcionais, basta terminar com ->get();
     * Ao encadear vários where, por padrão se combinam usando AND. Mas pode encadea-los com OR, chamando a versão com prefixo 'or' do mesmo método.
     *
     * Como posso fazer um WHERE que separa as regras em parenteses? (cond1 AND cond2) OR (cond3)
     * $contatos = SiteContato::where(function($query) {
     *   $query->where('nome', 'Elias')->orWhere('nome', 'Erilda');
     * })->orWhere(function($query) {
     *   $query->whereIn('motivo_contato', ['elogio', 'sugestao'])->orWhereBetween('id', [3, 6]);
     * })->get();
     *
     */

    /*
     * Inserções:
     * $contato->save(); //Realiza um INSERT na tabela, de acordo com o valor que está nos atributos do objeto.
     * SiteContato::create(['coluna' => 'valor', 'coluna2' => 'valor']); //Realiza um INSERT na tabela. Requer a propriedade $fillable declarada na classe.
     */

    /*
     * Atualizações:
     * $contato->save(); //Se o objeto possui o attr da chave primária, este comando irá realizar um UPDATE ao invés de INSERT.
     * SiteContato::where('nome', '==', 'elias')->update(['lido' => 1]); //Faz uma atualização em massa, através de condições.
     */

    /*
     * Deletar:
     * $contato->delete(); //Retorna boleano indicando sucesso.
     * SiteContato::where('nome', '==', 'elias')->delete(); //Retorna o numero de linhas afetadas (int).
     * SiteContato::destroy(1);         //Apaga através da chave primária.
     * SiteContato::destroy(1, 2, 3);   //Apaga vários através da chave primária.
     * SiteContato::destroy([1, 2, 3]); //Apaga vários através da chave primária.
     */

    /*
     * Outros:
     * $contato->getAttributes(); //Obtem um array associativo sendo o ['attr' => valor, 'attr2' => 'valor'].
     */

}
