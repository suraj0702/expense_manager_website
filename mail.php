<?php
$name=$_post('name');
$email=$_post('email');
$message=$_post('message');

$formconent="From:$name \n Message: $message";
$mailTo="surajgupta07021999@gmail.com";
$subject="contact form submission";
$mailheader="Form:$email\r\n";
mail($mailTo,$subject,$formconent,$mailheader) or die("Error!");
echo "thank u";

?>