<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('inicio');
    })->name('inicio');

Route::get('/loja',
            [\App\Http\Controllers\TesteController::class, 'index'])
            ->name('loja');

Route::get('produto',
            [\App\Http\Controllers\DisciplinaController::class, 'index'])
            ->name('disciplinas.index');

Route::get('disciplina/editar',
            [\App\Http\Controllers\DisciplinaController::class, 'edit'])
            ->name('disciplina.editar');

Route::put('disciplina/atualizar',
            [\App\Http\Controllers\DisciplinaController::class, 'update'])
            ->name('disciplina.atualizar');

Route::post('disciplina/incluir',
            [\App\Http\Controllers\DisciplinaController::class, 'store'])
            ->name('disciplina.incluir');

Route::get('disciplina/{id}/delete',
            [\App\Http\Controllers\DisciplinaController::class, 'destroy'])
            ->name('disciplina.delete');

Route::get('disciplina/novo',
            [\App\Http\Controllers\DisciplinaController::class, 'create'])
            ->name('disciplina.novo');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
