<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/digitalclock.css') }}">
    <title>Digital Clock</title>
</head>

<body>
    <div class="clock">

        {{-- Reloj Analógico --}}
        <div class="numbers">
            <div class="circle" id="sec" style="--clr:#04fc43"><i></i></div>
            <div class="circle" id="min" style="--clr:#fee800"><i></i></div>
            <div class="circle" id="hrs" style="--clr:#ff2972"><i></i></div>
            <span style="--i:0;"><b>12</b></span>
            <span style="--i:1;"><b>1</b></span>
            <span style="--i:2;"><b>2</b></span>
            <span style="--i:3;"><b>3</b></span>
            <span style="--i:4;"><b>4</b></span>
            <span style="--i:5;"><b>5</b></span>
            <span style="--i:6;"><b>6</b></span>
            <span style="--i:7;"><b>7</b></span>
            <span style="--i:8;"><b>8</b></span>
            <span style="--i:9;"><b>9</b></span>
            <span style="--i:10;"><b>10</b></span>
            <span style="--i:11;"><b>11</b></span>
        </div>

        {{-- Reloj Digital --}}
        <div id="time">
            <div id="horas" style="--clr:#ff2972">00</div>
            <div id="minutos" style="--clr:#fee800">00</div>
            <div id="segundos" style="--clr:#04fc43">00</div>
            <div id="ampm" style="--clr:#fff">AM</div>
        </div>
    </div>
</body>

</html>
<script src="{{ asset('js/digitalclock.js') }}"></script>
