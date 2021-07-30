<?php

function check_login($con)
{
    if(isset($_SESSION['user_id']))
    {
      
        $id=$_SESSION['user_id'];
        $query = "select * from users where user_id = '$id' limit 1";

        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows($result) > 0)
          {

            $user_data =  mysqli_fetch_assoc($result);
            return $user_data;
          }
    }
    //redirect to login
    header("Location: login.php");
    die;

}

function random_num($length)
{
  $text = "";
  if($length<5)
  {
      $length = 5;
  }
  $len = rand(4,$lenght);
   for($i = 0; $i < $len; $i++)
   {
     
    $text .=rand(0,9);

   }
return $text;
}
function function_alert($message) {
      
  // Display the alert box 
  echo "<script>alert('$message');</script>";
}
function Rem($str){
      
    // Using str_ireplace() function 
    // to replace the word 
    $res = str_ireplace( array( '\'', '"',
    '_' , ';', '<', '>' ), ' ', $str);
      
    // returning the result 
    return $res;
    }
    function getFirstSentence($string)
    {
        // First remove unwanted spaces - not needed really
        $string = str_replace(" .",".",$string);
        $string = str_replace(" ?","?",$string);
        $string = str_replace(" !","!",$string);
        // Find periods, exclamation- or questionmarks with a word before but not after.
        // Perfect if you only need/want to return the first sentence of a paragraph.
        preg_match('/^.*[^\s](\.|\?|\!)/U', $string, $match);
        return $string;
    } 