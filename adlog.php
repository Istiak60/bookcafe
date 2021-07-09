<?php 
$localhost = "localhost"; #localho
$dbusername = "root"; #username of phpmyadmin
$dbpassword = "";  #password of phpmyadmin
$dbname = "bookcafe1_db";  #database name
 
#connection string
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
 
if (isset($_POST["submit"]))
 {

 $t=$_POST['title'];
 $a=$_POST['author'];
 $c =$_POST['Categories'];
 $p =$_POST['price'];
 $d =$_POST['description'];
$fn=$_FILES['image']['name'];
$tm=$_FILES['image']['tmp_name']; 
$fn1=$_FILES['pdf']['name'];
$tm1=$_FILES['pdf']['tmp_name1']; 
move_uploaded_file($tm,"bookimg/".$fn);
move_uploaded_file($tm1,"bookimg/".$fn1);

$sql ="insert into books (book_name,author_name,image,pdf,Categories,price,description)  values ('$t','$a','$fn','$fn1','$c','$p','$d') ";


    if(mysqli_query($conn,$sql)){
 
        header("Location: dashboard.php");
    }
    else{
        echo "Error";
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

<section class="header"style="height:120vh">
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
  </section>


</body>

</html>
