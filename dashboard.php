<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
  <li> 
  
  
  <!-- if condition to check user type--> 
 
    <?php if($user_data['user_type'] =="Admin"){ ?> 
     <a href="bookupload.php" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true" style="witdh:50px"><i class="mdi mdi-cloud-upload" aria-hidden="true"style ="color:rgb(6, 209, 245);font-size:30px"></i></a></li>
    <?php} ?>
    <?php }else{
	
} ?>

  
            </ul> 
           

          </div>
          
          
          <i class="fa fa-bars" onclick="showmenu()"></i>
        </nav>
  



  
        <div class="text-box">
          <h1>Book Cafee</h1>
          
           <p1> Hello </p1> <br />
           <p> 

            <?php echo $user_data['user_name']; ?>
          </p>
          <a href="" class="hero-btn">Visit US To Know More</a>
        </div>
      </section>
      <br>
<!-- start -->

<center>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="max-width:700px;max-height:393x;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>

  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/BookCafee.jpg" class="d-block w-100" alt="..."style="width:30px">
    </div>
    <div class="carousel-item">
      <img src="img/comics.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/offer.png" class="d-block w-100" alt="...">
    </div>
   
    <div class="carousel-item">
      <img src="img/horror.jpg" class="d-block w-100" alt="...">
    </div>
     
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</center>
      <!-- DEMO BOOK -->
      <section class="books">
        <h1>SOME BOOKS</h1>
        <p>
        Some of Best Selling & Reviewed Books
        </p>
        <div class="row1">
          <div class="book-col">
            <img src="img/humaun-1.jpg" />
            <h3>Devi</h3>
            <p>
              Humayun Ahmed
            </p>
          </div>
          <div class="book-col">
            <img src="img/rabindra-1.jpg" />
            <h3>Geetanjali</h3>
            <p>
              Rabindranath Tagore
            </p>
          </div>
          <div class="book-col">
            <img src="img/kazi-1.jpg" />
            <h3>Ghumer Ghore</h3>
            <p>
              Kazi Nazrul Islam
            </p>
          </div>
          <div class="book-col">
            <img src="img/english-1.jpg" />
            <h3>The Girl With <br>No Name  </h3>
            <p>
              Lisa Regan
            </p>
          </div>
          <div class="book-col">
            <img src="img/english-2.jpg" />
            <h3>The ocean at the end of the lane</h3>
            <p>
              Neil Gaiman
            </p>
          </div>
        </div>
        <div class="row2">
          <div class="book-col">
            <img src="img/english-3.jpg" />
            <h3>The Dark Road</h3>
            <p>
              Ma Jian
            </p>
          </div>
          <div class="book-col">
            <img src="img/kazi-2.jpg" />
            <h3>Sanchita</h3>
            <p>
              Kazi Nazrul Islam
            </p>
          </div>
          <div class="book-col">
            <img src="img/rabindra-2.jpg" />
            <h3>Chaturanga</h3>
            <p>
              Rabindranath Tagore
            </p>
          </div>
          <div class="book-col">
            <img src="img/humaun-2.jpg" />
            <h3>Himu Samagera</h3>
            <p>
              Humayun Ahmed
            </p>
          </div>
          <div class="book-col">
            <img src="img/rabindra-3.jpg" />
            <h3>Kabuliwala</h3>
            <p>
              Rabindranath Tagore
            </p>
          </div>
        </div>
      </section>

  <!-- Footer -->
  <section class="footer">
    <h4>About Us</h4>
    <p>
    We are trying to give books from our book cafe very easily and at low cost.<br> Since people are
     not interested in reading books now, we have taken this initiative.<br> Hopefully we will be
                    able to deliver books to everyone's doorsteps
    </p>
    <div class="icons">
      <i class="fa fa-facebook"></i>
      <i class="fa fa-twitter"></i>
      <i class="fa fa-instagram"></i>
      <i class="fa fa-linkedin"></i>
    </div>
    <p>made with <i class="fa fa-heart-o"></i> by BOOKS & SOULS</p>
  </section>


      <!-- Javascript for toggole menu  -->
    <script>
        var navlinks = document.getElementById("navlinks");
        function showmenu() {
          navlinks.style.right = "0";
        }
        function hidemenu() {
          navlinks.style.right = "-200px";
        }
      </script>
</body>
</html>