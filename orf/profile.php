<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title style="text-transform:capitalize;">WELCOME AGAIN, <?php session_start();
                                                            echo $_SESSION['log_name'] ?></title>
  <link rel="stylesheet" href="css/profile.css">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="css/services.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- <link rel="stylesheet" href="css/index.css"> -->

  <link rel="stylesheet" href="css/lock.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index1.php">Online Room Finder &nbsp; </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index1.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about1.php">About</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link " href="Services1.php" id="navbarDropdown">
            Services
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact1.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="RoomsInformation.php">Create ads for room</a>
        </li>


      </ul>

      <div class="mx-2">



        <span>
          <h2 class="text-danger text-capitalize">welcome,<a class="text-decoration-none" href="profile.php"><?php

                                                                                                              echo $_SESSION['log_name'] ?></a></h2>
          <a href="logout.php">LOGOUT</a>
        </span>

      </div>
    </div>
  </nav>
  <section class="section about-section gray-bg" id="about">

    <div class="container gray-bg">

      <div class="center align-items-center flex-row-reverse">
        <h3 class="col-lg-9 dark-color">House Owner Profile</h3>
        <div class="col-lg-9">
        <?php
          echo "<div class='col-lg-6'>";
           echo "<div class='about-avatar'>";

            echo "<img src='https://bootdey.com/img/Content/avatar/avatar7.png'><br><br>";
            // echo   "<a class='m-2 text-decoration-none text-danger btn btn-dark' href='photo.php'>Edit Profile Image</a>";
           echo "</div>";
          echo "</div>";
          echo "<br><br>";

          echo "<div class='about-text go-to'>";


           echo "</h6>";
           echo "<h2 class='text-capitalize col-9'>";
              
              // $name = "$_SESSION[log_name]";
              include "conn.php";
              $status = "SELECT * FROM `loginuser` where name = '$_SESSION[log_name]'";
              $result = $con->query($status);
              while ($row = $result->fetch_object()) {
                $email = $row->name;
                echo $email;
                break;
              }
              ?>
            </h2>


            <p>
              <?php
              // $name = "$_SESSION[log_name]";
              include "conn.php";
              $status = "SELECT * FROM `loginuser` where name = '$_SESSION[log_name]'";
              $result = $con->query($status);
              while ($row = $result->fetch_object()) {
                $email = $row->about;
                echo $email;
                break;
              }
              ?>
            </p>
            <div class="row about-list">
              <div class="col-md-6">
                <div class="media">
                  <label>Birthday</label>
                  <p><?php
                      include "conn.php";
                      $status = "SELECT * FROM `loginuser` where name = '$_SESSION[log_name]'";
                      $result = $con->query($status);
                      while ($row = $result->fetch_object()) {
                        $email = $row->birth;
                        echo $email;
                        break;
                      }
                      ?></p>
                </div>


                <div class="media">
                  <label>Address</label>
                  <p><?php
                      include "conn.php";
                      $status = "SELECT * FROM `loginuser` where name = '$_SESSION[log_name]'";
                      $result = $con->query($status);
                      while ($row = $result->fetch_object()) {
                        $email = $row->address;
                        echo $email;
                        break;
                      }
                      ?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="media">
                  <label>E-mail</label>
                  <p>
                    <?php
                   include "conn.php";
                    $status = "SELECT * FROM `loginuser` where name = '$_SESSION[log_name]'";
                    $result = $con->query($status);
                    while ($row = $result->fetch_object()) {
                      $email = $row->email;
                      echo $email;
                      break;
                    }
                    ?>
                  </p>
                </div>
                <div class="media">
                  <label>Phone</label>
                  <p><?php
                      include "conn.php";
                      $status = "SELECT * FROM `loginuser` where name = '$_SESSION[log_name]'";
                      $result = $con->query($status);
                      while ($row = $result->fetch_object()) {
                        $phon = $row->phone;
                        echo $phon;
                        break;
                      }
                      ?></p>
                </div>

                <!-- <div class="media">
                                        <label>Freelance</label>
                                        <p>Available</p>
                                    </div> -->
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
  <h1 class="text-center text-danger p-5">POSTED ROOMS ARE</h1>
  <div class="container text-center p-4">
                <?php 
                  $prof = $_SESSION['uname'];
                  include "conn.php";
                  $sl = "SELECT * FROM `houseprofile` where uname = '$prof'";
                  $rs = $con->query($sl);
                  if ($rs->num_rows > 0) {
                    while ($rw = $rs->fetch_assoc()) {
                        $pid = $rw['S_No'];
                        echo "<div class='card m-1 bg-dark text-white'>
                <div class='div'>
                    <img class='img-thumbnail rounded img-fluid p-3 w-50 m-4' id='img' src='roomPhoto/" . $rw['images'] . "' alt='not found'>
                    <p  class='div'>Furnishing >" . $rw['furnish'] . "
                    <br><br>";
                        if ($rw['Rentprice'] != null) {
                            echo "Rentprice = Rs  " . $rw['Rentprice'];
                        } else {
                            echo "Rentprice =Rs : N/a";
                        }
                        echo "<br><br>Address:";
                        echo $rw['address'];
                        echo "<br><br>Phone:";
                        echo $rw['phone'];
                        echo  "<br><br><button class='btn btn-success'><span class='front'><a class='text-decoration-none' style='color:black;' href='more2.php?S_No=$pid'>View</a></span></button></p>";
                        echo  "<button class='btn btn-success '><span class='front'><a  style='color:black;' onclick='yesno()'>DELETE THIS POST</a></span></button></p>
                        <script>
                      function yesno() {
        a = confirm('Are you sure want to delete this post?');
        if(a == 'True' || a == 'true' || a == true)
        {
          alert('deleted');
          window.location.href = 'delete.php?S_No=$pid';
        }
      }
    </script>
                        
                </div>
            </div>";
                    }
                } else {
                    echo "Didn't posted yet ? <a href='RoomsInformation.php'>Post now</a>";
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
          <li><a href="contact1.php">Contact us</a></li>
          <li><a href="Services1.php">Our Services</a></li>
          <li><a href="privacy1.php">Privacy Policy</a></li>
          <li><a href="termsCondition1.php">Terms & Conditions</a></li>
          <!-- <li><a href="#">Wanna be part of our wonderful community</a></li> -->
        </ul>
      </div>

      <div class="row ">
        || Copyright © 2022 www.onlineroomfinder.com - All rights reserved ||
      </div>
    </div>
  </footer>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>

<!-- href='delete.php?S_No=$pid' -->