<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Welcome to iCoder. A blog for coding enthusiasts">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/services.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/lock.css">
  <title>Online Room Finders</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Online Room Finder &nbsp; </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./about.php">About</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link " href="Services.php" id="navbarDropdown">
            Services
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>


      </ul>

      <div class="mx-2">
        <button class="btn btn-danger " data-toggle="modal">
          <a class="text-decoration-none text-dark" href="login.php">Login</a>
        </button>
        <button class="btn btn-success" data-toggle="modal">
          <a class="text-decoration-none text-dark" href="login.php">Register</a>
        </button>
      </div>
    </div>
  </nav>

  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/1.jpg" class="w-100 h-auto" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>Online Room Finder</h2>
          <p>Nepal's no 1 website for room finding</p>
          <button class="btn btn-danger"><a class="text-decoration-none text-dark" href="login.php">Get Started</a></button>
          <button class="btn btn-primary btn-dark"><a class="text-decoration-none" class="text-decoration-none" href="contact.php">Subscribe</a></button>
        </div>
      </div>
      <div class="carousel-item">
        <img style="height:100% ;" src="images/2.jpg" class="d-inline-block w-100 h-50" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>100% Genuine Website </h2>
          <p>Nepal's no 1 website for room finding</p>
          <button class="btn btn-dark"><a class="text-decoration-none" href="login.php">Get Started</a></button>
          <button class="btn btn-primary btn-dark"><a class="text-decoration-none text-danger" href="contact.php">Subscribe</a></button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/3.jpg" class="d-inline-block w-100 h-50" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2></h2>
          <p class="text-dark">Nepal's no 1 website for room finding</p>
          <button class="btn btn-dark "><a class="text-decoration-none" href="login.php">Get Started</a></button>
          <button class="btn btn-success "><a class="text-decoration-none text-dark" href="contact.php">Subscribe</a></button>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <br><br>
  <h3 class="text-primary">Want to search by Address:</h3>
  <div class="">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      <input placeholder="Enter any place..." style="border-radius:4px ;height:40px;" class="form w-50" type="text" name="search" id="search" required>
      <input class="btn btn-success " type="submit" value="search">
    </form>
    <div class="bg-dark m-4">
      <br><br>
      <?php
      if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $search = $_REQUEST['search'];
        echo "<h2 class='text-danger'>Search for $search are</h2><br><br>";
        include "conn.php";
        $sql = "SELECT * FROM `houseprofile` where address = '$search'";
        $result = mysqli_query($con, $sql);
        $num = mysqli_num_rows($result);
        if ($num > 0) {
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              $pi = $row['S_No'];
              echo "<div class='mid-container'>
        <div class='div'>
            <img id='img' src='roomPhoto/" . $row['images'] . "' alt='not found'>
            <p  class='div'>Furnishing >" . $row['furnish'] . "
            <br><br>";
              if ($row['Rentprice'] != null) {
                echo "Rentprice = Rs  " . $row['Rentprice'];
              } else {
                echo "Rentprice =Rs : N/a";
              }
              echo "<br><br>Address:";
              echo $row['address'];
              echo "<br><br>Phone:";
              echo $row['phone'];
              echo  "<br><br><button class='pushable'><span class='front'><a style='color:black;' href='Services.php?S_No = $pi'>View</a></span></button></p>
        </div>
    </div>";
            }
          }
        } else {
          echo "<p class='p-4 text-primary'>No result !! Try searching with different address</p>";
        }
      }

      ?>
    </div>
  </div>

  <div>
    <h1 class="p-5 ">
      Available Room are below:
    </h1>
  </div>
  <div class='container m-4'>
    <?php
    include "conn.php";
    $sql = "SELECT * FROM `houseprofile`";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
      while ($rows = $result->fetch_assoc()) {
        $p = $rows['S_No'];
        echo "<div style='margin:2px;' class='mid-container '>
        <div class='div'>
            <img id='img' src='roomPhoto/" . $rows['images'] . "' alt='not found'>
            <p  class='div'>Furnishing >" . $rows['furnish'] . "
            <br><br>";
        if ($rows['Rentprice'] != null) {
          echo "Rentprice = Rs  " . $rows['Rentprice'];
        } else {
          echo "Rentprice =Rs : N/a";
        }
        echo "<br><br>Address:";
        echo $rows['address'];
        echo "<br><br>Phone:";
        echo $rows['phone'];
        echo  "<br><br><button class='pushable'><span class='front'><a style='color:black;' href='more.php?S_No=$p'>View</a></span></button></p>
        </div>
    </div>";
      }
    } else {
      echo "No result!!";
    }
    ?>

  </div>


  <footer>
    <div class="footer">
      <div class="column">
        <a class="linkok" href="https://www.facebook.com/profile.php?id=100078933752322"><i class="fa fa-facebook"></i></a>
        <a class="linkok" href="https://www.linkedin.com/in/niraj-chaurasiya-094469213/"><i class="fa fa-linkedin"></i></a>
        <a class="linkok" href="https://github.com/nirajkumar1234"><i class="fa fa-github"></i></a>
        <a class="linkok" href="https://t.me/littlelonmusk"><i class="fa fa-telegram"></i></a>
      </div>

      <div class="row">
        <ul class="">
          <li><a href="contact.php">Contact us</a></li>
          <li><a href="Services.php">Our Services</a></li>
          <li><a href="privacy.php">Privacy Policy</a></li>
          <li><a href="termsCondition.php">Terms & Conditions</a></li>
        </ul>
      </div>

      <div class="row justify-content-center">
        || Copyright © 2022 www.onlineroomfinder.com - All rights reserved ||
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>