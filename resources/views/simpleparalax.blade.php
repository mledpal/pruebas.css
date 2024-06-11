<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{ URL::asset('css/simpleparalax.css')}}">
    <title>Simple Paralax</title>
</head>
<body>
    <header>
        <a href="#" class="logo">Logo</a>

        <ul class="navigation">
            <li><a href="/" class="menu active">Home</a></li>
            <li><a href="#" class="menu">About</a></li>
            <li><a href="#" class="menu">Events</a></li>
            <li><a href="#" class="menu">Contact</a></li>
        </ul>

    </header>

    <section class="parallax">
        <h2 id="text">Parallax Website</h2>
        <img src="{{ URL::asset('img/simpleparalax/mountain_01.png')}}" id="m1">
        <img src="{{ URL::asset('img/simpleparalax/trees_02.png')}}" id="t2">
        <img src="{{ URL::asset('img/simpleparalax/mountain_02.png')}}" id="m2">
        <img src="{{ URL::asset('img/simpleparalax/trees_01.png')}}" id="t1">
        <img src="{{ URL::asset('img/simpleparalax/man.png')}}" id="man">
        <img src="{{ URL::asset('img/simpleparalax/plants.png')}}" id="plants">
    </section>
    
    <section class="sec">
        <h2>Parallax Scrolling Website</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, perspiciatis aliquid libero quas voluptates eveniet, nihil consequatur iste voluptate quod impedit magnam vitae illum voluptatem molestias culpa autem quo ad eum sequi nemo dicta error ea? Fugiat ab ea ipsa esse quia totam aspernatur doloremque dolores fuga, iure cupiditate, officiis eius soluta excepturi labore tempora rerum veritatis odit expedita error eaque et aut? Voluptatum alias ea cupiditate necessitatibus velit? Quam est iure, commodi dicta ea a sequi magni pariatur consequatur nam, atque facere, eos voluptates quae rerum soluta tenetur recusandae culpa maxime eaque minus in tempora corrupti. Corporis, iusto! Quia laudantium sed rerum cumque sapiente consectetur eaque accusamus accusantium pariatur. Quibusdam repellendus rerum aspernatur perspiciatis porro iste tenetur? Magnam, atque facilis inventore sed autem natus. Fuga dignissimos recusandae blanditiis quia architecto expedita pariatur esse error doloremque delectus. <br><br>Enim, asperiores molestiae velit ea ratione repellendus eum odio fuga numquam voluptate iure animi dolor nemo corporis quam, ad eos sed temporibus. Rem, similique odit expedita a quo distinctio quisquam recusandae provident doloribus animi autem dolores, quasi excepturi sit alias repudiandae, voluptatem cupiditate sapiente pariatur hic impedit nulla! Totam doloremque velit commodi! Ea voluptatum voluptas dicta dignissimos neque quo dolorum ipsa architecto quod nobis, suscipit explicabo doloremque pariatur quas doloribus illum consectetur quos sunt distinctio et! Ullam, praesentium atque! At, consequatur eius, enim pariatur commodi nobis maiores ea quos sunt iste voluptates voluptate! Laudantium quidem minima odio odit illo vitae aspernatur vel deleniti amet magni quibusdam ipsum ab exercitationem, perferendis eaque?<br><br> Excepturi recusandae placeat accusantium, nesciunt dignissimos iure architecto doloremque tenetur in magnam commodi sint. Nostrum sequi deserunt praesentium provident odit distinctio recusandae repudiandae natus quibusdam eius, rem, quisquam dolorum id quaerat qui quasi corrupti alias, explicabo vel? Molestias dolore officiis voluptatibus esse repellendus mollitia ipsam qui sunt odio in, alias voluptatum, ipsa quod explicabo rem nisi voluptate unde deleniti officia, amet sapiente id? Non, dignissimos dolores eius beatae veritatis, distinctio quidem molestias voluptatem adipisci suscipit impedit? Exercitationem consequuntur, quam illo asperiores fugit id? Amet autem, sequi tenetur vitae dolor debitis nisi incidunt ipsam neque laborum cumque, distinctio reprehenderit et quae repellendus aperiam ex! Eius odit hic voluptatem minima cumque. Sapiente saepe vitae laudantium voluptatem dignissimos aspernatur, quos nisi qui illum modi quaerat officiis explicabo maxime assumenda tempora dolorum fuga deserunt alias quod molestiae eveniet nobis molestias odit eius. <br><br>Vel tenetur voluptas fugiat dignissimos repellendus totam in, ducimus nemo facilis ipsa quae eum itaque nihil, reprehenderit necessitatibus accusantium eaque perferendis accusamus non. Dignissimos possimus magni facere sunt nam, repudiandae maiores ea voluptate necessitatibus sit accusantium dolor hic quaerat odio, fuga repellat facilis assumenda nesciunt delectus iste consequatur! Saepe, quod ipsa? Vitae, incidunt! Aliquam sequi quaerat quas architecto est ab aspernatur nobis consectetur quibusdam ut? Nostrum minus inventore animi voluptate ipsum distinctio atque dignissimos nam qui asperiores minima, alias aliquid modi dolorem quibusdam repellat necessitatibus illum exercitationem at consequatur quo? Esse ex pariatur in molestiae dolor incidunt ipsum quisquam cum reiciendis. Atque, totam cumque fuga ducimus esse quisquam et, sequi facere quos beatae impedit.</p>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>
    <script src="{{ URL::asset('js/simpleparallax.js')}}"></script>
</body>
</html>