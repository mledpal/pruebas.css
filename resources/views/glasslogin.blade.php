<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ url('/css/glasslogin.css') }}">
  <title>Glassmorphism Login & Register</title>
</head>
<body>
    <div class="container">
      <span></span>
      <span></span>
      <span></span>
      
      <form id="signinform">
        <h2>Login</h2>
        <div class="inputBox">
          <input type="text" placeholder="Usuario">
        </div>
        <div class="inputBox">
          <input type="password" placeholder="Contraseña">
        </div>
        <div class="inputBox group">
          <a href="#">Olvidé la contraseña</a>
          <a href="#" id="signup">Login</a>
        </div>
        <div class="inputBox">
          <input type="submit" value="Login">
        </div>
      </form>

      <form id="signupform">
        <h2>Register</h2>
        <div class="inputBox">
          <input type="text" placeholder="Usuario">
        </div>
        <div class="inputBox">
          <input type="email" placeholder="E-mail">
        </div>
        <div class="inputBox">
          <input type="password" placeholder="Crear contraseña">
        </div>
        <div class="inputBox">
          <input type="password" placeholder="Confirma contraseña">
        </div>
        <div class="inputBox">
          <input type="submit" value="Registrarse">
        </div>
        <div class="inputBox group">
          <a href="#">¿Ya registrado? <b id="signin">Login</b></a>          
        </div>
      </form>

    </div>
    <script>
      let signup = document.querySelector('#signup');
      let signin = document.querySelector('#signin');
      let body = document.querySelector('body');

      signup.onclick = function () {
        body.classList.add('signup')
      }

      signin.onclick = function () {
        body.classList.remove('signup')
      }
    </script>
</body>
</html>