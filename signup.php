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
            
            //save to database
            $user_id = random_num(20);
            $query ="insert into users (user_id,user_name,password)  values ('$user_id','$user_name','$password') ";
            mysqli_query($con, $query);
        
            header("Location: login.php");
            die;
        }
        else{

            echo "please enter some correct data ";
        }




    }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="signup.css" />
</head>

<body>
    <center>
        <div class="card">
            <form method="post">
                <h1><b>Create Your Account</b></h3>

                    <!-- NAME -->
                    <div class="name">
                        <div class="form-elements">
                            <label for="name"></label>
                            Name
                        </div>
                    </div>
                    <div class="fields">
                        <input type="text" id="text" name ="user_name" style="width: 200px; height: 20px;" />
                    </div>

                    <!-- EMAIL
                    <div class="email">
                        <div class="form-elements">
                            <label for="email"></label>
                            Email
                        </div>
                    </div>
                    <div class="fields">
                        <input type="email" id="email" style="width: 200px; height: 20px;" />
                    </div> -->

                    <!-- PASSWORD -->
                    <div class="password">
                        <div class="form-elements">
                            <label for="password"></label>
                            Password
                        </div>
                    </div>
                    <div class="fields">
                        <input type="password" id="text" name ="password" style="width: 200px; height: 20px;" />
                    </div>

                    <!-- confirm password
                    <div class="cpassword">
                        <div class="form-elements">
                            <label for="cpassword"></label>
                            Confirm Password
                        </div>
                    </div>

                    <div class="fields">
                        <input type="text" id="cpassword" style="width: 200px; height: 20px;" />
                    </div> -->

                    <!-- contact
                    <div class="contact">
                        <div class="form-elements">
                            <label for="contact"></label>
                            contact
                        </div>
                    </div>
                    <div class="fields">
                        <input type="[number]" id="contact" style="width: 200px; height: 20px;" />
                    </div>
                    <!-- address

                    <div class="address">
                        <div class="form-elements">
                            <label for="address">
                                Address
                            </label>
                        </div>
                    </div>
                    <div class="fields">
                        <textarea name="experience" id="experience" cols="20" rows="5" style="width: 200px;">
                        </textarea>
                    </div>
                    <!--usertype
                    
                    <div class="ut">
                        <div class="form-elements">
                            <label for="">User Type</label>
                        </div>
                    </div>
                    <div class="fields-radio">
                        <input type="radio" id="usertype" name="user" value="usertype" />
                        <label class="usertype" for="usertype">User</label> <br>
                        <input type="radio" id="admintype" name="user" value="admintype" />
                        <label class="admintype" for="admintype">Admin</label> <br>

                    </div> -->



                    <!-- SUBMIT -->
                    <div class="labels">
                        
                            
                            <input id="button" type="submit" value="Signup"style="background-color: rgb(114, 12, 76);color:white; border-radius: 5px;" /><br><br>
                    
                    
                    </div>
                    <footer>
                        <p>Already Have an account?<a href="login.php">Log in</a></p>

                    </footer>
            </form>
        </div>
    </center>
</body>

</html>