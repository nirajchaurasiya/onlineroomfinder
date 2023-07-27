<!DOCTYPE html>
<html lang="en"  >

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot password</title>
  <link rel="stylesheet" href="css/lock.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/services.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  @media (max-width: 721px) {
  body {
    background-color: lightgreen;
  }
  footer{
      display:none;
  }
}
  @media (min-width: 721px) {
  body {
    background-color: lightgreen;
  }
 
}
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Online Room Finder &nbsp; </a>


  </nav>
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <div class="form-group p-5">
      <label for="exampleInputEmail1">Enter your E-mail to check if it exist.</label>
      <input type="email" class="form-control w-75" name="forgotemail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
      <br>

      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
        <label class="form-check-label" for="exampleCheck1">Please check me</label>
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
  <footer>
    <div class="footer fixed-bottom">
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

</body>

</html>




<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  session_start();
  $rand = rand(10000,15000);
  
  include "conn.php";

  $email = $_REQUEST['forgotemail'];
  $sq = "SELECT * FROM `loginuser` where email = '$email'";
  $result = mysqli_query($con, $sq);
  $row = mysqli_fetch_array($result);
  $count = mysqli_num_rows($result);

  $headers = "From: nirajkumarchaurasiya6@gmail.com";

  if ($count > 0) {

    $to_mail = $email;
    $subject = "Your code is below . ";
    $body = "Your code for ONLINEROOMFINDER is  $rand";
    
    if (mail($to_mail, $subject, $body, $headers)) {
      // header("location:");
      echo "Your code had been sent to $to_mail";
      $_SESSION['rand'] = $rand;
      $_SESSION['password'] = $row['password'];
      // echo "<br>You can ";
      // echo "<a class='btn btn-dark text-decoration-none' href='login.php'>sign in</a>";
      // echo " now";
      echo "<br><br>";
      echo "if you got your code :";
      echo "Your code <a href='forgot.php'>here</a>";

      

    } 
    else 
    {
      echo "Failed try again";
    }
  } 
  else{
    echo "Account not found . Create <a href='login.php'>new</a> account";
  }
  
}
?>