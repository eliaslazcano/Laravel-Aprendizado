<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    function principal() {
        return view('site.principal'); //Nomemclatura: subdiretorio.nome-da-view
    }
}
