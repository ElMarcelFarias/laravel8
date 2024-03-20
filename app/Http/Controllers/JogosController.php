<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JogosController extends Controller {

    public function index() {

        $nome = "Marcel";

        return view('jogos.index', ['nome' => $nome]);
        //helper do laravel que mostra uma variavel ou texto
    }

}