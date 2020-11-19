<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "expense_manager") or die(mysqli_error($con));
$title = mysqli_real_escape_string($con, $_POST['title']);
$date = mysqli_real_escape_string($con, $_POST['date']);
$amount_spent = $_POST['amount_spent'];
$person = $_POST['person'];
$upload_bill = $_POST['upload_bill'];
$user_registration_query = "insert into expense2( title,date,amount_spent, person,upload_bill) values ('$title','$date' ,'$amount_spent','$person','$upload_bill')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));

//echo "User successfully inserted";

//$_SESSION['email']=$email;
//$_SESSION['id']=mysqli_insert_id($con);

$_SESSION['date2']=$date;
$_SESSION['amount_spent2']=$amount_spent;
$_SESSION['person']=$person;
echo("<script>location.href='second_expense.php'</script>");
?>