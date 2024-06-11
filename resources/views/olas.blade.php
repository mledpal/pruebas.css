<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ URL::asset('/css/olas.css')}}">
    
    <title>Olas</title>
</head>
<body>   

    <section id="olas">        
        <div class="waves">
            <img class="stars" src=" {{ URL::asset('img/olas/stars.jpg') }} ">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
        </div>        
    </section>   

</body>
</html>