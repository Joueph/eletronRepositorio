<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    Log::info('Rota inicial acessada.');
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home')
    ->middleware('auth');

// Adicione uma nova rota para o dashboard do administrador
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']) ->name('admin.dashboard');
    //Log::info('Rota do dashboard do administrador acessada.');
    Route::get('/admin/editar-usuario/{id}', [AdminController::class, 'editarUsuario'])->name('admin.editar-usuario');
    Log::info('Rota de edição de usuário do administrador acessada.');

});
