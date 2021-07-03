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
    <label>BOOOK NAME</label>
    <input type="text" name="title"style="width: 200px; height: 20px:">
    </div>

    <div class="mywork">
    <label>ATHOUR</label>
    <input type="text" name="author"style="width: 200px; height: 20px:">
    
    </div>
    <div class="mywork">
     <label>BOOK IMAGE</label>
    <input type="File" name="image"style="width: 200px; height: 20px:">
    </div>
    <div class="mywork">
    <label>BOOK PDF</label>
    <input type="File" name="pdf"style="width: 200px; height: 20px:">
    </div>
    <select id="Categories" name="Categories" style="width: 220px; height: 35px;" />
                    <option name="Comedy">Comedy</option>
                    <option name="Horror">Horror</option>
                    <option name="Action">Action</option>
                    <option name="Melodramas" selected>Melodramas</option>
                    <option name="Sports">Sports</option></select>
<br>
                    <div class="mywork">
    <label>DESCRIPTION</label>
    <input type="text" name="description"style="width: 200px; height: 20px:">
    
    </div>
                    



    <input type="submit" name="submit">
 
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
 $d =$_POST['description'];
$fn=$_FILES['image']['name'];
$tm=$_FILES['image']['tmp_name']; 
$fn1=$_FILES['pdf']['name'];
$tm1=$_FILES['pdf']['tmp_name1']; 
move_uploaded_file($tm,"bookimg/".$fn);
move_uploaded_file($tm1,"bookimg/".$fn1);
//$sql = "INSERT into books ('book_name',image) VALUES('$t','$fn')";
$sql ="insert into books (book_name,author_name,image,pdf,Categories,description)  values ('$t','$a','$fn','$fn1','$c','$d') ";


    if(mysqli_query($conn,$sql)){
 
        header("Location: dashboard.php");
    }
    else{
        echo "Error";
    }
}
 
 
?>