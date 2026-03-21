<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;

Route::get('/', function () {
    return view('welcome');
});

// Ruta general de usuario (Dashboard de cliente/paciente)
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// --- SECCIÓN ADA 9: ÁREA RESTRINGIDA DE ADMINISTRACIÓN ---
// Añadimos 'can:admin.home' o 'role:admin' para que un Paciente no pueda saltarse la barda
//Quitar el can:admin.home para remover esa limitante de no saltarse los links solo copiando y pegando
Route::middleware(['auth:sanctum', 'verified' /*'can:admin.home'*/]) 
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Esta es la página de aterrizaje del administrador
        Route::get('/', function () {
            return view('admin.index');
        })->name('index'); // Se accede como route('admin.index')

        // CRUD de Roles: Al estar dentro del grupo, 
        // hereda automáticamente la protección 'can:admin.home'
        Route::resource('roles', RoleController::class);
    });