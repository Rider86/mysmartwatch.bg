<!doctype html>
<html class="no-js" lang="">
   <head>
      <meta charset="utf-8">
      <title>mysmartwatch.bg</title>
      <meta name="description" content="Смарт часовници и смарт гривни">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="manifest" href="site.webmanifest">
      <link rel="apple-touch-icon" href="icon.png">
      <!-- Place favicon.ico in the root directory -->
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />
      <link rel="stylesheet" href="style.css">
      
   </head>
   <body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-10" id="main-nav">
                <div class="container">
                   <a href="index.html" class="navbar-brand">
                      <img src="img/logo.png" width="50" height="50" alt="logo">
                      <h3 class="d-inline align-middle">MySmartwatch</h3>
                   </a>
                   <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                   <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                           <a href="index.html" class="nav-link">НАЧАЛО</a>
                        </li>
                        <li class="nav-item">
                           <a href="products.html" class="nav-link">ПРОДУКТИ</a>
                        </li>
                        <li class="nav-item">
                           <a href="aboutus.html" class="nav-link">ЗА НАС</a>
                        </li>
                        <li class="nav-item">
                           <a href="contactus.html" class="nav-link">КОНТАКТИ</a>
                        </li>
                        <li class="nav-item">
                            <a href="account.html" class="nav-link account"><span><i class="fas fa-user"></i></span> ПРОФИЛ</a>
                            <div class="account_menu">
                                <button class="enter">ВЛЕЗ</button>
                                <button class="register">РЕГИСТРИРАЙ СЕ</button>
                            </div>
                         </li>
                     </ul>
                      <form class="form-inline mr-0 my-2 my-lg-0">
                         <input class="form-control form-control-sm mr-sm-2" type="search" placeholder="Търсене" aria-label="Търсене">
                         <button class="btn btn-sm btn-outline-light my-2 my-sm-0" type="submit">ТЪРСЕНЕ</button>
                      </form>
                   </div>
                </div>
             </nav>
            </header>
            
     
<!--FOOTER-->
<?php include 'footer.inc'; ?>


      <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
      crossorigin="anonymous"></script>
    
  
    
      <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
      <script>
         window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
         ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
      </script>
      <script src="https://www.google-analytics.com/analytics.js" async defer></script>

     <script>
       $('.more_aboutus').on ('click', function(){
              $('.hide_p').replaceWith('<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, fuga eaque. Amet, assumenda aliquid tempore dolorum error eveniet doloribus sed repellat quod, dolores fuga ipsam soluta. Aliquam accusantium pariatur aut sint deleniti laborum ducimus voluptatem? Architecto cumque quod suscipit officiis soluta, voluptate dicta blanditiis similique praesentium temporibus adipisci debitis labore! <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, fuga eaque. Amet, assumenda aliquid tempore dolorum error eveniet doloribus sed repellat quod, dolores fuga ipsam soluta. Aliquam accusantium pariatur aut sint deleniti laborum ducimus voluptatem? Architecto cumque quod suscipit officiis soluta, voluptate dicta blanditiis similique praesentium temporibus adipisci debitis labore!</p>');
       });
     </script>
     <script src="main.js"> </script>
   </body>
  
  
</html>