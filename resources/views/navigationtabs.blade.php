<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <link rel="stylesheet" href=" {{ URL::asset('css/navigationtabs.css')}}">

  <title>Navigation Tab Glassmorphism Effect</title>
</head>
<body>
  <div class="tabs">
    <input id="home" type="radio" name="tabsMenu" checked>
    <input id="profile" type="radio" name="tabsMenu">
    <input id="likes" type="radio" name="tabsMenu">
    <input id="settings"  type="radio" name="tabsMenu">
    <input id="notifications" type="radio" name="tabsMenu">

    <div class="buttons">
      <label for="home"><i class="fa-solid fa-house"></i></label>
      <label for="profile"><i class="fa-solid fa-user"></i></label>
      <label for="likes"><i class="fa-solid fa-heart"></i></label>
      <label for="settings"><i class="fa-solid fa-gear"></i></label>
      <label for="notifications"><i class="fa-solid fa-bell"></i></label>

      <div class="underline">      
      </div>
    </div>
  </div>
  
</body>
</html>