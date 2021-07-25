<?php 
session_start();

	include("connection.php");
	include("functions.php");
    

	$user_data = check_login($con);
    $selectedItem = $_GET['item'];
    //var_dump($selectedItem);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Dashboard 2</title>
        <link rel="stylesheet" href="style1.css" />
        <link
            rel="stylesheet"
            type="text/css"
            href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        />
        <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet"> -->

        <!-- <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->
        <!-- CSS only -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css">

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        />  <link
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

        <!-- JavaScript Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        ></script>

<style>
td {
  height: 30vh;
  width: 10vh;
  padding: 0;
}
img{height:100%;
    width:100%;
    display:block;
}


</style>



    </head>
    <body>
        <section class="header">
            <nav>
                <div class="book_icon">
                    <i class="fas fa-book-open"></i>
                    
                    <a style="text-decoration:none;" href="dashboard.php"><h2>Book Cafee</h2></a>

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
    <li><a class="dropdown-item"  href="dashboard2.php?item=Bangla Literature">Bangla Literature</a></li>
    <li><a class="dropdown-item" href="dashboard2.php?item=Nobels">Nobels</a></li>
    <li><a class="dropdown-item" href="dashboard2.php?item=Poems">Poems</a></li>
    <li><a class="dropdown-item" href="dashboard2.php?item=Story">Story</a></li>
    <li><a class="dropdown-item"  href="dashboard2.php?item=Fantasy">Fantasy</a></li>
    <li><a class="dropdown-item" href="dashboard2.php?item=Horror">Horror</a></li>
    <li><a class="dropdown-item" href="dashboard2.php?item=Advanture">Advanture</a></li>
    <li><a class="dropdown-item" href="dashboard2.php?item=Comics">Comics</a></li>
    <li><a class="dropdown-item" href="dashboard2.php?item=Cookings">Cookings</a></li>
    <li><a class="dropdown-item" href="dashboard2.php?item=Journals">Journals</a></li>
  
  
  
  </ul></li>
  <li> 
                       
  
                </div>

                <i class="fa fa-bars" onclick="showmenu()"></i>
            </nav>
            <div class="text-box">
                <h1>Book Cafee</h1>
                <h4><?php echo $selectedItem; ?></h4>
            </div>
        </section>
          
        <!-- DEMO BOOK -->
        <div class="row-2">
            <h2>Books</h2>
            <select>
                <option>Default Sorting</option>
                <option>Sort by Author</option>
                <option>Sort by Popularity</option>
                <option>Sort by Rating</option>
                <option>Sort by Sale</option>
            </select>
         </div>
        <h3>List of books</h3>
        <form action=""method="POST" ecntype="multipart/form-data">
        <?php
        
        $res=mysqli_query($con,"SELECT * FROM `books` where categories='$selectedItem'");
        echo "<table class='table table-bordered table-hover'>";
        echo "<tr style='background-color:red;'>";
        //table header
        echo "<th>";  echo "Image";          echo "</th>";
        echo "<th style='margin-right:20px;'>";  echo "Book Name";      echo "</th>";
        echo "<th>";  echo "Author Name";    echo "</th>";
        echo "<th>";  echo "Categories";     echo "</th>";  
        echo "<th>";  echo "Price";          echo "</th>";
        echo "<th>";  echo "Description";    echo "</th>";
        echo "<th>";  echo "Quantity";    echo "</th>";
        echo "<th>";  echo "Add to cart";    echo "</th>";
        echo"</tr>";
        while($row= mysqli_fetch_array($res))
        { //if($row['categories']=="Nobels")
             {    
            echo "<tr>";     
            
                 
      echo "<td >"; echo '<img src="data:image;base64,'.base64_encode($row['image']).' " >';echo "</td>";
         echo "<td >";  echo $row['book_name'];    echo "</td>";
        echo "<td>";  echo $row['author_name'];    echo "</td>";
        echo "<td>";  echo $row['categories'];     echo "</td>";
        echo "<td>";  echo $row['price'];          echo "</td>";
        echo "<td>";  echo $row['description'];    echo "</td>";
        echo "<td>";  echo '<input  type="number" name="quantity" style="width: 70px; height: 20px:">';echo "</td>";
       
        
        echo "<td>";  echo '<input type="submit" name="submit" value="Add to cart" class="btn btn-success">';echo "</td>";
// testing part   

        echo "</tr>";
            } 
         
         

        }
      
        echo "</table>";
  ?>


    </form>

        <!-- Footer -->
        <section class="footer">
            <h4>About Us</h4>
            <p>
                We are trying to give books from our book cafe very easily and
                at low cost.<br />
                Since people are not interested in reading books now, we have
                taken this initiative.<br />
                Hopefully we will be able to deliver books to everyone's
                doorsteps
            </p>
            <div class="icons">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-linkedin"></i>
            </div>
            <p>made with <i class="fa fa-heart-o"></i> by BOOKS & SOULS</p>
        </section>
    </body>
</html>