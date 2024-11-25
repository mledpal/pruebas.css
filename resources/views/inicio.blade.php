<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('/css/inicio.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/olas.css') }}">


    <title>Inicio</title>
</head>

<body>
    <div class="contenedor"></div>
    <nav>
        <ul>
            <li class="item"><a href="/animatedlogin">Animated Login Form</a></li>
            <li class="item"><a href="/borderglow">Border Glow</a></li>
            <li class="item"><a href="/botoneschulos">Botones Chulos</a></li>
            <li class="item"><a href="/contentslider">Content Slider</a></li>
            <li class="item"><a href="/countdown">Cuenta Atrás</a></li>
            <li class="item"><a href="/dialclimatico">Dial Climático</a></li>
            <li class="item"><a href="/glasseffect">Glass Effect</a></li>
            <li class="item"><a href="/glasslogin">Glassmorphism L&R</a></li>
            <li class="item"><a href="/glasslogin2">Glass Login 2</a></li>
            <li class="item"><a href="/glassmorphism">Glassmorphism Cards</a></li>
            <li class="item"><a href="/glowingcheckbox">Glowing Checkbox</a></li>
            <li class="item"><a href="/grocerylist">Grocery List</a></li>
            <li class="item"><a href="/invertedborder">Border Radius Card</a></li>
            <li class="item"><a href="/menulateral">Menu Lateral</a></li>
            <li class="item"><a href="/menumolon">Menu Molon</a></li>
            <li class="item"><a href="/navigationtabs">Navigation Tabs Glass</a></li>
            <li class="item"><a href="/neonbutton">Neon Button</a></li>
            <li class="item"><a href="/pagescroll">ScrollSpy JavaScript</a></li>
            <li class="item"><a href="/paralaxlogin">Paralax Login</a></li>
            <li class="item"><a href="/rank-list">Rank List</a></li>
            <li class="item"><a href="/showhidepassword">Show Hide Password</a></li>
            <li class="item"><a href="/simpleparalax">Simple Paralax</a></li>
            <li class="item"><a href="/starbucks">Starbucks</a></li>
            <li class="item"><a href="/textdistortion">Text Distortion</a></li>
            <li class="item"><a href="/tic-tac-toe">Tic-Tac-Toe</a></li>
            <li class="item"><a href="/transparentlogin">Transparent Login</a></li>
            <li class="item"><a href="/tveocards">Tveo Cards</a></li>
        </ul>
    </nav>


    <section id="olas">
        <div class="waves">
            {{-- <img class="stars" src=" {{ URL::asset('img/olas/stars.jpg') }} "> --}}
            <img class="island" src=" {{ URL::asset('img/olas/island.png') }} ">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
        </div>
    </section>


    <script src="{{ URL::asset('js/inicio.js') }}"></script>
</body>

</html>
