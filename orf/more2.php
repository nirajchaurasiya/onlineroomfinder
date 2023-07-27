<?php
session_start();
if (isset($_GET['S_No'])) {
	$pid = $_GET['S_No'];
	// echo $pid;
}

?>

<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product id = <?php if(isset($_GET['S_No']))
	{
		$pid = $_GET['S_No'];
		echo $pid;
	} ?></title>
	  <link rel="stylesheet" href="css/lock.css">

	<link rel="stylesheet" href="css/about.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index1.php">Online Room Finder &nbsp; </a>
   
    </nav>
	<br><br>
	<?php
	

	include "conn.php";
	$sql = "SELECT * FROM `houseprofile` WHERE S_No = $pid";
	// $res = mysqli_query($con,$sql);
	$res = $con->query($sql);
	while ($row = $res->fetch_object()) {
		// $id = $row->S_No;
		$rent =$row->typeofad;
		$fname = $row->fullname;
		$email = $row->email;
		$add = $row->address;
		$phone = $row->phone;
		$typeofad = $row->typeofad;
		$road = $row->road;
		$floor = $row->floor;
		$furnish = $row->furnish;
		$bathroom = $row->bathroom;
		$kitchen = $row->kitchen;
		$zip = $row->zip;
		$about = $row->about;
		// $image = $row->roomPhoto/'images';
		// echo " <img style='width:200px; height:auto;' src='roomPhoto/" . $row['images'] . " '><br>";
		// echo $image;




		$sqlimage = "SELECT	 images from `houseprofile` where S_No = $pid";
		// $imageresult = mysql_query($sqlimage,$con);
		$ssql = mysqli_query($con, $sqlimage);
		while ($rows = mysqli_fetch_assoc($ssql)) {
			// echo " <img style='width:200px; height:auto;' src='roomPhoto/" . $rows['images'] . " '><br>";




			echo "<div class='col-md-12  p-2 bg-dark'>";
			echo "<div class='white-box text-center'><img  class='img-fluid' height:auto;' src='roomPhoto/" . $rows['images'] . "'><br></div>";
			echo "</div>";
		}
		    echo "<div class='col-lg-7 col-md-7 col-sm-6'>";
			echo "<h4 class='box-title mt-5'>$rent</h4>";
		       echo "<h4 class='box-title mt-5'>Product description</h4>";

		       echo "<p>$about</p>";
		    //    echo "<h2 class='mt-5'>";
		    //    echo "     $153<small class='text-success'>(36%off)</small>";
		    //    echo " </h2>";
		    //    echo " <button class='btn btn-dark btn-rounded mr-1' data-toggle='tooltip' title='' data-original-title='Add to cart'>";
		    //     echo "    <i class='a fa-shopping'cart'></i>";
		    //    echo "</button>";
		    //    echo " <button class='btn btn-primary btn-rounded'>Buy Now</button>";
		       echo " <h3 class='box-title mt-5'>Key Highlights</h3>";
		       echo " <ul class='m-4 list-unstyled'>";
		       echo "     <li><i class='fa fa-check text-success'></i>Kitchen - $kitchen</li>";
		       echo "     <li><i class='fa fa-check text-success'></i>$furnish</li>";
		       echo "     <li><i class='fa fa-check text-success'></i>Bathroom - $bathroom</li>";
		      echo "  </ul>";
		  echo "  </div>";
		   echo " <div class='col-lg-12 col-md-12 col-sm-12'>";
		   echo "     <h3 class='box-title mt-5'>General Info</h3>";
		   echo "     <div class='m-4 table-responsive'>";
		   echo "         <table class='table table-striped table-product'>";
		   echo "             <tbody>";
		   echo "                 <tr>";
		   echo "                     <td width='390'>Full Name</td>";
		   echo "                     <td>$fname</td>";
		   echo "                 </tr>";
		   echo "<tr>";
		   echo "                     <td>Phone</td>";
		   echo "                     <td>$phone</td>";
		   echo "                 </tr>";
		   echo "                 <tr>";
		   echo "                     <td>E-Mail</td>";
		   echo "                     <td>$email</td>";
		   echo "                 </tr>";
		   echo "                 <tr>";
		   echo "                     <td>Address</td>";
		   echo "                     <td>$add</td>";
		   echo "                 </tr>";
		   echo "                 <tr>";
		   echo "                     <td>Type of ad</td>";
		   echo "                     <td>$typeofad</td>";
		   echo "                 </tr>";
		   echo "                 <tr>";
		   echo "                     <td>Road-Width</td>";
		   echo "                     <td>$road</td>";
		   echo "                 </tr>";
		   echo "                 <tr>";
		   echo "                     <td>Furnish ?</td>";
		   echo "                     <td>$furnish</td>";
		    echo "                </tr>";
		     echo "               <tr>";
		   echo "                     <td>Bathroom</td>";
		    echo "                    <td>$bathroom</td>";
		   echo "                 </tr>";
		   echo "                 <tr>";
		   echo "                     <td>Kitchen</td>";
		    echo "                    <td>$kitchen</td>";
		    echo "                </tr>";
		    echo "                <tr>";
		    echo "                    <td>Zip</td>";
		    echo "                    <td>$zip</td>";
		    echo "                </tr>";
		    echo "                <tr>";
		    echo "                    <td>About this room</td>";
		    echo "                    <td>$about</td>";
		    echo "                </tr>";
		    // echo "                <tr>";
		    // echo "                    <td>Adjustable Height</td>";
		    // echo "                    <td>Yes</td>";
		    // echo "                </tr>";
		    // echo "                <tr>";
		    //  echo "                   <td>Model Number</td>";
		    // echo "                    <td>F01020701-00HT744A06</td>";
		    // echo "                </tr>";
		    // echo "                <tr>";
		    // echo "                    <td>Armrest Included</td>";
		    // echo "                    <td>Yes</td>";
		    //  echo "               </tr>";
		    // echo "                <tr>";
		    // echo "                    <td>Care Instructions</td>";
		    // echo "                    <td>Handle With Care,Keep In Dry Place,Do Not Apply Any Chemical For Cleaning.</td>";
		    // echo "                </tr>";
		    // echo "                <tr>";
		    // echo "                    <td>Finish Type</td>";
		    // echo "                    <td>Matte</td>";
		    // echo "                </tr>";

		    echo "            </tbody>";
		    echo "        </table>";
		    echo "    </div>";
		  echo "  </div>";
		echo " </div>";
	}
	?>



	</div>
	</div>
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
</body>

</html>