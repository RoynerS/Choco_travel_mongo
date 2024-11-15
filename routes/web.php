<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí están las rutas para manejar el login y registro de usuarios.
| Puedes agregar más rutas protegidas utilizando el middleware 'auth'.
|
*/

// Ruta de la página de inicio
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('index'); // Cambia 'welcome' por el nombre de tu vista principal
})->name('home');
// Ruta para mostrar el formulario de inicio de sesión (GET)
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', function () {
    return view('auth.register');
})->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');