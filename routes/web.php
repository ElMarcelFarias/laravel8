<?php

use App\Http\Controllers\JogosController;
use Illuminate\Support\Facades\Route;

// Route::get('/home', function () {
//     return view('welcome');
// });


// Route::view('/jogos', 'jogos');


// Route::get('/jogos', function () {
//     return "Curso de Larvel";
// });


//Metodo simples de enviar e receber parametros estáticos para ser utilizado em uma view 
//Route::view('/jogos', 'jogos', ['name' => 'GTA']); 


//Passagem de parametros dinamicos pela url com metodo GET.

//Como deixar um parametro opcional? 
//Coloque um ponto de interrogação para deixar ele optionals e inicialize a váriavel com null
// Route::get('/jogos/{id?}', function($id = null) {
//     return view('jogos', ['idJogo' => $id]);
// })->where('id', '[0-9]+');

//podemos colocar condições para recebimentos dos parâmetros, irei fazer uma condição 
//onde só será possível passar letras por parametro. com o ->where('name', '[A-Za-z]+');

//Agora um exemplo de uma condição que receba parametros apenas de inteiros.
//->where('id', '[0-9]+')


//Agora vamos colocar dois parametros da URL um id e um name

// Route::get('/jogos/{id?}/{name?}', function($id = null, $name = null) {
//     return view('jogos', ['idJogo' => $id, 'nomeJogo' => $name]);
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
//realizando uma condição para recebimentos de numeros e strings


// Route::get('/jogos', function() {
//     return view('jogos');
// });

// Route::get('/home', function() {
//     return view('welcome');
// })->name('home-index');

//aplicando name na rota para ser chamada no href da view.
//na view, dentro do href utilizar assim {{ route('home-index') }}

//tratativa de erro de rota
//fallback

Route::fallback(function(){
    return "Erro ao localizar a rota!";
    //posso retornar uma view como tratativa de erro.
});



//AULA 04 


// Route::get('/jogos', [JogosController::class, 'index']);

Route::prefix('jogos')->group(function() {
    Route::get('/', [JogosController::class, 'index'])->name('jogos-index');
    Route::get('/create', [JogosController::class, 'create'])->name('jogos-create');
    Route::get('/{id}/edit', [JogosController::class, 'edit'])->where('id', '[0-9]+')->name('jogos-edit');
    Route::put('/{id}', [JogosController::class, 'update'])->where('id', '[0-9]+')->name('jogos-update');
    Route::post('/', [JogosController::class, 'store'])->name('jogos-store');
});