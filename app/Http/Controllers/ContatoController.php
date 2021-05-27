<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    function contato($assunto) {
        return view('site.contato', array('assunto' => $assunto)); //Nomemclatura: subdiretorio.nome-da-view
    }
}
