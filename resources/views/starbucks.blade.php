<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- <link rel="stylesheet" href="{{ URL::asset('/css/reset.css') }}"> --}}
    <link rel="stylesheet" href="{{ URL::asset('/css/starbucks.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('img/logo.png')}}">
    
    <title>Starbucks</title>
    
</head>
<body>
    <section>
        <div class="circle"></div>
        <header>
            <a href="#" class="logo"><img class="logo" src="{{ URL::asset('img/logo.png')}}" alt="Logo"></a>    
            
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">What's New</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </header>

        <div class="content">
            <div class="textBox">
                <h2>It's not just Coffe<br>It's <span>Starbucks</span></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab dolores laboriosam sint eaque aut dignissimos quidem consectetur, natus soluta? Nulla veniam, aut voluptatum quidem doloremque ea officia cum! Deleniti, enim?</p>
                <a href='#'>Learn More</a>  
            </div>
            
            <div class="imgBox">
                <img src="{{ URL::asset('img/img1.png')}}" class="starbucks" alt="Starbucks">
            </div>                
        </div>

        <ul class="thumb">
            <li><img src="{{ URL::asset('img/thumb1.png') }}" onclick="imgSlider('/img/img1.png'); changeCircleColor('#017143')"></li>
            <li><img src="{{ URL::asset('img/thumb2.png') }}" onclick="imgSlider('/img/img2.png'); changeCircleColor('#eb7495')"></li>
            <li><img src="{{ URL::asset('img/thumb3.png') }}" onclick="imgSlider('/img/img3.png'); changeCircleColor('#d752b1')"></li>
        </ul> 
        
        <ul class="sci">
            <li><a href="#"><img src="{{ URL::asset('img/facebook.png')}}"></a></li>
            <li><a href="#"><img src="{{ URL::asset('img/twitter.png')}}"></a></li>
            <li><a href="#"><img src="{{ URL::asset('img/instagram.png')}}"></a></li>
        </ul>
    </section>

    <script src="{{ URL::asset('js/index.js')}}"></script>
</body>
</html>