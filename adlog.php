<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);


    if($_SERVER['REQUEST_METHOD']== "POST")
    {
      //somthing was posted
     $nuser_name = $_POST['new_user_name'];
     $npassword = $_POST['new_password'];
     $nemail = $_POST['new_email'];
     $naddress = $_POST['new_address'];
//new things added
     $cp=$_POST['cpassword'];
     $ce=$_POST['cemail'];

    

       // if(!empty($user_name)&&!empty($password)  &&  !is_numeric($user_name))//change
       if($npassword==$cp) 
       
       {
            
            //save to database
            //$user_id = random_num(20); changes in query
            //$sql=mysql_query("UPDATE user_info SET password='$newpassword' where user_id='$username'");
           // $query ="insert into users (new_user_name,new_email,new_password,new_address)  values ('$nuser_name','$nemail','$npassword','$naddress') ";
            $query = "UPDATE users SET email = '$nemail' where user_name='$user_name";
           
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
    
    <link rel="stylesheet" type="text/css" href="bookupload.css">


 



    
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
<link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <title>Testing page</title>
</head>

<body>

<section class="header"style="height:160vh">
   <nav>
        <div class="book_icon">
            <i class="fas fa-book-open"></i>
            <h2>Book Cafee</h2>
          </div>
      <div class="nav-links" id="navlinks" >
        <i class="fa fa-times" onclick="hidemenu()"></i>
        <ul>
           <li><a href="">ABOUT</a></li>
           <li><a href="">CONTACT</a></li>
           <li><a href="profile.php">PROFILE</a></li>
            <li><a href="logout.php">LOG OUT</a></li>
            <li><a class="btn btn-secondary dropdown-toggle" href="" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" style ="background-color:rgba(0,0,0,0.01);border: 0px">CATEGORIES
                </a>

          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item"  href="dashboard2.php">Bangla Literature</a></li>
            <li><a class="dropdown-item" href="#">Nobels</a></li>
            <li><a class="dropdown-item" href="#">Poems</a></li>
            <li><a class="dropdown-item" href="#">Story</a></li>
            <li><a class="dropdown-item"  href="#">Fantasy</a></li>
            <li><a class="dropdown-item" href="#">Horror</a></li>
            <li><a class="dropdown-item" href="#">Advanture</a></li>
            <li><a class="dropdown-item" href="#">Comics</a></li>
            <li><a class="dropdown-item" href="#">Cookings</a></li>
            <li><a class="dropdown-item" href="#">Journals</a></li> 
         </ul></li>     
    </li></ul> 
    </div>  
      <i class="fa fa-bars" onclick="showmenu()"></i>
    </nav>
    
<!-- TEST THERE -->

<center >
        <div class="card" style="background-color:rgba(255,255,255,0.5);width:500px">
            <form method="post">
                <h1><b>Edit Your Account</b></h3>

                    <!-- NAME -->
                    <div class="name">
                        <div class="form-elements">
                            <label for="name" style="margin-right:80px"></label>
                            Name
                        </div>
                    </div>
                    <div class="fields">
                        <input type="text" id="text" name ="new_user_name" style="width: 200px; height: 20px;" />
                    </div>

                    <!-- EMAIL-->
                    <div class="email">
                        <div class="form-elements">
                            <label for="email"style="margin-right:80px"></label>
                            Email
                        </div>
                    </div>
                    <div class="fields">
                        <input type="email" id="text" name ="new_email" style="width: 200px; height: 20px;" />
                    </div> 
                     <!--Confirm  EMAIL-->
                     <div class="email">
                        <div class="form-elements">
                            <label for="email"style="margin-right:80px"></label>
                           Confirm Email
                        </div>
                    </div>
                    <div class="fields">
                        <input type="email" id="text" name ="cemail" required style="width: 200px; height: 20px;" />
                    </div> 

                    <!-- PASSWORD -->
                    <div class="password">
                        <div class="form-elements">
                            <label for="password"style="margin-right:70px"></label>
                            Password
                        </div>
                    </div>
                    <div class="fields">
                        <input type="password" id="text" name ="new_password" style="width: 200px; height: 20px;" />
                    </div>
                    <!-- CONFIRM PASSWORD -->
                    <div class="password">
                        <div class="form-elements">
                            <label for="password"style="margin-right:70px"></label>
                             Confirm Password
                        </div>
                    </div>
                    <div class="fields">
                        <input type="password" id="text" name ="cpassword" required style="width: 200px; height: 20px;" />
                    </div>
                    

                    <!-- address -->

                    <div class="address">
                        <div class="form-elements">
                            <label for="address"style="margin-left:150px">
                                Address
                            </label>
                        </div>
                    </div>
                    <div class="fields">
                        <textarea name="new_address" id="address" cols="20" rows="5" style="width: 200px;">
                        </textarea>
                    </div>
                    
                
                    <!-- SUBMIT -->
                    <div class="labels">
                        
                            
                            <input id="button" type="submit" value="Update"style="background-color: rgb(114, 12, 76);color:white; border-radius: 5px;" /><br><br>
                    
                    
                    </div>
                    
            </form>
        </div>
    </center>








   
  </section>


</body>

</html>
