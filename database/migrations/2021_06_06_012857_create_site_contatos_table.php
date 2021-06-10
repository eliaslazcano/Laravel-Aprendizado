<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Criação da tabela 'site_contatos' no banco de dados:
        Schema::create('site_contatos', function (Blueprint $table) {
            $table->id(); //Cria uma coluna INT auto-incremento como Chave Primária
            $table->timestamps(); //Cria duas colunas, datetime de criação do registro, datetime da modificação do registro.
            $table->string('nome', 64); //Cria coluna: varchar(64)
            $table->string('telefone', 14); //Cria coluna: varchar(14)
            $table->string('email', 128); //Cria coluna: varchar(128)
            $table->integer('motivo_contato'); //Cria coluna: int
            $table->text('mensagem'); //Cria coluna: text
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_contatos');
    }
}
