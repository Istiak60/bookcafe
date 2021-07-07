<?php
session_start();
include("connection.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD']== "POST")
{
  //somthing was posted
  $email = $_POST['email'];
  $password = $_POST['password'];
    if(!empty($email)&&!empty($password)  &&  !is_numeric($email))
    {
        
       
        $query="select * from users where email = '$email' limit 1";
        
        $result = mysqli_query($con, $query);
        if($result)
        {
            
            if($result && mysqli_num_rows($result) > 0)
            {
  
              $user_data =  mysqli_fetch_assoc($result);
              if($user_data['password']===$password)
              {
                  $_SESSION['user_id']=$user_data['user_id'];
                header("Location: dashboard.php");
                die;

              }
            } 

        }

       function_alert("wrong password or email");
       
    }
    else{

        function_alert("wrong password or email");
    }




}

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
                <input type="text" placeholder="Enter email" name="email"required><br><br>

                <label for="password" style="color: white;"><b>Password</b></label>
                <!-- <input type="password" placeholder="Enter password" name="password"  required><br><br> -->
                <input id="text" type="password" name="password"><br><br>
                <br>
                <input type="Submit" value="Sign In"
                    style="background-color: rgb(233, 38, 80);color:rgb(243, 236, 236);border-radius: 5px;margin-top:10px; font-size: 25px;margin-top: 15px;" />

            </form>
        </div>

    </center>


</body>

</html>