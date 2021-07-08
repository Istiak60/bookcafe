<?php
session_start();
include("connection.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD']== "POST")
{
  //somthing was posted
  $user_name = $_POST['user_name'];
  $password = $_POST['password'];
    if(!empty($user_name)&&!empty($password)  &&  !is_numeric(user_name))
    {
        
       
        $query="select * from admins  where user_name = '$user_name' limit 1";
        
        $result = mysqli_query($con, $query);
        if($result)
        {
            
            if($result && mysqli_num_rows($result) > 0)
            {
  
              $user_data =  mysqli_fetch_assoc($result);
              if($user_data['password']===$password)
              {
                  $_SESSION['user_id']=$user_data['user_id'];
                header("Location:bookupload.php");
                die;

              }
            } 

        }

       echo "Wrong password or user id ";
    }
   
    else{

        echo "please enter some correct data ";
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
    <title>Admin log in</title>
</head>

<body>
    <center>
       
        <div class="container">
            <form method="post">

                <h1>Admin log in </h1>
                <label for="Email" style="color: white;"><b>Admin name</b></label>
                <br>
                <input type="text" placeholder="Enter Admin name" name="user_name"required><br><br>

                <label for="password" style="color: white;"><b>password</b></label>
                <!-- <input type="password" placeholder="Enter password" name="password"  required><br><br> -->
                <input id="text" type="password" name="password"><br><br>
                <br>
                <input type="Submit" value="Get In"
                    style="background-color: rgb(233, 38, 80);color:rgb(243, 236, 236);border-radius: 5px;margin-top:10px; font-size: 25px;margin-top: 15px;" />

<!-- for git test -->
<label for="password" style="color: white;"><b>password</b></label>
                <!-- <input type="password" placeholder="Enter password" name="password"  required><br><br> -->
                <input id="text" type="password" name="password"><br><br>



            </form>
       
        </div>

    </center>


</body>

</html>
