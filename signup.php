<?php
session_start();
    include("connection.php");
    include("functions.php");


    if($_SERVER['REQUEST_METHOD']== "POST")
    {
      //somthing was posted
     $user_name = $_POST['user_name'];
     $password = $_POST['password'];
     $email = $_POST['email'];
     $contact = $_POST['contact'];
     $user_type =$_POST['user_type'];
     $address = $_POST['address'];

        if(!empty($user_name)&&!empty($password)  &&  !is_numeric($user_name))
        {
            
            //save to database
            $user_id = random_num(20);
            $query ="insert into users (user_id,user_name,password,email,contact,user_type,address)  values ('$user_id','$user_name','$password','$email','$contact','$user_type','$address') ";
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="signup.css">
    <link
      rel="stylesheet"
      type="text/css"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet"> -->

  <!-- <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css">

    <title>Sign up</title>
</head>

<body>
<section class="header">
    
      
     
    
   
    
    
    <nav>
        <div class="book_icon">
            <i class="fas fa-book-open"></i>
            <h2>Book Cafee</h2>
          </div>
      <div class="nav-links" id="navlinks">
        <i class="fa fa-times" onclick="hidemenu()"></i>
        <ul>
          <li><a href="">ABOUT</a></li>
          <li><a href="">CONTACT</a></li>
         
          


<!-- if condition to check user type--> 



        </li></ul> 
       

      </div>
      
      
      <i class="fa fa-bars" onclick="showmenu()"></i>
    </nav>
    <center >
        <div class="card" style="background-color:rgba(255,255,255,0.5);width:500px">
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

                    <!-- EMAIL-->
                    <div class="email">
                        <div class="form-elements">
                            <label for="email"></label>
                            Email
                        </div>
                    </div>
                    <div class="fields">
                        <input type="email" id="text" name ="email" style="width: 200px; height: 20px;" />
                    </div> 

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

                   
                    

                    <!-- contact -->
                    <div class="contact">
                        <div class="form-elements">
                            <label for="contact"></label>
                            Contact
                        </div>
                    </div>

                    <!-- user type -->
                    <div class="fields">
                        <input type="text" id="contact" name ="contact" style="width: 200px; height: 20px;" />
                    </div> 
                    <select id="user_type" name="user_type" style="width: 200px; height: 35px;margin:7px 0px 5px 0px" />
                   
               
                   <option name="Admin">Admin</option>
                   <option name="User" >User</option>
                   <option name="user_type" selected>User type</option>
                   </select>

                    <!-- address -->

                    <div class="address">
                        <div class="form-elements">
                            <label for="address">
                                Address
                            </label>
                        </div>
                    </div>
                    <div class="fields">
                        <textarea name="address" id="address" cols="20" rows="5" style="width: 200px;">
                        </textarea>
                    </div>
                    
                
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

  </section>


</body>

</html>