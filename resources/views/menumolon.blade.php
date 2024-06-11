<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/menumolon.css')}}">

    <title>Menu bonito</title>

</head>
<body>
    <div class="navigation">
        <ul>
            <li class="list active">
                <a href="./">
                     <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                     <span class="text">Inicio</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                     <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                     <span class="text">Perfil</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                     <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                     <span class="text">Mensajes</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                     <span class="icon"><ion-icon name="camera-outline"></ion-icon></span>
                     <span class="text">Fotos</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                     <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                     <span class="text">Configuración</span>
                </a>
            </li>

            <div class="indicator"></div>

        </ul>

        


    </div>   


    <script src=" {{ URL::asset('js/menumolon.js')}}"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>