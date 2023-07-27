<?php
//    $db = mysqli_connect("localhost","root","","online room finder");
//     $sql = "SELECT * FROM `houseprofile`";
//     $result = mysqli_query($db,$sql);
//     while($row = mysqli_fetch_array($result))
//     {
//       echo "<div id='img_div'>";
//       echo " <img style='width:200px; height:auto;' src='roomPhoto/".$row['images'] ." '><br>";
//     //   echo "<p> <table><tr><td> ".$row['text']."</tr></td></table></p>";
//       echo "</div>";
//     }
?>



<!DOCTYPE html>

<html lang="en" oncontextmenu="return false">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lock.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Fill the Information below</title>
</head>

<body><?php session_start() ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index1.php">Online Room Finder &nbsp; </a>

    </nav>
    <br><br>
    <center>
        <h2>Please provide some Information Below</h2>
        <br><br>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-control-file  ">
                <div class="col-md-4">
                    <label for="validationServer01">Full Name</label>
                    <input type="text" name="fname" class="form-control is-valid" id="validationServer01" placeholder="First name" required>
                    <br>

                </div>
                <div class="form-control-file">
                    <div class="col-md-4 mb-3">
                        <label for="validationServer02">E-mail</label>
                        <input type="email" name="email" class="form-control is-valid" id="validationServer02" placeholder="Email" required>

                    </div>
                </div>
                <div>
                    <div class="col-md-4 mb-3">
                        <label for="validationServerUsername">Address</label>
                        <div>

                            <input type="text" class="form-control is-valid" placeholder="Address" name="add" required>
                        </div>
                    </div>
                </div>
                <div class="form-control-file">
                    <div class="col-md-4 mb-3">
                        <label for="validationServer02">Rent Price</label>
                        <input type="text" name="rent" class="form-control is-valid" id="validationServer02" placeholder="Rent Price.." required>

                    </div>
                    <div class="form-control-file col-md-4 mb-3">
                        <div class="">
                            <label for="validationServer03">Phone Number:</label>
                            <input type="number" name="number" class="form-control is-valid" placeholder="+977 9812345678" required>

                        </div>

                        <br>
                        <div class="mb-3">
                            <label for="validationServer05">About this room:</label>
                            <input type="text" name="about" class="form-control is-valid" id="validationServer05" placeholder="Please write some words about this room.." required>

                        </div>
                        <br>
                        <div class="mb-3">
                            <div class="">
                                <label for="validationServer04">Type of ad:</label>
                                <input type="text" name="ad" class="form-control is-valid" placeholder="eg : for rent , for sell" required>

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="validationServer05">Access Road:</label>
                            <input type="text" name="road" class="form-control is-valid" id="validationServer05" placeholder="Width of Road in ft." required>

                        </div>

                    </div>
                    <div class="col-md-4">
                        <label for="validationServer01">floor:</label>
                        <input type="text" name="floor" class="form-control is-valid" id="validationServer01" placeholder="How many floor is the room ?" required>
                        <br>

                    </div>

                    <!-- <div class="col-md-4">
                <label for="validationServer01">Full Name</label>
                <input type="text" name="" class="form-control is-valid" id="validationServer01" placeholder="First name"
                    required>
               <br>

            </div> -->

                    <div class="col-md-4">
                        <label for="validationServer01">Furnishing:</label>
                        <input type="text" name="furnish" class="form-control is-valid" id="validationServer01" placeholder="eg: No-furnished , Half-furnished , Full-furnished" required>
                        <br>

                    </div>

                    <div class="col-md-4">
                        <label for="validationServer01">No of Bathrooms:</label>
                        <input type="text" name="bath" class="form-control is-valid" id="validationServer01" placeholder="eg: 1 , 2 or more" required>
                        <br>

                    </div>

                    <div class="col-md-4">
                        <label for="validationServer01">Kitchen</label>
                        <input type="text" name="kitchen" class="form-control is-valid" id="validationServer01" placeholder="eg : yes or no" required>
                        <br>

                    </div>

                    <div class="col-md-4">
                        <label for="validationServer01">Zip</label>
                        <input type="text" name="zip" class="form-control is-valid" id="validationServer01" placeholder="Zip number" required>
                        <br>

                    </div>


                    <div class="form-group row-cols-1 border-warning">
                        <label for="exampleFormControlFile1">Upload some Images</label>
                        &nbsp;&nbsp;&nbsp;
                        <input type="file" name="image" class="text-danger font-italic" accept="image/png, image/gif, image/jpeg">
                    </div>


                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                            <label class="form-check-label" for="invalidCheck3">
                                Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary col-5" type="reset">Reset</button>
                    <br>
                    <br>
                    <button class="btn btn-primary col-5" type="submit">Submit</button>
                    <br><br><br>
                </div>
            </div>
        </form>
    </center>

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
</body>
<?php

if (isset($_FILES['image'])) {
    $uname = $_SESSION['uname'];
    $prof = $uname;
    include "conn.php";
    
        $fname = $_REQUEST['fname'];
        $email = $_REQUEST['email'];
        $address = $_REQUEST['add'];
        $rent = $_REQUEST['rent'];
        $about = $_REQUEST['about'];
        $phone = $_REQUEST['number'];
        $typeofad = $_REQUEST['ad'];
        $road = $_REQUEST['road'];
        $floor = $_REQUEST['floor'];
        $furnish = $_REQUEST['furnish'];
        $bathroom = $_REQUEST['bath'];
        $kitchen = $_REQUEST['kitchen'];
        $zip = $_REQUEST['zip'];
        
        // $text = $_REQUEST['text'];
        // $images = $_REQUEST['images'];
        
            //get all images
    //For image
    $img_name = $_FILES['image']['name'];
    $img_temp = $_FILES['image']['tmp_name'];
    $img_type = $_FILES['image']['type'];
    $img_size = $_FILES['image']['size'];


    
    // $text = $_REQUEST['text'];
    // $images = $_REQUEST['images'];
    move_uploaded_file($img_temp,"roomPhoto/".$img_name);
     $sql = "INSERT INTO `houseprofile` (`S_No`, `uname`,
     `fullname`, `email`, 
    `address`,
     `phone`, `Rentprice`, `typeofad`, `road`, `floor`, `furnish`,
      `bathroom`, `kitchen`, `zip`, `about`, `images`) 
      VALUES (NULL, '$prof', '$fname', '$email', '$address',
       '$phone', '$rent', '$typeofad', '$road', '$floor', '$furnish',
        '$bathroom', '$kitchen', '$zip', '$about', '$img_name');";
    $result = mysqli_query($con, $sql);
    if($result)
    {
        $a = "True";
    }
   echo "<script>confirm('Done uploading $prof !!')</script>";
    
        
}

?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>