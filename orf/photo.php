<?php
// if ($_SERVER['REQUEST_METHOD'] == "POSt") {
    session_start();
    $photo = $_SESSION['photo'];
    echo "$photo";
//     $servername = "localhost";
//     $username = "root";
//     $password = "";
//     $db = "online room finder";
//     $con = new mysqli($servername, $username, $password, $db);
//     echo $photo;
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile Picture</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: aliceblue;
            background-color: black;
            height: 60px;
        }

        .mid-containe {
            font-size: 30px;
        }

        a {
            text-decoration: none;
            color: white;
        }

        .photo {
            margin-top: 20pc;
            text-align: center;
            background-color: antiquewhite;

        }

        .box {
            height: 30px;
        }
    </style>
</head>

<body>
    <nav class="nav1">
        <div class="mid-containe">
            <h1><a href="index1.php">Online Room Finder</a></h1>
        </div>
    </nav>
    <center>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
            <div class="card bg-dark" style="width: 25rem;margin-top:40px;">
                <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                <div class="card-body m-5">
                    <h5 class="card-title text-danger">Update Profile ?</h5>
                    <br>
                    <p class="card-text text-primary">Choose Profile Below <br><br>
                        <input class="form-control" type="file" name="file" id="image">
                    </p>
                    <input class="btn btn-success" type="submit" value="Update">
                </div>
            </div>
        </form>
    </center>

</body>

</html>