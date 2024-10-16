<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;

//Rota de Tarefas//
Route::get('/', [TarefaController::class, 'index'])->name('tarefas.index');
Route::get('/tarefas/create', [TarefaController::class, 'create'])->name('tarefas.create');
//Rotas para enviar dados ao servidor
Route::post('/tarefas', [TarefaController::class, 'store'])->name('tarefas.store');