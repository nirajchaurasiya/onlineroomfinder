<?php 
if(isset($_GET['Uname']))
{
    $p = $_GET['Uname'];
    // echo "$p";
}
?>
<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title style="text-transform:capitalize;">Profile </title>
    
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
        <a class="navbar-brand" href="index.php">Online Room Finder &nbsp; </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
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



                <span>

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

                    // $name = "$p";
                    include "conn.php";
                    $status = "SELECT * FROM `loginuser` where name = '$p' ";
                    $result = $con->query($status);
                    while ($row = $result->fetch_object()) {
                        $name = $row->name;
                        echo $name;
                        break;
                    }
                    ?>
                    </h2>


                    <p>
                        <?php
                        // $name = "$p";
                        include "conn.php";
                        $status = "SELECT * FROM `loginuser` where name = '$p'";
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
                                    $status = "SELECT * FROM `loginuser` where name = '$p'";
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
                                    $status = "SELECT * FROM `loginuser` where name = '$p'";
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
                                    $status = "SELECT * FROM `loginuser` where name = '$p'";
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
                                    $status = "SELECT * FROM `loginuser` where name = '$p'";
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