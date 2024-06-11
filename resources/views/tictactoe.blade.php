<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('./css/tictactoe.css')}}">
    <title>Tic-Tac-Toe</title>
</head>
<body>
    
    <div class="drag">
        <div class="dragBox">
            <div class="cross" draggable="true" id="cross1"></div>
        </div>
        <div class="dragBox">
            <div class="cross" draggable="true" id="cross2"></div>
        </div>
        <div class="dragBox">
            <div class="cross" draggable="true" id="cross3"></div>
        </div>
        <div class="dragBox">
            <div class="cross" draggable="true" id="cross4"></div>
        </div>
        <div class="dragBox">
            <div class="cross" draggable="true" id="cross5"></div>
        </div>
    </div>

    <div class="board">
        <div class="dropBox"></div>
        <div class="dropBox"></div>
        <div class="dropBox"></div>
        <div class="dropBox"></div>
        <div class="dropBox"></div>
        <div class="dropBox"></div>
        <div class="dropBox"></div>
        <div class="dropBox"></div>
        <div class="dropBox"></div>
    </div>

    <div class="drag">
        <div class="dragBox">
            <div class="circle" draggable="true" id="circle1"></div>
        </div>
        <div class="dragBox">
            <div class="circle" draggable="true" id="circle2"></div>
        </div>
        <div class="dragBox">
            <div class="circle" draggable="true" id="circle3"></div>
        </div>
        <div class="dragBox">
            <div class="circle" draggable="true" id="circle4"></div>
        </div>
        <div class="dragBox">
            <div class="circle" draggable="true" id="circle5"></div>
        </div>
    </div>

    <button class="reset">Reiniciar juego</button>

    <script src="{{ URL::asset('./js/tictactoe.js')}}"></script>
</body>
</html>