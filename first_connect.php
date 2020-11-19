<?php
mysqli_connect("localhost","root","suraj12345@");

if(mysqli_connect_error()){
  echo "there was an error in connecting datbase";
  }
else{
   echo"database connection successful";
}  
?>