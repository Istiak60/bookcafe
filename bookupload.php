<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>File Upload</title>
    <link rel="stylesheet" type="text/css" href="bookupload.css"/>
</head>
<body>
 <center>
 <div class="details">
<form method="post" enctype="multipart/form-data">
<h1><b1>Book Details</b1></h3>

<div class="mywork">
    <div class="mywork1">
    <label>BOOK NAME</label>
    <br><br>
    <input type="text" name="title" style="width: 200px; height: 20px:margin-left:20px">
    <br>
</div>

    <div class="mywork1">
    <label>ATHOUR</label>
    <br><br>
    <input  type="text" name="author" style="width: 200px; height: 20px:">
    <br>
    
    </div>
    <div class="mywork1">
     <label>BOOK IMAGE</label>
     <br><br>
    <input type="File" name="image" style="width: 200px; height: 20px:">
    <br>
    </div>
    <div class="mywork1">
    <label>BOOK PDF</label>
    <br><br>
    <input type="File" name="pdf"style="width: 200px; height: 20px:">
    <br>
    </div>
    <select id="Categories" name="Categories" style="width: 220px; height: 35px;" />
                   
                    <option name="Bangla Literature">Bangla Literature</option>
                    <option name="Nobels">Nobels</option>
                    <option name="Poems">Poems</option> 
                    <option name="Fantasy">Fantasy</option>
                    <option name="Horror">Horror</option>
                    <option name="Advanture">Advanture</option>
                    <option name="Comics">Comics</option>
                    <option name="Cookings">Cookings</option>
                    <option name="Journals">Journals</option>
                    <option name="Story" >Story</option>
                    <option name="CATEGORIES" selected>CATEGORIES</option>
                    </select>
               <br><br>
    <div class="mywork1">
    <label>PRICE</label>
    <br><br>
    <input  type="text" name="price" style="width: 200px; height: 20px:">
    <br>
    
    </div>

    <div class="mywork1">
    <label>DESCRIPTION</label>
    <br><br>
    <input type="text" name="description"style="width: 200px; height: 20px:">
    
    </div>
    <br>              
   


    <input type="submit" name="submit" value="upload" style="background-color: rgb(114, 12, 76);color:white; border-radius: 5px;">
   

    </div>
    </div> 
</form>
</div>
</center>
</body>
</html>
 
<?php 
$localhost = "localhost"; #localhost
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