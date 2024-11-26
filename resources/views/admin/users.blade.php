<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Usuarios</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        h1 {
            background-color: #007BFF;
            color: white;
            padding: 15px;
            text-align: center;
            margin: 0;
        }

        .form-container, table {
            margin: 20px auto;
            width: 90%;
            max-width: 800px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-top: 0;
            color: #007BFF;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }

        button:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #007BFF;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #eaf4ff;
        }

        .success-message {
            color: green;
            text-align: center;
            margin: 10px 0;
        }

        .error-messages {
            color: red;
            text-align: center;
            list-style: none;
            padding: 0;
        }

        .form-inline {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .form-inline input {
            flex: 1;
        }

        @media (max-width: 600px) {
            table, .form-container {
                width: 100%;
            }

            .form-inline {
                flex-direction: column;
                gap: 5px;
            }

            button {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <h1>Gestión de Usuarios <a href="/admin/dashboard/">Devulvase pal dash</a></h1>

    <!-- Mensajes de éxito o error -->
    @if(session('success'))
        <p class="success-message">{{ session('success') }}</p>
    @endif
    @if($errors->any())
        <ul class="error-messages">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <!-- Formulario para crear usuario -->
    <div class="form-container">
        <h2>Crear Nuevo Usuario</h2>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <label>Nombre:</label>
            <input type="text" name="name" required>
            <label>Email:</label>
            <input type="email" name="email" required>
            <label>Password:</label>
            <input type="password" name="password" required>
            <button type="submit">Agregar Usuario</button>
        </form>
    </div>

    <!-- Tabla de usuarios -->
    <div class="form-container">
        <h2>Lista de Usuarios</h2>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>
                            <!-- Formulario para actualizar usuario -->
                            <form class="form-inline" action="{{ route('users.update', $user->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('PUT')
                                <input type="text" name="name" value="{{ $user->name }}" required>
                                <input type="email" name="email" value="{{ $user->email }}" required>
                                <input type="text" name="role" value="{{ $user->role }}">
                                <button type="submit">Actualizar</button>
                            </form>

                            <!-- Formulario para eliminar usuario -->
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('¿Estás seguro de eliminar este usuario?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
