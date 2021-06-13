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
    <title>Dashboard2</title>
    <link rel="stylesheet" href="style.css">
    <link
      rel="stylesheet"
      type="text/css"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet"> -->

  <!-- <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->
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
              <li><a href="">CATAGORIES</a></li>
              <li><a href="">PROFILE</a></li>
              <li><a href="logout.php">LOG OUT</a></li>
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
            <h3>the ocean at the end of the lane</h3>
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