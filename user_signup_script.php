<?php
//session_start();
$con = mysqli_connect("localhost", "root", "", "expense_manager") or die(mysqli_error($con));
$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = $_POST['password'];
//$password=md5($password);
$phone = $_POST['phone'];
$user_registration_query = "insert into user( name,email,password, phone) values ('$name','$email' ,'$password', '$phone')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
header("Location: login.php");
//echo "User successfully inserted";

//$_SESSION['email']=$email;
//$_SESSION['id']=mysqli_insert_id($con);
?>
