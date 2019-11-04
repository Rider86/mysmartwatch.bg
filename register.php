
<?php

require_once './Classes/sendMail.php';
require_once './Classes/boot.php';

      $msg = '';
      $msgClass = '';
//session_start();
//$_SESSION['message'] = "Hello"

if (isset($_POST['submit'])){
global $connection;
  $name = $_POST['name'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $address = $_POST['address'];
  $surname = $_POST['surname'];

  


$connection = mysqli_connect ('localhost', 'root', '', 'login');

   $hashFormat ="$2y$10$";
   $salt = "iusesomecrazystrings22";
   $hashFormat_and_salt = $hashFormat . $salt;

   $password = crypt($password,$hashFormat_and_salt);
   

   $query = "INSERT INTO users(name, password, email, number, address, surname) ";    
   $query .= "VALUES ('$name', '$password', '$email', '$number', '$address', '$surname')";

   $result = mysqli_query($connection, $query);

   if(!empty($email) && !empty($name) && !empty($number) && !empty($password) && !empty($surname) && !empty($address)){
              
    $to = "deian_ivanov@abv.bg";
$subject = "Регистрация на нов профил";

$message = "
<html>
<head>
<title>Нов профил</title>
</head>
<body>

<table>
<tr>
<th>Username: $name . $surname </th> <br>
<th>Password:***********</th>
</tr>

</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <deian_ivanov@abv.bg>' . "\r\n";


$sendMail = mail($to,$subject,$message,$headers);
    
 
    
    
    
                $msg = 'Вашият профил беше създаден';
                $msgClass = 'alert-success';
                
                
   }else {
      
      $msg = 'Моля, попълнете всички полета!';
      $msgClass = 'alert-danger';
      
   }
 
   

   //$name = "SomeName";
   //$value = 100;
   //$expiration = time() + (60*60*24*7);

   //setcookie($name,$value,$expiration);
}




?>



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
   <?php include 'header.inc'; ?>
            <section>
             
                    <div class="row">
                        <div class="image_contact col m-auto text-center">
                            <h1 class="text-white">СЪЗДАВАНЕ НА ПРОФИЛ</h1>
                            
                        </div>
                    </div>
           
            </section>
      </header>
      <main>
            <section id="contact" class="py-3">
            <form action="register.php" method="post">
                  <div class="container">
                      <div class="col-md-8">
                        <div class="card p-4">
                          <div class="card-body">
                            <h3 class="text-center">Моля, попълнете следните детайли:</h3>
                            <hr>
                                    <?php if($msg != ''): ?>

                                                
                                          <div class="alert <?php echo $msgClass; ?> "><?php echo $msg; ?>  

                                          </div>
                                    <?php endif; ?>
                              </button>
                            </div>
                
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <input type="text" name="name" class="form-control name" placeholder="Име">
                                </div>
                              </div>
                          
                              <div class="col-md-6">
                                <div class="form-group">
                                  <input type="text" name="surname" class="form-control surname" placeholder="Фамилия">
                                </div>
                              </div>
                              <div class="row">
                                    <div class="col-md-12">
                                      <div class="form-group">
                                              <input type="password" name="password" class="form-control address" placeholder="Парола">
                                      </div>
                                    </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <input type="email" name="email" class="form-control email" placeholder="Имейл">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                   
                                  <input type="tel" name="number" class="form-control number" placeholder="Телефонен номер">
                                </div>
                              </div>
                            </div>
                          
                              <div class="col-md-12">
                                <div class="form-group">
                                        <input type="text" name="address" class="form-control address" placeholder="Адрес">
                                </div>
                              </div>
                              <div class="col-md-12 ">
                                <div class="form-group ">
                                  <input type="submit" name="submit" value="РЕГИСТРАЦИЯ" class="btn btn-outline-danger btn-block mybtn">
                                </div>
                        
                              </div>
                            </div>
                           
                          </div>
                        </div>
                      </div>
                    </div>
                    </form>
                </section>
 
      </main>

      <?php include 'footer.inc'; ?>


      <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
      crossorigin="anonymous"></script>
      <script src="main.js"> </script>

    
  
  
      <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
      <script>
         window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
         ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
      </script>
      <script src="https://www.google-analytics.com/analytics.js" async defer></script>
     <script>
         
      // const mybtn = document.querySelector('.mybtn');
      // const name = document.querySelector('.name');
      // const surname = document.querySelector('.surname');
      // const email = document.querySelector('.email');
      // const address = document.querySelector('.address');
      // const number = document.querySelector('.number');

      // mybtn.addEventListener ('click', function(e){
      //     e.preventDefault();
      //     if(name.value === "" || surname.value === "" || email.value === "" || address.value === "" || number.value === "")
      //       document.querySelector('.alert').classList.add('show');
      //      else if(name.value !== "" || surname.value !== "" || email.value !== "" || address.value !== "" || number.value === "")
      //       document.querySelector('.alert').classList.remove('show');
          
      // });

      
      
      </script>

     
   </body>
  

  
</html>
