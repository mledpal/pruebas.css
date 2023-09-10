<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ URL::asset('/css/glassmorphism.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Glassmorphism Card Hover Effect</title>
</head>
<body>
  <div class="container">
    <div class="glass" style="--r:-25;" data-text="Start"> 
      <a href="/"><i class="fa-solid fa-house"></i></a>
    </div>
    <div class="glass" style="--r:-15;" data-text="Design"> 
      <i class="fa-solid fa-pen-nib"></i>
    </div>
    <div class="glass" style="--r:5;" data-text="Code">      
      <i class="fa-solid fa-code"></i>
    </div>
    <div class="glass" style="--r:25;" data-text="Launch">      
      <i class="fa-solid fa-rocket"></i>
    </div>
    <div class="glass" style="--r:-15;" data-text="Earn">  
      <i class="fa-solid fa-money-bill-1-wave"></i>    
    </div>
  </div>  
  
</body>
</html>