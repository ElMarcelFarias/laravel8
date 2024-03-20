<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;

class JogosController extends Controller {

    public function index() {

        $jogos = Jogo::all();
        //dd($jogos);
        return view('jogos.index', ['jogos' => $jogos]);
        //helper do laravel que mostra uma variavel ou texto
    }

    public function create() {
        //retorna a view para o formulario de criacao de novo jogo.
        return view('jogos.create');
    }

    public function store(Request $request) {
        Jogo::create($request->all());
        return redirect()->route('jogos-index');
    }

}