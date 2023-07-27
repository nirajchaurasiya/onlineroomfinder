
<?php


session_start();
if (isset($_GET['S_No'])) {
	$pid = $_GET['S_No'];
	echo $pid;

}
?>

<?php
    
       
       include "conn.php";
        $sql = "DELETE FROM `houseprofile` where S_No = $pid";
        $result = $con->query($sql);
        if($result)
        {
            // echo "<p class='text-success'>Records deleted successfully</p>";
            header("location:profile.php");
        }
        else{
            echo "<p class='text-danger'>Failed try again</p>";
        }
    

?>



<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Are you sure?</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lock.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        .ask {
            text-align: center;
            margin-top: 23rem;
        }

        .container {
            background-color: antiquewhite;
            /* height: 60vh;
            width: 60vw; */
        }

        #footer {
            /* display:-ms-grid;
             */
            height: 42vh;
        }
    </style>
</head>
<nav class="nav">
    <h1 style="width: 100vw;" class="text-danger bg-dark"><a class="text-danger text-decoration-none" href="index1.php">ONLINE ROOM FINDER</a></h1>
</nav>

<body>
    <center>
        <div class="card m-5 p-5 text-center" style="width: 18rem;">
            <!-- <img class="card-img-top" src="" alt="Card image cap"> -->
            <div class="card-body">
                <h5 class="card-title">Are you sure?</h5>
                <p class="card-text">This is irreversible process .<br>This can't be undone.</p>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POSt">
                    <input class="btn btn-primary" type="submit" value="yes">
                   
                </form>
                <button class="btn btn-success" type="button"><a class="text-dark text-decoration-none" href="profile.php">no</a></button>

            </div>
        </div>
    </center>


    <footer>
        <div id="footer" class="footer ">
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