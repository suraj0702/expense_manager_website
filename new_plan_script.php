<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "expense_manager") or die(mysqli_error($con));
$initial_budget = $_POST['initial_budget'];
$people = $_POST['people'];

$user_registration_query = "insert into plan(initial_budget,people) values ('$initial_budget','$people')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
$_SESSION['initial_budget']=$initial_budget;
$_SESSION['people']=$people;								
header("Location: plan_detail.php");
//echo "User successfully inserted";
?>
