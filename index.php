<?php
include("./db/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Home - Tiqspace</title>
</head>

<body>
  <?php include('./nav.php'); ?>

  <header class="header">
    <div class="header-img">
      <div class="container  py-5 w-100">
        <div class="hero-text">
          <h1 class="mb-3">Event ticketing
            <em>made simple.</em>
          </h1>
          <div class="col-6 py-1 mb-3">
            <h4 class="fs-6 col-lg-10 col-xs-12 text-xs-center">Creating event and selling tickets in a very secured,
              trusted and seamless way.</h4>
          </div>
          <a href="register.php?" class="m-btn hero-btn ">Create New Account</a>
        </div>
      </div>

    </div>
  </header>

  <section class="mt-lg-5 mt-xs-2 bg-white">
    <div class="row text-center mx-auto w-100">
      <div class="div col-lg-6">
        <p class="def-text text-lg-end">
          Browse for Upcoming Events? </p>
      </div>
      <div class="col-lg-6 def-text text-lg-start">
        <a href="#" class=" m-btn btn-blkwhite ">Look for An Event</a>
      </div>
    </div>
  </section>

  <section class="boxes pt-5">
    <div class="container">
      <div class="display-4 text-center">
        <p class="text-head"> Our Main Features</p>
      </div>

      <div class="row text-center w-100 gx-md-3 gx-lg-0">
        <div class="col-lg-2 col-md-4 col-sm-12 mx-auto">
          <div class="card mt-3">
            <img src="./images/001_bells.png" class="cardImg" alt="bells">
            <div class="card-body">
              <h5 class="card-title">Notification</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-12 mx-auto">
          <div class="card mt-3">
            <img src="./images/002.png" class="cardImg" alt="...">
            <div class="card-body">
              <h5 class="card-title">Favorites</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-12 mx-auto">
          <div class="card mt-3">
            <img src="./images/messaging.png" class="cardImg" alt="...">
            <div class="card-body">
              <h5 class="card-title">Messaging</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-12 mx-auto">
          <div class="card mt-3">
            <img src="./images/speaker.png" class="cardImg" alt="...">
            <div class="card-body">
              <h5 class="card-title">Alerts</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-12 mx-auto">
          <div class="card mt-3">
            <img src="./images/005_zoom.png" class="cardImg" alt="...">
            <div class="card-body">
              <h5 class="card-title">Search</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    </div>
  </section>
  <footer class="footer-end">
    <div class="container-fluid w-90 footer-flex py-1">
      <div class="footer-left def-text-ftr">&copy; 2022 Tiqspace Web Solutions by Paul Justine Posas</div>
      <div class="footer-right def-text-ftr">
        <a href="#" class="px-2 nolink ">Subscribe for Updates!</a>
        <a href="https://www.facebook.com/realpjposas" class="i-style"><i class="fa-brands fa-facebook fa-2x"></i></a>
        <a href="https://www.instagram.com/pblsseio/" class="i-style"><i class="fa-brands fa-instagram fa-2x"></i></a>
        <a href="https://twitter.com/paulj_p" class="i-style"><i class="fa-brands fa-twitter fa-2x"></i></a>
        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=pauljustine2020@gmail.com&su=SUBJECT&body=BODY&bcc=" class="i-style"><i class="fa-solid fa-envelope fa-2x"></i></a>
      </div>
    </div>
  </footer>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>