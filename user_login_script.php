<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "expense_manager") or die(mysqli_error($con));
$email = $_POST['email'];
$password =$_POST['password'];
//$password=md5($password);
$sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		
		$_SESSION['id'] = $row["id"];
		$_SESSION['email'] = $row["email"];
	}
	//echo " email or password";
	header("Location: home_page.php");
}
else
{
	echo "Invalid email or password";
}


?>














