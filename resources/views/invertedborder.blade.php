<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{URL::asset('css/invertedborder.css')}}">
    <title>Inverted border radius card</title>
</head>
<body>

    <div class="card">
        <div class="box">
            <div class="imgBox">
                <video src ="{{ URL::asset('video/miedos.mp4')}}" type="video/mp4" autoplay loop muted></video>
            </div>
        </div>
        
        <div class="box">
            <div class="content">
                <h2>Miguel Ledesma<br><span>FPV drone pilot</span></h2>
                <ul>
                    <li>Posts<span>320</span></li>
                    <li>Followers<span>598</span></li>
                    <li>Following<span>291</span></li>                    
                </ul>
                <button>Follow</button>

            </div>
        </div>


        <div class="circle">
            <div class="imgBox">
                <img src="{{ URL::asset('img/mifoto.webp')}}" alt="Foto de Miguel Ledesma" width="500px" height="300px">               
            </div>
        </div>
    </div>


</body>
</html>

