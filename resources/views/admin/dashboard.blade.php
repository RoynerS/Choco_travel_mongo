<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - ChocoTravel</title>
    <link rel="shortcut icon" type="image/icon" href={{url('assets/images/logo/logo.png')}} />
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
        }

        .sidebar {
            min-width: 250px;
            max-width: 250px;
            height: 100vh;
            background-color: #f8f9fa;
            padding: 20px;
            position: fixed;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            flex-grow: 1;
        }

        .hidden {
            display: none;
            /* Clase para ocultar secciones */
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Dashboard</h2>
        <h4>Admin // {{ Auth::user()->name }}</h4>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#" onclick="showSection('create-article')">Crear Artículo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="showSection('article-list')">Artículos</a>
            </li>
            <li class="nav-item">
                <a href="/" class="nav-link">Choco Travel</a>
            </li>
            <li class="nav-item">
                @if (Auth::check())
                    <li class="smooth-menu">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                        <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            LOGOUT
                        </a>
                    </li>

                @else
                @endif
            </li>

        </ul>
    </div>

    <!-- Contenido Principal -->
    <div class="content">
        <div class="container mt-5">
            <!-- Sección de Crear Artículo -->
            <div id="create-article" class="section">
                <h2 class="text-center">Crear un Nuevo Artículo</h2>

                <!-- Mostrar mensajes de éxito o error -->
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <!-- Formulario -->
                <form action="{{ route('articulo.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Título</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Fecha</label>
                        <input type="date" name="date" id="date" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Imagen (URL)</label>
                        <input type="text" name="image" id="image" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descripción</label>
                        <textarea name="description" id="description" rows="4" class="form-control" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="url" class="form-label">Enlace</label>
                        <input type="url" name="url" id="url" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Crear Artículo</button>

                </form>
            </div>

            <!-- Sección de Mostrar Artículos -->
            <div id="article-list" class="section hidden">
                <h2 class="mt-5">Artículos Disponibles</h2>
                @if($articles->isEmpty())
                    <p>No hay artículos disponibles.</p>
                @else
                    @foreach ($articles as $article)
                        <div class="article mb-3 p-3 border rounded shadow-sm">
                            <h3>{{ $article->title }}</h3>
                            <p>{{ $article->description }}</p>

                            <!-- Botón para eliminar -->
                            <form action="{{ route('blog.destroy', $article->_id) }}" method="POST"
                                onsubmit="return confirm('¿Estás seguro de que deseas eliminar este artículo?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

    <!-- Scripts de Bootstrap y JavaScript para la navegación -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Función para mostrar y ocultar secciones
        function showSection(sectionId) {
            // Ocultar todas las secciones
            const sections = document.querySelectorAll('.section');
            sections.forEach(section => {
                section.classList.add('hidden');
            });

            // Mostrar la sección seleccionada
            document.getElementById(sectionId).classList.remove('hidden');
        }

        // Mostrar la sección de crear artículo por defecto al cargar la página
        document.addEventListener('DOMContentLoaded', () => {
            showSection('create-article');
        });
    </script>
</body>

</html>