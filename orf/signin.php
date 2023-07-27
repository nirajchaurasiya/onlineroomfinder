<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $name = $_REQUEST['logname'];
    $pass = $_REQUEST['logpassword'];
    // header('location:login.php');
    include "conn.php";
    $s = "SELECT * FROM `loginuser` where name = '$name' && password = '$pass' ";
    
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $_SESSION['log_name'] = $name;
        header('location:index1.php');
        echo "Sign in successful";
    } else {
       echo "   <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'> <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'><div class='alert alert-warning bg-red alert-dismissible fade show' role='alert'>
                        <strong>Ohh no!!</strong> Username or password is wrong .<br>Please try again with valid email and password
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                          <span aria-hidden='true'>&times;</span>
                        </button>
                      </div><script src='https://code.jquery.com/jquery-3.4.1.slim.min.js' integrity='sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n' crossorigin='anonymous'></script>
                      <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' crossorigin='anonymous'></script>
                      <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js' integrity='sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6' crossorigin='anonymous'></script>
 <a class='text-danger text-decoration-none ' href='login.php'>Go to Login page</a>                     ";
    }
}
?>