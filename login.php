<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signin.css">
    <title>Sign in</title>
</head>

<body>
    <center>

        <div class="container">
            <form method="post">

                <h1>Sign In </h1>
                <label for="Email" style="color: white;"><b>Email</b></label>
                <br>
                <input type="text" placeholder="Enter Email" name="Email"  required><br><br>

                <label for="Password" style="color: white;"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="Password"  required><br><br>
                <br>
                <input type="Submit" value="Sign In"
                    style="background-color: rgb(233, 38, 80);color:rgb(243, 236, 236);border-radius: 5px;margin-top:10px; font-size: 25px;margin-top: 15px;" />

            </form>
        </div>

    </center>


</body>

</html>