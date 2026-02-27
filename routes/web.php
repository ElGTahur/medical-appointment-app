<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;

Route::get('/', function () {
    return view('welcome');
});

// Protege la ruta '/dashboard' con un cerrojo de seguridad: solo permite el acceso a usuarios
//  que hayan iniciado sesión, tengan una sesión activa de Jetstream y su correo verificado.
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Crea un área restringida ("aduana") donde todas las rutas internas requieren estar logueado,
//  usarán el prefijo '/admin' en la URL y sus nombres internos empezarán con 'admin.'
Route::middleware(['auth:sanctum', 'verified'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

// Define la ruta principal que carga la vista del panel de control (Dashboard)
// y le asigna un nombre para referenciarla fácilmente.
        Route::get('/', function () {
            return view('admin.index');
        })->name('dashboard');

        // Gestion de roles
        Route::resource('roles', RoleController::class);
    });
