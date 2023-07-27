<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/lock.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
</head>

<body>
    <form action="#" method="POST" id="form1">
        <p>
        <label for="fname">firstname</label>
        <input type="text" id="fname" name="fname">
        </p>
        <p>
        <label for="lname">lastname</label>
        <input type="text" id="lname" name="lname">
        </p>
        <p>
        <label for="user_email">email</label>
        <input type="email" id="user_email" name="user_email">
        </p>
<p>
        <label for="password">password</label>
        <input type="password" id="password" name="password">
        </p>
        <input type="submit" value="submit">
    </form>
    <script>
        $(document).ready(function () {
           $('form[id="form1"]').validate({
               rules:{
                   fname:"required",
                   lname : "required",
                   user_email:{
                       required:true,
                        email: true,
                   },
                   password:{
                       required:true,
                       minlength:8,
                   }

               },
               messages:{
                   fname : 'THis field is required:',
                   lname : 'This field is required',
                   user_email : 'THis filed is required',
                   password:{
                       minlength:'Password must be 8 characters long',
                   }

               },
               submitHandler: function(form)
               {
                   form.submit();
               }


           }); 
        });
    </script>
</body>

</html>