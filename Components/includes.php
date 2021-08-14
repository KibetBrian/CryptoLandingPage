<?php 

$header = <<<EOD
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>How to Buy | tryxCoin</title>
<link rel="stylesheet" href="/Styling/howtobuy.css">
  <!--Bootstrap CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!--Bootstrap CDN-->
  <!--Font Awsome Icon CDN-->
  <script src="https://kit.fontawesome.com/72d1145f74.js" crossorigin="anonymous"></script>  
  <!--Font Awsome Icon CDN-->
  <!--jquerry CDN-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--jquerry CDN-->
<!--Chart JS CDN-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.4.1/chart.min.js" integrity="sha512-5vwN8yor2fFT9pgPS9p9R7AszYaNn0LkQElTXIsZFCL7ucT8zDCAqlQXDdaqgA1mZP47hdvztBMsIoFxq/FyyQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--Chart JS CDN-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://use.typekit.net/agx2uej.css">
 <link rel="stylesheet" href="./howtobuy.css">
 <link rel="stylesheet" href="./whitepaper.css">
 <link rel="stylesheet" href="./animation.css">
EOD;

$navbar = <<<EOD
<nav class="navbar landing-page-navbar navbar-expand-lg" id="navbar">
<div class="container">
  <a class="navbar-brand ml-3" href="./index.php">tr<small>3</small>x<span class="logo">.Coin</span></a>
  <button class="navbar-toggler collapsed mb-2" id="navbartoggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="toggler-icon top-bar"><i class="fas fa-bars"></i></span>
  </button>
  <div class="collapse navbar-collapse mr-2" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto mr-5">
      <a class="nav-link active mr-4"id="nav-link" style="color: #3c6dff;" aria-current="page" href="./index.php">Home</a>
      <a class="nav-link  mr-3 " id="nav-about"  href="./Components/whitepaper.php">White Paper</a>
      <a class="nav-link  mr-3 "id="nav-services"  href="./Components/howtobuy.php">How to Buy</a>
    </div>
  </div>
</div>
</nav>
EOD;
?>
