<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  rel="stylesheet" href="{{ URL::asset('css/paralaxlogin.css')}}">

    <title>Paralax Login</title>
</head>
<body>
    <section>
        <div class="container">
            <div id="scene">
                <div class="layer" data-depth-x="-0.5" data-depth-y="0.25"><img src="{{URL::asset('img/paralaxlogin/moon.png')}}" ></div>
                <div class="layer" data-depth-x="0.15"><img src="{{URL::asset('img/paralaxlogin/mountains02.png')}}"></div>
                <div class="layer"data-depth-x="0.25"><img src="{{URL::asset('img/paralaxlogin/mountains01.png')}}"></div>
                <div class="layer"data-depth-x="-0.25"><img src="{{URL::asset('img/paralaxlogin/road.png')}}"></div>
            </div>
        </div>
        <div class="login">
            <h2>Sign in</h2>
            
            <div class="inputBox">
                <input type="text" placeholder="Username" >                
            </div>

            <div class="inputBox">
                <input type="password" placeholder="Password" >                
            </div>

            <div class="inputBox">
                <input type="submit" value="Login" id="btn">                                
            </div>

            <div class="group">
                <a href="/">Inicio</a>
                <a href="#">Registrarme</a>
            </div>
        </div>
    </section>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js" integrity="sha512-/6TZODGjYL7M8qb7P6SflJB/nTGE79ed1RfJk3dfm/Ib6JwCT4+tOfrrseEHhxkIhwG8jCl+io6eaiWLS/UX1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ URL::asset('js/paralaxlogin.js')}}"></script>
</body>
</html>