<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/countdown.css') }}">
    <title>Countdown Timer</title>
</head>

<body>
    <div id="time">
        <div class="circle" style="--clr:#1eb9ff;">
            <svg>
                <circle cx="70" cy="70" r="70" id="dd"></circle>
            </svg>
            <div id="days">00<br><span>Días</span></div>
        </div>

        <div class="circle" style="--clr:#ff2972;">
            <svg>
                <circle cx="70" cy="70" r="70" id="hh"></circle>
            </svg>
            <div id="hours">00<br><span>Horas</span></div>
        </div>

        <div class="circle" style="--clr:#fee800;">
            <svg>
                <circle cx="70" cy="70" r="70" id="mm"></circle>
            </svg>
            <div id="minutes">00<br><span>Minutos</span></div>
        </div>

        <div class="circle" style="--clr:#04fc43;">
            <svg>
                <circle cx="70" cy="70" r="70" id="ss"></circle>
            </svg>
            <div id="seconds">00<br><span>Segundos</span></div>
        </div>
    </div>


    <h2 class="newYear">2024<br><span>Feliz Año Nuevo</span></h2>

    <script src="{{ URL::asset('/js/countdown.js')}}">

    </script>

</body>

</html>
