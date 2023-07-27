<!doctype html>
<html lang="en" oncontextmenu="return false">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/lock.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <title>Contact Us</title>
    <style>
        p {
            color: red;
        }

        .label {
            color: black;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index1.php">Online Room Finder</a>

    </nav>


    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $email = $_REQUEST['email'];
        $option = $_REQUEST['option'];
        $student = $_REQUEST['student'];
        $about = $_REQUEST['about'];
        $concern = $_REQUEST['concern'];

        include "conn.php";
        if (!$con) {
            die("Can't connect to database" . $con->connect_error);
        }
        $sql = "INSERT INTO `contact` (`S_No`,`email`,`options` , `student`, `about`, `concern`) VALUES (NULL, '$email', '$option', '$student', '$about','$concern');";
        $result = mysqli_query($con, $sql);
        if (!$result) {
            die("nothing");
        }
        else{
            echo "<h2 class=' p-5 text-danger'>Success</h2>";
        }
    }



    ?>
    <div class="container my-4">
        <h2>Contact Us</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" name="form1" id="form1">
            <p>
                <label class="label" for="email address">Email address</label>
                <input type="email" placeholder="Enter your Email .." class="form-control" name="email" id="email">
            </p>
            <p>
                <label class="label" for="what">What are you ?</label>
                <select class="form-control" name="option" id="option">
                    <option selected></option>
                    <option>Front-end developer</option>
                    <option>Full stact</option>
                    <option>Python , C , C++ , Java Programmer </option>
                    <option>Back-end developer</option>
                    <option>Just_Started Coding</option>
                    <option>Nothing</option>
                </select>


            </p>
            <p>
                <label class="label" for="student">Are you student ?
                </label>
                <input type="text" name="student" class="form-control" id="student" placeholder="eg: yes or no">
            </p>
            <p>
                <label class="label" for="about">Tell us about your self</label>
                <textarea class="form-control" id="about" name="about" rows="3" placeholder="How can we help you ?"></textarea>


            </p>
            <p>
                <label class="label" for="about">Elaborate your concern</label>
                <textarea name="concern" class="form-control" id="concern" rows="3" placeholder="How can we help you ?"></textarea>

            </p>

            <p>
                <input type="submit" value="submit" class="btn btn-primary">
            </p>
        </form>



    </div>
    <script>
        jQuery('#form1').validate({
            rules: {
                email: 'required',
                option: 'required',
                student: {
                    required: true,
                    minlength: 2,
                },
                about: {
                    required: true,
                    minlength: 20,
                },
                concern: {
                    required: true,
                    minlength: 20,
                },

            },
            messages: {
                student: {
                    minlength: 'Length should be 2 or more',
                },
                about: {
                    minlength: 'about should be 20 characters long',
                },
                concern: {
                    minlength: 'Concern should be 20 characters long',
                },

            },
            submitHandler: function(form) {
                form.submit();
            }

        });
    </script>

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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>