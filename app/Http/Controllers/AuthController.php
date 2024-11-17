<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {

        $register = new User();
        $register->name = $request->name;
        $register->email = $request->email;
        $register->password = Hash::make($request->password);
        $register->role = $request->role; // Agregar el rol
        $register->save();

        // Redirigir a la página principal o a una página de bienvenida
        return redirect('/login')->with('success', 'Registro exitoso, bienvenido!');
    }

    public function login(Request $request)
    {
        // Validación de datos
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Intentar autenticar al usuario
        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Autenticar al usuario
            Auth::login($user);

            // Redirigir según el rol
            if ($user->role === 'admin') {
                return redirect('/admin/dashboard')->with('success', 'Inicio de sesión exitoso como administrador');
            }

            // Redirigir a la página principal para usuarios normales
            return redirect('/')->with('success', 'Inicio de sesión exitoso');
        } else {
            return redirect()->back()->withErrors(['email' => 'Credenciales inválidas']);
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirige al usuario a la página de inicio de sesión o principal después de cerrar sesión
        return redirect('/')->with('success', 'Has cerrado sesión exitosamente');
    }



}