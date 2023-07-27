<!DOCTYPE html>
<html lang='en' oncontextmenu="return false">

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>FlexBox</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lock.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='css/index.css'>
</head>

<body>
    <header>
        <h2 class='h2'> <a class="h2" href="index.php"> Online Room Finder</a></h2>
    </header>
    <br><br>
    <center><h2 style="color:red;text-decoration-color: aqua;
            font-family: 'Courier New', Courier, monospace;">We provide the best services to our clients.        
    </h2></center>
    <br><br>
    <h2>Available Rooms are:</h2>
        <br><br>
    <div class='container '>
        
        <?php
        include "conn.php";
        $sql = "SELECT * FROM `houseprofile`";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $pid = $rows['S_No'];
                echo "<div class='mid-container'>
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
                echo  "<br><br><button class='pushable'><span class='front'><a style='color:black;' href='more2.php?S_No=$pid'>View</a></span></button></p>
        </div>
    </div>";
            }
        } else {
            echo "No result!!";
        }
        ?>

    </div>

    <footer>
        <div style="margin-top: 467px;" class="footer align-text-bottom">
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

</html>