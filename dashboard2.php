<?php 
session_start();

	include("connection.php");
	include("functions.php");
    $user_data = check_login($con);
   $selectedItem = $_GET['item'];

    //var_dump($selectedItem);

 
$localhost = "localhost"; #localho
$dbusername = "root"; #username of phpmyadmin
$dbpassword = "";  #password of phpmyadmin
$dbname = "bookcafe1_db";  #database name

#conection string
$con = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
$user_data = check_login($con); 
if(isset($_POST["add_to_cart"]))
{     $un =$user_data['user_name'];
      $u =$user_data['user_id'];
    $t=$_POST['book_name'];
    $p =$_POST['price'];
    $rq =$_POST['rquantity'];
    $q =$_POST['quantity'];
    $tp=($p*$rq);
    $uq=$q-$rq;
    $sql ="insert into orders (user_name,user_id,book_name,price,rquantity,total_price)  values ('$un','$u','$t','$p','$rq','$tp') ";
    
    

    if(mysqli_query($con,$sql)){
      

        header("location:".$_SERVER['HTTP_REFERER']);
    }
    else{
        echo 'error';
        
    }
    

	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["book_name"],
				'item_price'		=>	$_POST["price"],
				'item_quantity'		=>	$_POST["rquantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
            
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
  
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["book_name"],
			'item_price'		=>	$_POST["price"],
			'item_quantity'		=>	$_POST["rquantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}
if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="dashboard2.php"</script>';
			}
		}
	}
}

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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<style>
td {
  height: 30vh;
  width: 30vh;
  padding: 0;
}
img{height:100%;
    width:100%;
    display:block;
}
.table-responsive td{
  height: 10vh;
  width: 30vh;
  padding: 0;
}
 h3{
     text-align:center;
     margin-top:10px;
     margin-bottom:20px;
     color:red;
     font-size:40px;
     font-weight:bold;
 }
 th{
     color:white;
     font-size:20px;
 }

 
</style>



    </head>
    <body>
<section class="header"style="height:120vh">
   <nav>
   <div class="book_icon">
                <i class="fas fa-book-open"></i>
                <!-- <h2 style="margin-bottom: 50px">Book Cafee</h2> -->
                <a style="text-decoration:none;margin-bottom: 50px;" href="dashboard.php"><h2 style="margin-bottom: 50px">Book Cafee</h2></a>

              </div>
          <div class="nav-links" id="navlinks">
            <i class="fa fa-times" onclick="hidemenu()"></i>
            <ul style="margin-top: -100px" >
           <li><a href="#footer">ABOUT</a></li>
           <li><a href="#footer">CONTACT</a></li>
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
    </li>
    <li> 
  
  
  <!-- if condition to check user type--> 
 
    <?php if($user_data['user_type'] =="Admin"){ ?> 
     <a href="bookupload.php" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true" style="witdh:50px"><i class="mdi mdi-cloud-upload" aria-hidden="true"style ="color:rgb(6, 209, 245);font-size:30px"></i></a></li>
    <?php} ?>
    <?php }else{
} ?>
<?php if($user_data['user_type'] =="User"){ ?> 
     <a href="cart.php" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true" style="witdh:50px"><i class="mdi mdi-cart" aria-hidden="true"style ="color:rgb(6, 209, 245);font-size:30px"></i></a></li>
    <?php} ?>
    <?php }else{
} ?>

  
            </ul> 
           



    
      
    </div>

                <i class="fa fa-bars" onclick="showmenu()"></i>
            </nav>
            <div class="text-box">
                <h1>Book Cafee</h1>
                <h4><?php echo $selectedItem; ?></h4>
            </div>
        </section>
          
        <!-- DEMO BOOK -->
        
        <h3>List of Books</h3>
        
 
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
        echo "<th>";  echo "Available quantity";    echo "</th>";
        
         if($user_data['user_type'] =="User"){ 
            echo "<th>";  echo "Quantity";    echo "</th>";
            echo "<th>";  echo "Add to cart";    echo "</th>";
    
     }

        echo"</tr>";
        if(mysqli_num_rows($res)>0)
        {
         while($row= mysqli_fetch_array($res))
         
              {    
                  ?>
             <form method="post" action="dashboard2.php?action=add&id=<?php echo $row["id"]; ?>" ecntype="multipart/form-data">
             <tr>     
                <td > <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).' " >';?>    </td>
        
 
                <td><input type="text" id="country" name="book_name" style="border-style: none;background:none;" value=<?php echo $row['book_name'];?> readonly><br><br></td>
          <td > <?php echo $row['author_name'];?>    </td>
          <td > <?php echo $row['categories'];?>    </td>
          
          <td><input type="text" id="country" name="price" style="border-style: none;background:none;" value=<?php echo $row['price'];?> readonly><br><br></td>
          <td > <?php echo $row['description'];?>    </td>
          
          <td><input type="text" id="country" name="quantity" style="border-style: none;background:none;" value=<?php echo $row['quantity'];?> readonly><br><br></td>

            <?php if($user_data['user_type'] =="User"){ ?> 
                <td > <?php echo '<input  type="number" name="rquantity" style="width: 70px; height: 20px;background:none;">';?></td >    
    <?php} ?>
    <?php }else{
} ?>

             <?php if($user_data['user_type'] =="User"){ ?> 
                <td ><?php echo'<input type="submit" name="add_to_cart" value="Add to cart" class="btn btn-success">';?></td >
    <?php} ?>
    <?php }else{
} ?>

 
         </tr>
         </form>
         <?php
             } 
          
          
 
         }
       
         echo "</table>";
   ?>
   

 
        <!-- Footer -->
        <!-- Footer -->
  
  <footer class="bg-dark text-center text-white "style="margin-top:70px;"id="footer">
 
 <h4 style="padding:20px;font-size:30px;font-weight:bold;" >About Us</h4>
   <p>
   We are trying to give books from our book cafe very easily and at low cost.<br> Since people are
    not interested in reading books now, we have taken this initiative.<br> Hopefully we will be
                   able to deliver books to everyone's doorsteps
   </p>


 <!-- Grid container -->
 <div class="container p-4 pb-0" >
   <!-- Section: Social media -->
   <section class="mb-4">
     <!-- Facebook -->
     <a
       class="btn btn-primary btn-floating m-1"
       style="background-color: #3b5998;"
       href="#!"
       role="button"
       ><i class="fa fa-facebook-f"></i
     ></a>

     <!-- Twitter -->
     <a
       class="btn btn-primary btn-floating m-1"
       style="background-color: #55acee;"
       href="#!"
       role="button"
       ><i class="fa fa-twitter"></i
     ></a>

     <!-- Google -->
     <a
       class="btn btn-primary btn-floating m-1"
       style="background-color: #dd4b39;"
       href="#!"
       role="button"
       ><i class="fa fa-google"></i
     ></a>

     <!-- Instagram -->
     <a
       class="btn btn-primary btn-floating m-1"
       style="background-color: #ac2bac;"
       href="#!"
       role="button"
       ><i class="fa fa-instagram"></i
     ></a>

     <!-- Linkedin -->
     <a
       class="btn btn-primary btn-floating m-1"
       style="background-color: #0082ca;"
       href="#!"
       role="button"
       ><i class="fa fa-linkedin"></i
     ></a>
     <!-- Github -->
     <a
       class="btn btn-primary btn-floating m-1"
       style="background-color:  #ac2bac;"
       href="#!"
       role="button"
       ><i class="fa fa-github"></i
     ></a>
   </section>
   <!-- Section: Social media -->
 </div>
 <!-- Grid container -->
 <p>Made With <i class="fa fa-heart-o"></i> By Books & Souls</p>
 <!-- Copyright -->
 <div class="text-center p-3" style="background-color: rgba(128, 128, 128, 0.2);">

   
 <!-- Copyright -->
</footer>
    </body>
</html>