<?php
include_once ('connections/connection.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Icecream</title>
    <link rel="stylesheet" href="v2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body class="b1">




      <nav class="navbar fixed-top navbar-expand-lg ">
        <div class="container-fluid">
          <a class="navbar-brand" href="home.php"><img src="image/logo1 (2).png" style="width:140px; height:40px;"></a>
          <button class="navbar-toggler bg-light p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="home.php"> <button class="btn btn-outline-primary  me-2" type="button" aria-pressed="true" >Home  </button></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="icecream.php"><button class="btn btn-outline-primary   me-2" type="button">Icecream</button></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="shopingbasket.php"> <button class="btn btn-outline-primary active me-2" type="button">Shopping Basket </button></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php"><button class="btn btn-outline-primary me-2" type="button">About</button></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa-solid fa-user fa-2x" style="color: #084ae2;"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  
                  <li><a class="dropdown-item" href="signup.php">SignUp <i class="fa-solid fa-user-plus" style="color: #0957dc;"></i></a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="login.php">Login <i class="fa-solid fa-right-to-bracket" style="color: #0957dc;"></i></a></li>
                </ul>
              </li>
             
          </div>
        </div>
      </nav>
      

<br><br><br>

<h1 class="shoppingbasket">
 <i class="fa-solid fa-cart-shopping" style="color: #0955d7;"></i>  Check out it all!!
</h1>
<div class="container   text-center">
  <div class="row">
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="image/rocky.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Rocky-Road Icecream <br> $2.55</h5>
          <input type="number" name="num" id="num" class="quantity">
          <br>
          <a href="#" class="btn btn-primary">Check Out</a>
          <a href="#" class="btn btn-danger">Remove</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="image/pudding.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Pudding Coned Icecream <br> $8</h5>
          <input type="number" name="num" id="num" class="quantity">
          <br>
          <a href="#" class="btn btn-primary">Check Out</a>
          <a href="#" class="btn btn-danger">Remove</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="image/gelato.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Gelato Freezing Icecream <br> $3.45</h5>
          <label for="num">Quantity:</label>
          <input type="number" name="num" id="num" class="quantity">
          <br>
          <a href="#" class="btn btn-primary">Check Out</a>
          <a href="#" class="btn btn-danger">Remove</a>
        </div>
      </div>
    </div>
  </div>
  </div>






      


<br><br><br><br>



<?php

  include_once('header-footer/footer.php')

?>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>