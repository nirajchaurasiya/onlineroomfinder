<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Upload</title>
  <style>
    .img{
      width: 20px;
      height: 50px;
      padding: 20px;
    }
    p{
      border: 1px solid black;
    }
  </style>
</head>
<body>
  <div class="content">
    <?php 
        $db = mysqli_connect("localhost","root","","photos");
        $sql = "SELECT * FROM `images`";
        $result = mysqli_query($db,$sql);
        while($row = mysqli_fetch_array($result))
        {
          echo "<div id='img_div'>";
          echo " <img style='width:200px; height:auto;' src='roomPhoto/".$row['image'] ." '><br>";
          echo "<p> <table><tr><td> ".$row['text']."</tr></td></table></p>";
          echo "</div>";
        }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="size" value="1000000">
        <div>
          <input type="file" name="image">
        </div>
        <div>
          <textarea name="text" cols="40" rows="4" placeholder="say something"></textarea>
        </div>
        <div>
          <input type="submit" value="submit">
        </div>
    </form>
  </div>
</body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $msg = "";
  $target = "roomPhoto/".basename($_FILES['image']['name']);
  $db = mysqli_connect("localhost","root","","photos");
  //get all images
  $image = $_FILES['image']['name'];
  $text = $_REQUEST['text'];
  $sql = "INSERT INTO `images` (image,text) VALUES ('$image','$text')";
  mysqli_query($db,$sql);

  if(move_uploaded_file($_FILES['image']['tmp_name'], $target ) )
  {
    $msg = "success";
    echo $msg;
  }
  else{
    $msg = "error";
    echo "$msg";
  }
  
}

?>
</html>


<!-- $sql = "DELETE from `images` where `images`.`id` = 12;"; -->