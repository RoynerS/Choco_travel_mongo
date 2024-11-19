<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MunicipioController;

// Ruta de la página principal
Route::get('/', [BlogController::class, 'index'])->name('home');

// ---------------------------------------
// Rutas de autenticación
// ---------------------------------------

// Mostrar el formulario de inicio de sesión (GET)
Route::get('/login', function () {
    return view('auth.register');
})->name('login');

// Procesar el inicio de sesión (POST)
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Procesar el registro de usuarios (POST)
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Cerrar sesión (POST)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ---------------------------------------
// Rutas de gestión de artículos (BlogController)
// ---------------------------------------

// Lista de artículos en el dashboard
Route::get('/admin/dashboard', [BlogController::class, 'dashboard'])->middleware('auth')->name('admin.dashboard');

// Mostrar el formulario para crear un artículo (GET)
Route::get('/crear-articulo', [BlogController::class, 'create'])->middleware('auth')->name('articulo.create');

// Guardar un nuevo artículo (POST)
Route::post('/crear-articulo', [BlogController::class, 'store'])->middleware('auth')->name('articulo.store');

// Eliminar un artículo (DELETE)
Route::delete('/articles/{id}', [BlogController::class, 'destroy'])->middleware('auth')->name('blog.destroy');

// ---------------------------------------
// Rutas de municipios (MunicipioController)
// ---------------------------------------

// Mostrar información de un municipio por nombre (GET)
Route::get('/municipios/{nombre}', [MunicipioController::class, 'show'])->name('municipios.show');
Route::get('/municipio/{nombre}', [MunicipioController::class, 'show']); // Ruta alternativa

// Procesar conversión de moneda (POST)
Route::post('/convertir', [MunicipioController::class, 'convertirMoneda'])->name('convertirMoneda');

// ---------------------------------------
// Ruta adicional para pruebas
// ---------------------------------------

Route::get('/admin', function () {
    return view('admin.dashboard'); // Renderiza la vista de prueba
})->name('dash');