<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitacaoController extends Controller
{
    public function create()
    {
        return view('solicitacao.create');
    }
}
