<?php

use Illuminate\Support\Facades\Route;

// Route::get('/home', function () {
//     return view('welcome');
// });


// Route::view('/jogos', 'jogos');


// Route::get('/jogos', function () {
//     return "Curso de Larvel";
// });

Route::view('/jogos', 'jogos', ['name' => 'GTA']); //Passando parametros estáticos 