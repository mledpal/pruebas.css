<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/pagescroll.css')}}">
    <title>ScrollSpy JavaScript</title>
</head>
<body>

    <header>
        <a href="./" class="logo">Logo</a>
        <nav>
            <a href="#home" style="--clr:#ff4d4d;" class="active">Home</a>
            <a href="#about" style="--clr:#c56cf0;">About</a>
            <a href="#services" style="--clr:#ffeaa7;">Services</a>
            <a href="#portfolio" style="--clr:#17c0eb;">Portfolio</a>
            <a href="#contact" style="--clr:#fd79a8;">Contact</a>
        </nav>
    </header>
    <section id="home" style="--clr:#ff4d4d;">Home</section>
    <section id="about" style="--clr:#c56cf0;">About</section>
    <section id="services" style="--clr:#ffeaa7;">Services</section>
    <section id="portfolio" style="--clr:#17c0eb;">Portfolio</section>
    <section id="contact" style="--clr:#fd79a8;">Contact</section>


    <script src="{{ URL::asset('js/pagescroll.js')}}"></script>
</body>
</html>