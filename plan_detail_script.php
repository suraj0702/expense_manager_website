<?php
require 'common2.php';
$con = mysqli_connect("localhost", "root", "", "expense_manager") or die(mysqli_error($con));
$title = mysqli_real_escape_string($con,$_POST['title']);
$from_date = $_POST['from_date'];
$to_date = $_POST['to_date'];
$person_1 = mysqli_real_escape_string($con,$_POST['person_1']);
$person_2 = mysqli_real_escape_string($con,$_POST['person_2']);
//$initial_budget = $_POST['initial_budget'];
//$people = $_POST['people'];
$user_registration_query = "insert into plan_detail(title,from_date,to_date,person_1,person_2) values ('$title','$from_date','$to_date','$person_1','$person_2')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
//echo "User successfully inserted";

$_SESSION['to_date']=$to_date;
$_SESSION['from_date']=$from_date;
$_SESSION['person_1']=$person_1;
$_SESSION['person_2']=$person_2;
$_SESSION['amount_spent']=0;
$_SESSION['amount_spent2']=0;
header('location:viewplan1.php');

?>

