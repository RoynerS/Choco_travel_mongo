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
        .card {
        border: none;
        border-radius: 8px;
        overflow: hidden;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    }

    .card-title {
        font-size: 18px;
        font-weight: bold;
        color: #343a40;
    }

    .card-text {
        font-size: 14px;
        color: #6c757d;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }
        body {
            display: flex;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
        }

        .sidebar {
            max-width: 250px;
            height: 100vh;
            background-color: #343a40;
            color: #fff;
            padding: 20px;
            position: fixed;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .sidebar h2 {
            font-size: 24px;
            margin-bottom: 20px;
            text-transform: uppercase;
            font-weight: bold;
            color: white;
        }

        .sidebar h4 {
            font-size: 16px;
            margin-bottom: 30px;
            font-style: italic;
            color: #adb5bd;
        }

        .sidebar .nav-link {
            color: #ced4da;
            font-size: 16px;
            margin: 8px 0;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 4px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background-color: #495057;
            color: #fff;
        }

        .content {
            margin-left: 200px;
            padding: 20px;
            flex-grow: 1;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 28px;
            font-weight: bold;
            color: #343a40;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-label {
            font-weight: bold;
            color: #495057;
        }

        .form-control {
            border-radius: 6px;
            border: 1px solid #ced4da;
            padding: 10px;
            font-size: 14px;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.25);
        }

        button.btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 6px;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        button.btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .article {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .article h3 {
            font-size: 20px;
            color: #343a40;
            margin-bottom: 10px;
        }

        .article p {
            color: #6c757d;
            margin-bottom: 15px;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
            padding: 5px 10px;
            font-size: 14px;
            border-radius: 4px;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }

        .hidden {
            display: none;
        }

        @media (max-width: 768px) {
            .sidebar {
                min-width: 200px;
            }

            .content {
                margin-left: 200px;
            }
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
                <a href="/admin/users" class="nav-link">Gestion de usuarios</a>
            </li>
            
            <li class="nav-item">
                @if (Auth::check())
                    <li class="smooth-menu">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                        <a href="#" class="nav-link"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
        <div class="container ">
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
                <h2 class="mt-3 text-center">Artículos Disponibles</h2>
                @if($articles->isEmpty())
                    <p class="text-center text-muted">No hay artículos disponibles.</p>
                @else
                    <div class="row">
                        @foreach ($articles as $article)
                            <div class="col-md-4 mb-4">
                                <div class="card shadow-sm h-100">
                                    <img src="{{ asset($article['image']) }}" class="card-img-top" alt="Imagen del artículo"
                                        style="height: 200px; object-fit: cover;">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title">{{ $article->title }}</h5>
                                        <p class="card-text text-muted">{{ Str::limit($article->description, 100) }}</p>

                                        <!-- Botón para eliminar -->
                                        <form action="{{ route('blog.destroy', $article->_id) }}" method="POST" class="mt-2"
                                            onsubmit="return confirm('¿Estás seguro de que deseas eliminar este artículo?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
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