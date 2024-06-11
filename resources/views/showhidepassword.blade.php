<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{URL::asset('css/showhidepassword.css')}}">
    <title>Show Hide Password</title>
</head>
<body>

    <div class="inputBox">
        <input type="password" id="password" required>
        <span>Password</span>
        <div id="toggle"></div>
    </div>


    <script src="{{ URL::asset('js/showhidepassword.js')}}"></script>
</body>
</html>

