
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
                  <a class="nav-link" href="home.php"> <button class="btn btn-outline-primary me-2" type="button" aria-pressed="true" >Home  </button></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="icecream.php"><button class="btn btn-outline-primary  active me-2" type="button">Icecream</button></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="shopingbasket.php"> <button class="btn btn-outline-primary me-2" type="button">Shopping Basket </button></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"><button class="btn btn-outline-primary me-2" type="button">About</button></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#"  id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
    

        <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="image/1.png" class="d-block w-100 " alt="...">
            </div>
            <div class="carousel-item">
              <img src="image/2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="image/3.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="image/4.png" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <br>



          

        <section class="search search-expand-lg" >
      <div class="container">
          <div class="row">
              <div class="col-6 flex-end">
              <form class="d-flex" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <input class="form-control me-2" type="search" placeholder="Search product name here" aria-label="Search"
                  id="searchInput" name="searchInput" autocomplete="off" value="<?php echo isset($_POST['searchInput']) ? $_POST['searchInput'] : ''; ?>">
                  <button class="btn btn-outline-primary" type="submit" 
                  id="search-button" name="search-button">Search</button>
              </form>
              </div>
          </div>
      </div>

      <div class="container">
          <div class="row">
              <?php
              require_once('connections/pdo.php');

              $search_result_set = array(); // initialize an empty array to hold the search results

              if (isset($_POST['search-button']) && !empty($_POST['searchInput'])) {
                  $term = $_POST['searchInput'];
      
                  $stmt = $conn->prepare("SELECT * FROM product WHERE product_name LIKE :searchInput
                  ORDER BY product_name");
                  $stmt->execute(['searchInput' => '%' . $term . '%']);
                  $search_result_set = $stmt->fetchAll(PDO::FETCH_ASSOC);
      
                  if (count($search_result_set) == 0) {
                      echo '<h4>No results found for your search term "' . $term . '"</h4>';
                  } else {
                      // display search results
                  }
              } else {
                  $stmt = $conn->prepare("SELECT * FROM product ORDER BY product_name");
                  $stmt->execute();
                  $search_result_set = $stmt->fetchAll(PDO::FETCH_ASSOC);
              }
              ?>
          </div>
      </div>
  </section>
  <br><br>
  <div class="container text-center">
          <div class="row">
      <?php foreach ($search_result_set as $row) { ?>
            <div class="col">
              <div class="card" style="width: 18rem;">
              <img src='data:image/jpeg;base64,<?php echo base64_encode($row['product_image']) ?>' class="card-img-top" alt="image">
                <div class="card-body">
                <h5 class="card-title"><?php echo $row['product_name'] ?><br>Price: $<?php echo $row['price'] ?></h5>
              <p class="card-text"><?php echo $row['product_desc'] ?></p>
                <label for="num">Qty:</label>
                <input type="number" name="num" id="num" class="quantity"> 
                  <a href="#" class="btn btn-primary">Add to Chart</a>

                </div>
              </div>
              <br>
            </div>
            <?php } ?>
          </div>
        </div>  ;
    


  
<?php

include_once('header-footer/footer.php')

?>





        






        
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    </body>
  </html>