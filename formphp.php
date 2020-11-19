<?php
session_start();
if (isset($_SESSION['id'])) {
  echo "Hello ".$_SESSION[‘email’];
} else {
  echo "Hello Guest";
}
?>

<html>
<body>
<form action="resgistration.php" method="POST">
<p>email<p><input type="text" name="email">
<p>first_name<p><input type="text" name="first_name">
<p>last_name<p><input type="text" name="last_name">
<p>phone<p><input type="text" name="phone">
<input type="submit" value="send">
<input type="reset" value="clear">



</form>

<body>


</html>
