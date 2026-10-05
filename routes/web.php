<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\LivroController;

// Página inicial do projeto
Route::get('/', function () {
    return view('welcome');
});

// Rotas completas para o CRUD de Autores
Route::resource('autores', AutorController::class)
    ->parameters(['autores' => 'autor'])
    ->except(['show']);

// Rotas completas para o CRUD de Livros
Route::resource('livros', LivroController::class)
    ->except(['show']);