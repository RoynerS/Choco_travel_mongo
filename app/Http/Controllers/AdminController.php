<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Lógica para mostrar el dashboard de administración
        return view('admin.dashboard'); // Asegúrate de tener esta vista
    }
}
