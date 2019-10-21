<?php
// Messages

$msg = '';
$msgClass = '';
//session_start();
//$_SESSION['message'] = "Hello"

if (filter_has_var(INPUT_POST, 'submit')){

  

  $name = htmlspecialchars ($_POST['name']);
  $email = htmlspecialchars ($_POST['email']);
  $number = htmlspecialchars ($_POST['number']);
  $message = htmlspecialchars ($_POST['message']);
  $surname = htmlspecialchars ($_POST['surname']);

  // Check requered fields

  if(!empty($email) && !empty($name) && !empty($number) && !empty($message) && !empty($surname)){
        if (filter_var($email, FILTER_VALIDATE_EMAIL) ===false){
          $msg = 'Моля, попълнете валиден имейл адрес!';
          $msgClass = 'alert-danger';
        }else{
              $toEmail = "teleaksesoar@gmail.com";
              $subject = "НОВО ЗАПИТВАНЕ"; 
              $body = " <h4>Име</h4><p>$name . $surname</p>
                        <h4>Имейл</h4><p>$email</p>
                        <h4>Телефон</h4><p>$number</p>
                        <h4>Съобщение</h4><p>$message</p>
                      
              
              ";   

              $headers = "MIME-VERSION: 1.0" . "\r\n";
              $headers .= "Content-Type:text/html;charset=UTF-8". "\r\n";
              $headers .= "From: " .$name. "<" .$email.">"."\r\n";

              if(mail ($toEmail,  $subject, $body, $headers )) {
                $msg = 'Съобщението е изпратено успешно!';
                $msgClass = 'alert-success';
              }else {
                $msg = 'Съобщението не е изпратено!';
                $msgClass = 'alert-danger';

              }
        }
  
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
                            <h1 class="text-white">СВЪРЖЕТЕ СЕ С НАС</h1>
                            <p class="text-white">Имате въпрос? Не се колебайте да ни попитате!</p>
    
                        </div>
                    </div>
           
            </section>
      </header>
      <main>
            <section id="contact" class="py-3">
              <form method = "post" action="contactus.php">  
            <div class="container">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="card p-4">
                          <div class="card-body">
                            <h4>За контакти:</h4>
                          
                            <h4><span><i class="fas fa-map-marker-alt"></i></span> Адрес</h4>
                            <p>гр. София</p>
                            <h4><span><i class="fas fa-at"></i></span> Email</h4>
                            <p> office@mysite.com</p>
                            <h4><span><i class="fas fa-phone"></i></span> Телефон</h4>
                            <p>0889813040</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="card p-4">
                          <div class="card-body">
                            <h3 class="text-center">Моля, попълнете следните детайли, за да се свържете с нас!</h3>
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
                                  <input type="text" class="form-control name" name = "name" placeholder="Име" value = "<?php echo isset ($_POST['name']) ? $name : '' ?>">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <input type="text" class="form-control surname" name = "surname" placeholder="Фамилия" value = "<?php echo isset ($_POST['surname']) ? $surname : '' ?>">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <input type="email" class="form-control email" name = "email" placeholder="Имейл">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                   
                                  <input type="tel" class="form-control number" name = "number" placeholder="Телефонен номер" value = "<?php echo isset ($_POST['number']) ? $number : '' ?>">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <textarea class="form-control message" name = "message" placeholder="Съобщение" ><?php echo isset ($_POST['message']) ? $message : '' ?></textarea>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <input type="submit" name= "submit" value="ИЗПРАТИ" class="btn btn-outline-danger btn-block mybtn">
                                </div>
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
      <script>  /*
         
      const mybtn = document.querySelector('.mybtn');
      const name = document.querySelector('.name');
      const surname = document.querySelector('.surname');
      const email = document.querySelector('.email');
      const message = document.querySelector('.message');
      const number = document.querySelector('.number');

      mybtn.addEventListener ('click', function(e){
          e.preventDefault();
          if(name.value === "" || surname.value === "" || email.value === "" || message.value === "" || number.value === "")
            document.querySelector('.alert').classList.add('show');
           else if(name.value !== "" || surname.value !== "" || email.value !== "" || message.value !== "" || number.value === "")
            document.querySelector('.alert').classList.remove('show');
          
      }); *\

      
      
      </script>
      <script src="main.js"> </script>

     
   </body>
  
  
</html>