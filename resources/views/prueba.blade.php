<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear Artículo</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>

<body>
  <div class="container mt-5">
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

    <!-- Mostrar artículos -->
    <h2 class="mt-5">Artículos Disponibles</h2>
    @if($articles->isEmpty())
    <p>No hay artículos disponibles.</p>
  @else
  @foreach ($articles as $article)
    <div>
    <h3>{{ $article->title }}</h3>
    <p>{{ $article->description }}</p>

    <!-- Botón para eliminar -->
    <form action="{{ route('blog.destroy', $article->_id) }}" method="POST"
    onsubmit="return confirm('¿Estás seguro de que deseas eliminar este artículo?');">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
    </div>
  @endforeach
@endif

  </div>
</body>

</html>