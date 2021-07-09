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
    <link rel="stylesheet" href="style.css">
    
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

    <title>Sign in</title>
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
          <li><a href="signup.php">SIGN UP</a></li>
         
        </li></ul> 
       

      </div>
      
      
      <i class="fa fa-bars" onclick="showmenu()"></i>
    </nav>
    <center>

<div class="container" style="background-color:rgb(0,0,0,0.5);width:500px" >
    <form method="post">

        <h1>Sign In </h1>
        <label for="Email" style="color: white;"><b>Email</b></label>
        <br>
        <input type="text" placeholder="Enter email" name="email"required style="padding:20px"><br><br>

        <label for="password" style="color: white;"><b>Password</b></label>
        <!-- <input type="password" placeholder="Enter password" name="password"  required><br><br> -->
        <input id="text" placeholder="Enter password" type="password" name="password"required style="padding:20px"><br><br>
        <br>
        <input type="Submit" value="Sign In"
            style="background-color: rgb(233, 38, 80);color:rgb(243, 236, 236);border-radius: 5px;margin-top:10px; font-size: 25px;margin-top: 15px;" />

    </form>
</div>

</center>



    <!-- <div class="text-box">
      <h1>Book Cafee</h1>
      
       <p1> Hello </p1> <br>
       <p> 

        Md.Istiak Sharif          </p>
      <a href="" class="hero-btn">Visit US To Know More</a>
    </div> -->
  </section>


</body>

</html>