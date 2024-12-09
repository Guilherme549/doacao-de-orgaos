<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\OrganController;
use App\Http\Controllers\HospitalController;

use App\Http\Controllers\AuthController;


Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index']); // Listar usuários
    Route::post('/', [UserController::class, 'store']); // Criar usuário
    Route::get('/{id}', [UserController::class, 'show']); // Mostrar um usuário específico
    Route::put('/{id}', [UserController::class, 'update']); // Atualizar usuário
    Route::delete('/{id}', [UserController::class, 'destroy']); // Deletar usuário
});

Route::post('/login', [AuthController::class, 'login']); // Rota de login

Route::prefix('organs')->group(function () {
    Route::get('/', [OrganController::class, 'index']);
    Route::post('/', [OrganController::class, 'store']);
    Route::get('/{id}', [OrganController::class, 'show']);
    Route::put('/{id}', [OrganController::class, 'update']);
    Route::delete('/{id}', [OrganController::class, 'destroy']);
});

Route::prefix('hospitals')->group(function () {
    Route::get('/', [HospitalController::class, 'index']);
    Route::post('/', [HospitalController::class, 'store']);
    Route::get('/{id}', [HospitalController::class, 'show']);
    Route::put('/{id}', [HospitalController::class, 'update']);
    Route::delete('/{id}', [HospitalController::class, 'destroy']);
});

Route::post('/login', [AuthController::class, 'login']);
Route::post('/users', [UserController::class, 'store']);