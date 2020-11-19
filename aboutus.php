<?php
require 'common2.php'

?>

<!DOCTYPE html>
<html>
    <head>
        <title>User sign up form</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
		
		 <style>
          
            
			footer{
                padding: 10px 0;
                background-color: #101010;
                color: #9d9d9d;
                bottom: 0;
                width: 100%;
				margin-top:190px;
				
            }
			#div1{
				margin-top:95px; 
				overflow:auto;
				float:left;
				
			}
			
			#back{
				background-image:url(image/img2.jpg);
				width:100%;
				
			}
        </style>
    </head>
</head>
<body>
<?php
include 'header.php';
?>
 <div class="container" style="margin:0;id="back"">
        <div id="div1">
		<p style="font-size:30px">Who are we?</p>
		<p>we are a group of young technocrats who came up with the idea of solving budget and times<br> issues which we usually face in our daily lives.We are here to provide you a budget<br> controller according to your aspects<br><br>Budget control is the biggest financial issue in the present world.one should look after<br> their budget control to get ride off from their financial crises<br><br></p>
		</div>
		
		<div style="float:right;margin-top:100px;">
		       <p style="font-size:30px"> Why choose us?</p>
			   <p>We provide with predominant way to control and manage your budget estimations with <br>ease of accesssing of multiple users</p>
		</div>
		<div style="clear:both" >   <p style="font-size:30px">contact us</p>
		        <p><b>Email</b>:suraj@gmail.com<br> <br>
		        <b>Mobile</b>:+9861355585 </p>
		
		</div>
		</div>
		
   
	<?php
include 'footer.php';
?>
	


</body>

</html>