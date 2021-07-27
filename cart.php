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



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css">
<style>
/* .cart-items */
.cart-page {
    margin: 80px auto;
}
table {
    width: 100%;
    border-collapse: collapse;
    background-color:rgba(255,255,255,0.5);
}
.cart-info {
    display: flex;
    flex-wrap: wrap;
    
}
th {
    text-align: left;
    padding: 5px;
    color: #fff;
    background: #ff523b;
    font-weight: normal;
}
td {
    padding: 10px 5px;
}
td p {
    width: 100px;
    height: 30px;
    padding: 5px;
    
}
td a {
    color: #ff523b;
    font-size: 12px;
}
td img {
    width: 80px;
    height: 80px;
    margin-right: 10px;
}
.total-price td {
    display: flex;
    justify-content: flex-end;
}
.total-price table {
    border-top: 3px solid #ff523b;
    width: 10%;
    max-width: 410px;
    
    
}

th:last-child {
    text-align:right;
}




</style>

</head>
<body>
<section class="header"style="height:220vh">
   <nav>
   <div class="book_icon">
                <i class="fas fa-book-open"></i>
                <!-- <h2 style="margin-bottom: 50px">Book Cafee</h2> -->
                <a style="text-decoration:none;margin-bottom: 50px;" href="dashboard.php"><h2 style="margin-bottom: 50px">Book Cafee</h2></a>

              </div>
          <div class="nav-links" id="navlinks">
            <i class="fa fa-times" onclick="hidemenu()"></i>
            <ul style="margin-top: -100px" >
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
    </li>
  <!-- if condition to check user type--> 
 
 



</ul> 

    
      
    </div>
      
      
      <i class="fa fa-bars" onclick="showmenu()"></i>
    </nav>

        <!-- Cart items detailes -->
        <div class="small-container cart-page">
            <table>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th align="left">Subtotal</th>
                </tr>
                <h1><?php echo $user_data['user_id']?></h1>
                <?php
        
        $res=mysqli_query($con,"SELECT * FROM `orders`;");
      

       
      if(mysqli_num_rows($res)>0)
      {$total = 0;
       while($row= mysqli_fetch_array($res))
            {    
                if($row['user_id']==$user_data['user_id']){
                ?>
        
           <tr>     
            
      

        <td><p><?php echo $row['book_name'];?></p> </td>
        <td><p><?php echo $row['quantity'];?> </p></td>

        <td><p><?php echo $row['price'];?> </p></td>
         <td align="right"><p><?php echo $row['total_price'];?> </p></td>
         <?php
           $total = $total +$row['total_price'];
          ?>
         
        
       </tr>
       </div>
       <?php
           } 
        
            }?>
<div class="total-price">
    <table>
        <tr>
            <td align="right">Subtotal</td>
            <td align="right">৳ <?php echo  $total ?></td>
        </tr>
        <tr>
            <td align="right">Vat</td>
            <td align="right">৳ <?php
            $vat=0;
            $vat=($total*0.10);
            echo $vat;
            ?>
            </td>
        </tr>
        <tr>
            <td align="right">Total</td>
            <td align="right">৳ 
            <?php
            
            echo ($total+$vat);
            ?>

            </td>
        </tr>
 </table>
 </div>
 </table>
<?php


       }       
 ?>
 
  




    

        <!-- Footer -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                        <h3>Download Our App</h3>
                        <p>Download App Android and ios mobile phone</p>
                        <div class="app-logo">
                            <img src="/img/play-store.png" />
                            <img src="/img/app-store.png" />
                        </div>
                    </div>
                    <div class="footer-col-2">
                        <img src="/img/logo-white.png" />
                        <p>
                            Our purpose is to sustainably Make the Pleasure and
                            Benefits of Sports Accessible to the Many.
                        </p>
                    </div>
                    <div class="footer-col-3">
                        <h3>Useful Links</h3>
                        <ul>
                            <li>Coupons</li>
                            <li>Blog Post</li>
                            <li>Return Policy</li>
                            <li>Join Affiliate</li>
                        </ul>
                    </div>
                    <div class="footer-col-4">
                        <h3>Follow us</h3>
                        <ul>
                            <li>Facebook</li>
                            <li>Twitter</li>
                            <li>Instagram</li>
                            <li>YouTube</li>
                        </ul>
                    </div>
                </div>
                <hr />
                <p class="copy-right">Copyrite 2020 - Easy Tutorials</p>
            </div>
        </div>

        <!-- JS for toggle menu -->
        <script>
            var MenuItems = document.getElementById("MenuItems");
            MenuItems.style.maxHeight = "0px";

            function menutoggle() {
                if (MenuItems.style.maxHeight == "0px") {
                    MenuItems.style.maxHeight = "200px";
                } else {
                    MenuItems.style.maxHeight = "0px";
                }
            }
        </script>
   
    </body>
</html>
