<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('./css/ranklist.css')}}">

    <title>Rank List</title>
</head>
<body>

    <div class="container">
        <h3>Redes sociales</h3>
        
        <div class="box">
            <div class="list">
                <div class="imgBox">
                    <img src="{{ URL::asset('./img/mifoto2.webp')}}">
                </div> 
                <div class="content">
                    <h2 class="rank"><small>#</small>1</h2>
                    <h4>Miguel Ledesma</h4>
                    <p>Web developer</p>
                </div>
                            
            </div>
            <div class="list">
                <div class="imgBox">
                    <img src="{{ URL::asset('./img/mifoto2.webp')}}">
                </div>
                <div class="content">
                    <h2 class="rank"><small>#</small>2</h2>
                    <h4>Fpv En Jaén</h4>
                    <p>Piloto de Dron</p>                
                </div>                
            </div>
            <div class="list">
                <div class="imgBox">
                    <img src="{{ URL::asset('./img/mifoto2.webp')}}">
                </div>
                <div class="content">
                    <h2 class="rank"><small>#</small>3</h2>
                    <h4>Miguel Ledesma</h4>
                    <p>Web developer</p>
                </div>            
            </div>

            <div class="list">
                <div class="imgBox">
                    <img src="{{ URL::asset('./img/mifoto2.webp')}}">
                </div>
                <div class="content">
                    <h2 class="rank"><small>#</small>4</h2>
                    <h4>FPV En Jaén</h4>
                    <p>Piloto de dron</p>
                </div>                            
            </div>

            <div class="list">
                <div class="imgBox">
                    <img src="{{ URL::asset('./img/mifoto2.webp')}}">
                </div>
                <div class="content">
                    <h2 class="rank"><small>#</small>5</h2>
                    <h4>Miguel Ledesma</h4>
                    <p>Web developer</p>
                </div>            
            </div>
        </div>

    </div>
    
</body>
</html>