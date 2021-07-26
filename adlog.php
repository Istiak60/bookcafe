<?php 
session_start();

include("functions.php");
$localhost = "localhost"; #localho
$dbusername = "root"; #username of phpmyadmin
$dbpassword = "";  #password of phpmyadmin
$dbname = "bookcafe1_db";  #database name


#conection string
$con = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
$user_data = check_login($con); 
if(isset($_POST["add_to_cart"]))
{
      $u =$user_data['user_name'];
    $t=$_POST['book_name'];
    $p =$_POST['price'];
     $tp=($p*$q);
    $sql ="insert into orders (user_name,book_name,price,quantity,total_price)  values ('$u','$t','$p','$q','$tp') ";
    if(mysqli_query($con,$sql)){

        header("Location: adlog.php");
    }
    else{
        echo "Error";
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
				'item_quantity'		=>	$_POST["quantity"]
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
			'item_quantity'		=>	$_POST["quantity"]
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
				echo '<script>window.location="adlog.php"</script>';
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
        <title>Test set</title>
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
        />
        <!-- JavaScript Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        ></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<style>
img{height:70px;width:50px;}


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
                        <li><a href="">PROFILE</a></li>
                        <li><a href="logout.php">LOG OUT</a></li>
                        <li>
                            <a
                                class="btn btn-secondary dropdown-toggle"
                                href="#"
                                role="button"
                                id="dropdownMenuLink"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                                style="
                                    background-color: rgba(0, 0, 0, 0.01);
                                    border: 0px;
                                "
                                >CATEGORIES
                            </a>

                            <ul
                                class="dropdown-menu dropdown-menu-dark"
                                aria-labelledby="dropdownMenuLink"
                            >
                                        <li><a class="dropdown-item"  href="#"><?php echo $user_data['Categories']; ?></a></li>
                                        <li><a class="dropdown-item" href="#">Nobels</a></li>
                                        <li><a class="dropdown-item" href="#">Poems</a></li>
                                        <li><a class="dropdown-item" href="#">Story</a></li>
                                        <li><a class="dropdown-item"  href="#">Fantasy</a></li>
                                        <li><a class="dropdown-item" href="#">Horror</a></li>
                                        <li><a class="dropdown-item" href="#">Advanture</a></li>
                                        <li><a class="dropdown-item" href="#">Comics</a></li>
                                        <li><a class="dropdown-item" href="#">Cookings</a></li>
                                        <li><a class="dropdown-item" href="#">Journals</a></li>
                                                                </ul>
                        </li>
                    </ul>
                </div>

                <i class="fa fa-bars" onclick="showmenu()"></i>
            </nav>
            <div class="text-box">
                <h1>Book Cafee</h1>
                <h4>Bangali Literature</h4>
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
        
        <?php
        
         $res=mysqli_query($con,"SELECT * FROM `books`;");
       

        echo "<table class='table table-bordered table-hover'>";
        echo "<tr style='background-color:red;'>";
        //table header
        echo "<th>";  echo "Image";          echo "</th>";
        echo "<th>";  echo "Book Name";      echo "</th>";
        echo "<th>";  echo "Author Name";    echo "</th>";
        echo "<th>";  echo "Categories";     echo "</th>";  
        echo "<th>";  echo "Price";          echo "</th>";
        echo "<th>";  echo "Description";    echo "</th>";
        echo "<th>";  echo "Quantity";    echo "</th>";
        echo "<th>";  echo "Add to cart";    echo "</th>";
        echo"</tr>";
       if(mysqli_num_rows($res)>0)
       {
        while($row= mysqli_fetch_array($res))
        
             {    
                 ?>
            <form method="post" action="adlog.php?action=add&id=<?php echo $row["id"]; ?>" ecntype="multipart/form-data">
            <tr>     
               <td > <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).' " >';?>    </td>
       

               <td><input type="text" id="country" name="book_name" value=<?php echo $row['book_name'];?> readonly><br><br></td>
         <td > <?php echo $row['author_name'];?>    </td>
         <td > <?php echo $row['categories'];?>    </td>
         
         <td><input type="text" id="country" name="price" value=<?php echo $row['price'];?> readonly><br><br></td>
         <td > <?php echo $row['description'];?>    </td>
         <td > <?php echo '<input  type="number" name="quantity" style="width: 70px; height: 20px:">';?>    </td>
         <td > <?php echo'<input type="submit" name="add_to_cart" value="Add to cart" class="btn btn-success">';?>    </td>
        </tr>
        </form>
        <?php
            } 
         
         

        }
      
        echo "</table>";
  ?>

			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
                            
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>৳ <?php echo $values["item_price"]; ?></td>
						<td>৳ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="adlog.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">৳ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>
		</div>

        </div>

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
