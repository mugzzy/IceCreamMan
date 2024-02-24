<?php
include 'connections/connection.php';
?>
  <?php
        $success = false;
        $user = false;
        $invalid =false;
        
          if(isset($_POST['signup'])){
          $fname = $_POST['fname'];
          $lname = $_POST['lname'];   
          $address = $_POST['Dob'];
          $username = $_POST['Username'];
          $pass = $_POST['Password'];
          $conpass = $_POST['Conpassword'];

          $query = "select * from user where username = '$username';";
          $result = $conn->query($query);

          if ($result->num_rows > 0) {
              echo "User already Exist!";
              $user = true;
          }
          else{
              if($pass === $conpass){
              $sql = "insert into user (firstname,lastname,Address,Username,Password) values ('$fname','$lname','$address','$username','$pass');";
              mysqli_query($conn,$sql);
              if($result){
                  echo "Sign up successful";
                  $success = true;
              }
            }else{
                 $invalid =true;
              }

        // header("Location:signup.php?signup=success");
      
          }   
      }   
      ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Icecream</title>

    <link rel="stylesheet" href="v2.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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
                <a class="nav-link" href="home.php"> <button class="btn btn-outline-primary me-2" type="button" aria-pressed="true" >Home  </button></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="icecream.php"><button class="btn btn-outline-primary   me-2" type="button">Icecream</button></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="shopingbasket.php"> <button class="btn btn-outline-primary me-2" type="button">Shopping Basket </button></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php"><button class="btn btn-outline-primary me-2" type="button">About</button></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"   id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
     
      <div class="form-box">
      <?php   
      if($user == true){
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Warning!: </strong> User already exists!.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
      }
      if($success == true){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><i class="fa-sharp fa-regular fa-badge-check" style="color: #15e553;"></i>Note: </strong> Sign up Successful!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
      }
      if($invalid == true){
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Error: </strong>Password Do not match!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
      } 
      ?>
        <form class="form" data-aos="fade-left"  method="post">

            <span class="title" >Sign up</span>
            <span class="subtitle" >Create a free account.</span>
            <div class="form-container" >
                <input type="text" name="fname" class="fname" placeholder="First Name" required="" autocomplete = "off">            
                <input type="text" name="lname" class="lname" placeholder="Last Name" required="" autocomplete = "off">
                <input type="text" name="Dob" class="input" placeholder="Address"  required="" autocomplete = "off">
                <input type="username" name="Username" class="username" placeholder="Username"  required="" autocomplete = "off">
                <input type="password" name="Password" class="input" placeholder="Password"  required="" autocomplete = "off">
                <input type="password" name="Conpassword" class="input" placeholder="Confirm Password"  required="" autocomplete = "off">
        </div>
        <button class="signUp" name="signup">Sign up</button>
        </form>
        <div class="form-section" >
            <p>Have an account? <a href="login.php">Log in</a> </p>
        </div>
        </div>

            
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init();
</script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>