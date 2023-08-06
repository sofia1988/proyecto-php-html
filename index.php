<?php
require('mail.php');
  function validate($name, $email, $subject, $message,$form){    
    return !empty($name) && !empty($email) && !empty ($subject) && !empty($message);
  }

  
  $status ="";

if (isset($_POST["form"])) {
    if (validate(...$_POST)) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message= $_POST["message"];

        $body ="$name <$email> te envia el sigueiten mensaje : <br><br>
        $message";

        //mandar
        sendMail($subject,$body,$email,$name,true);

        $status = "alert-success";
    }else{
        $status ="alert-danger";
    }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>php-html</title>
  </head>
  <body class="bg-info">
  
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">NW</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>

<main class=" mt-5 bg-info">

    <div class="container">
  <?php if ($status =="alert-success"):?>
       <div class="alert alert-success" role="alert">
       Mensaje enviado!
     </div>
  <?php endif; ?>
  <?php if ($status =="alert-danger"):?>
          <div class="alert alert-danger" role="alert">
           Ups algo salio mal!
          </div>
          <?php endif; ?>
    </div>
     <form class=" container border p-3 shadow-lg p-3 mb-5 rounded" action="./" method="post">
        <div class="mb-3 ">
            <h2 class="text-center fs-1">Contáctanos !</h2>
          <label for="name" class="form-label">Nombre</label>
          <input type="text" class="form-control" name="name" id="name" aria-describedby="name">
     
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="email">
        </div>
        <div class="mb-3">
            <label for="subject" class="form-label">Asunto</label>
            <input type="text" class="form-control" name="subject" id="subject" aria-describedby="subject">
        </div>
        <div class="mb-4">
            <label for="message" class="form-label">Mensaje</label>
            <textarea class="form-control" name="message" id="message" rows="3"></textarea>
          </div>
       <div class="d-grid gap-2 col-2 mx-auto  mb-5">
        <button name="form" type="submit" class="btn btn-primary ">Enviar</button>
       </div>
     </form>
</main>
<footer>
<div class="text-center">
    <span >creaciones brunila - 2023</span>
</div>
</footer>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>