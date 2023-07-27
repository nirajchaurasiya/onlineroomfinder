<?php
session_start();
// echo $_SESSION['rand'];
// echo $_SESSION['password'];
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $tocheck = $_REQUEST['pa'];
    if($tocheck == $_SESSION['rand'])
    {
        echo "<h1>Code Matched</h1><br><br>";
        echo "Your Password is ".$_SESSION['password']."<br><br>";
        echo "You can <a href='login.php'>login </a>now <br><br>";
    }
    else{
        echo "Sorry but code didn't matched Try again";
    }
}
?>

<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
    <link rel="stylesheet" href="css/lock.css">

</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"> 
        Your Code below :
        <br>
        <input type="text" name="pa" >
        <input type="submit" value='check'>
</form>
</body>
</html>