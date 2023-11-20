<?php

use App\Http\Controllers\QuartoController;
use Illuminate\Support\Facades\Route;


require __DIR__ . '/auth.php';


// Todas as rotas estão protegidas por autenticação diretamente no __contruct de cada Controller.


//redireciona para o método index em QuartoController
Route::get('/index', [QuartoController::class, 'index']);

//redireciona para o método listarDiponiveis em QuartoController
Route::get('/quartos-disponiveis', [QuartoController::class, 'listarDiponiveis']);


//redireciona para o método listaReservas em ReservaController
Route::post('/reservas', [App\Http\Controllers\ReservaController::class, 'listaReservas'])->name('reservas');

//redireciona para o método listaReservasPeriodo em ReservaController
Route::post('/reservas-data', [App\Http\Controllers\ReservaController::class, 'listaReservasData']);


//redireciona para o método index em ClienteController
Route::post('/listar-reservas-cliente', [App\Http\Controllers\ClienteController::class, 'index']);
