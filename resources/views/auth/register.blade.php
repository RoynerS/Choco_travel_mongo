<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Choco Travel - Regístrate y Conoce el Chocó</title>
    <link rel="stylesheet" href="{{ url('assets/css/register.css') }}">
    <link rel="shortcut icon" href="{{ url('assets/images/logo/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="back">
                <img src="{{ url('assets/images/gallary/back.jpg') }}" alt="">
                <div class="text">
                    <span class="text-1">Regístrate <br> Y conoce lo mejor del Chocó</span>
                    <span class="text-2">Acandí</span>
                </div>
            </div>
            <div class="front">
                <img src="{{ url('assets/images/gallary/front.jpg') }}" alt="">
                <div class="text">
                    <span class="text-1">Inicia sesión <br> y conoce lo mejor del Chocó</span>
                    <span class="text-2">Nuquí</span>
                </div>
            </div>
        </div>

        <div class="forms">
            <div class="form-content">
                <!-- Login Form -->
                <div class="login-form">
                    <div class="title">Inicia sesión</div>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf <!-- Token CSRF requerido por Laravel para formularios POST -->
                        <div class="input-boxes">
                            <div class="input-box">
                                <label for="login-email"><i class="fas fa-envelope"></i></label>
                                <input type="email" id="login-email" name="email" placeholder="Ingresa tu correo"
                                    required>
                            </div>
                            <div class="input-box">
                                <label for="login-password"><i class="fas fa-lock"></i></label>
                                <input type="password" id="login-password" name="password"
                                    placeholder="Ingresa tu contraseña" required>
                            </div>
                            <div class="text"><a href="#"></a></div>
                            <div class="button input-box">
                                <input type="submit" value="Ingresa">
                            </div>
                            <div class="text sign-up-text">No tienes cuenta? <label for="flip">Regístrate</label></div>
                        </div>
                    </form>
                </div>

                <!-- Signup Form -->
                <!-- Signup Form -->
                <div class="signup-form">
                    <div class="title">Regístrate</div>
                    <form action="{{ route('register') }}" method="POST"> <!-- Cambiado a 'register' -->
                        @csrf <!-- Token CSRF requerido por Laravel para formularios POST -->
                        <div class="input-box">
                            <label for="register-name"><i class="fas fa-user"></i></label>
                            <input type="text" id="register-name" name="name" placeholder="Ingresa tu nombre" required>
                        </div>
                        <div class="input-box">
                            <label for="register-email"><i class="fas fa-envelope"></i></label>
                            <input type="email" id="register-email" name="email" placeholder="Ingresa tu correo"
                                required>
                        </div>
                        <div class="input-box">
                            <label for="register-password"><i class="fas fa-lock"></i></label>
                            <input type="password" id="register-password" name="password"
                                placeholder="Ingresa tu contraseña" required>
                        </div>
                         
                        <div class="button input-box">
                            <input type="submit" value="Regístrate">
                        </div>
                        <div class="text sign-up-text">Ya tienes una cuenta? <label for="flip">Inicia sesión</label>
                        </div>
                    </form>
                    <!-- Mensajes de error de validación -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</body>

</html>