<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="css/lock.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand p-4 text-danger" href="index.php">Online Room Finder &nbsp; </a>


    </nav>
    <div class="container p-5 " style="height: 1070px;">
        <div class="login-box ">
            <div class="rows">
                <div class="col-md-5 w-75 login-left p-4 m-4 card bg-info">
                    <h2>Login Here</h2>
                    <form action="signin.php" method="post">
                        <div class="form-group">

                            <label for="email">User Name</label>
                            <div>
                                <input type="text" name="logname" id="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Username">Password</label>
                            <input type="password" name="logpassword" class="form-control" required>


                        </div><br>
                        <button type="submit" class="btn btn-primary">Login</button>

                        <a class="text-decoration-none" href="forgotpassword.php"><button type="button" class="btn btn-dark "> Forgot password </button></a>
                    </form>
                


                </div>


                <div class="col-md-6 login-right m-4 p-4 card w-75 bg-info">
                    <h2>Register Here</h2>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="form-group">
                            <div class="form-group ">
                                <label for="Username">Username</label>
                                <input type="text" name="Regisname" class="form-control" required>



                                <label for="Username">Address</label>
                                <input type="text" name="Regisadd" class="form-control" required>



                                <label for="email">Email</label>
                                <input type="email" name="Regisemail" class="form-control" required>



                                <label for="email">Describe about yourself</label>
                                <div>
                                    <input type="text" name="about" class="form-control" required>
                                </div>
                                <label for="email">Birthday</label>
                                <div>
                                    <input type="date" name="birth" class="form-control" required>
                                </div>


                                <label for="Phone">Phone Number</label>
                                <input type="number" name="Regisphone" class="form-control" required>




                                <label for="Password">Password</label>
                                <input type="password" name="Regispassword" class="form-control pass" required>

                                <br>

                                <button type="submit" class="btn btn-danger btn-primary">Register</button>
                    </form>
                </div>


                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    include "conn.php";

                    $name = $_REQUEST['Regisname'];
                    $email = $_REQUEST['Regisemail'];
                    $phone = $_REQUEST['Regisphone'];
                    $about = $_REQUEST['about'];
                    $birth = $_REQUEST['birth'];
                    $add = $_REQUEST['Regisadd'];
                    $pass = $_REQUEST['Regispassword'];
                    $sq = "SELECT * FROM `loginuser` where name = '$name'";
                    $sq1 = "SELECT * FROM `loginuser` where email = '$email'";
                    $result = mysqli_query($con, $sq) or die("Cannot fired");
                    $ress = mysqli_query($con, $sq1);
                    if (mysqli_num_rows($ress)) {
                        echo "Email has been already used";
                    } else if (mysqli_num_rows($result)) {
                        // header("location:login.php");
                        echo "Username is unavailbale.";
                    } else if (strlen($pass) < 5) {
                        echo "Password must be of 5 character long.";
                    } else {

                        $result = "INSERT INTO `loginuser` (`S_No`, `name`,`birth`, `email`, `phone`, `password`,`about`,`address`) VALUES (NULL, '$name', '$birth','$email', '$phone', '$pass','$about','$add');";
                        $sql = mysqli_query($con, $result);
                        echo "New record recorded successfully You can sign in now";
                    }
                }
                ?>
            </div>
        </div>
    </div>
    </div>

    <footer>
        <div  style="margin-top: 180px;margin-bottom:0px; width:fit-content;" class="footer w-100">
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
                    <!-- <li><a href="#">Wanna be part of our wonderful community</a></li> -->
                </ul>
            </div>

            <div class="row ">
                || Copyright © 2022 www.onlineroomfinder.com - All rights reserved ||
            </div>
        </div>
    </footer>
</body>
<!-- <script src="https://releases.jquery.com/git/jquery-git.js"></script>
<script>
    $(document).ready(function(){
        ('.pass').length
        if(a<5)
        
    });
</script> -->

</html>