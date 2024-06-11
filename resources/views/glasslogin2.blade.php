<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/glasslogin2.css') }}">
    <title>Glass Login 2</title>
</head>

<body>
    <div class ="wrapper">
        <div class="login-wrapper">
            <div class="logo"><img src="{{ url('/img/glasslogin2/logo_tveo.png') }}" alt="Logo de Tveo Linares" /></div>
            <div class="login-form">
                <div class="input-wrapper">
                    <input type="text" id="user" class="input-field" required>
                    <label for="user" class="label">Usuario</label>
                    <i class="bx bx-user icon"></i>
                </div>
                <div class="input-wrapper">
                    <input type="password" id="pw" class="input-field" required>
                    <label for="user" class="label">Contraseña</label>
                    <i class="bx bx-lock-alt icon"></i>
                </div>
                <div class="login-check">
                    <div class="remember">
                        <input type="checkbox" id="remember-me">
                    </div>
                    <div class="forgot">
                        <a href="#">¿Recordar Contraseña?</a>
                    </div>
                </div>
                <div class="input-wrapper">
                    <input type="submit" class="input-login" value="Login" />
                </div>
                <div class="register">
                    <span>¿No tienes cuenta? <a href="#">Regístrate</a></span>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
