<?php

namespace App\Http\Controllers;

use App\Models\Article; // Importar el modelo
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Método para mostrar los artículos
    public function index()
    {
        $articles = Article::all(); // Cargar los artículos desde la base de datos
        return view('index', compact('articles')); // Pasar los artículos a la vista
    }

    // Método para mostrar el dashboard con los artículos
    public function dashboard()
    {
        $articles = Article::all(); // Cargar los artículos desde la base de datos
        return view('admin.dashboard', compact('articles')); // Pasar los artículos a la vista del dashboard
    }

    // Método para mostrar el formulario de creación de un artículo
    public function create()
    {
        return view('articles.create'); // Asegúrate de que esta vista exista
    }

    // Método para guardar nuevos artículos desde el formulario
    public function store(Request $request)
    {
        // Valida los datos recibidos
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'image' => 'required|string|max:255',
            'description' => 'required|string',
            'url' => 'required|string|max:255',
        ]);

        // Crea un nuevo artículo en MongoDB
        Article::create($validated);

        // Redirige a la página del dashboard con un mensaje de éxito
        return redirect()->route('admin.dashboard')->with('success', 'Artículo creado con éxito.');
    }

    // Método para eliminar un artículo
    public function destroy($id)
    {
        // Busca el artículo por su _id (utilizando 'where' para MongoDB)
        $article = Article::where('_id', $id)->first(); // Cambié 'find()' por 'where('_id', $id)->first()'

        if ($article) {
            $article->delete(); // Elimina el artículo
            return redirect()->route('admin.dashboard')->with('success', 'Artículo eliminado con éxito.');
        }

        return redirect()->route('admin.dashboard')->with('error', 'Artículo no encontrado.');
    }
}