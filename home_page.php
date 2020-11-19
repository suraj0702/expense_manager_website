
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
				margin:auto;
				
            }
			#plan{
				font-size:30px;
				margin:auto;
				
			}
			 #content{
              
                padding-top: 90px;
              
               
                background-color: rgba(0,0,0,0.7);
                max-width: 200px;
				height:200px;
				text-align:center;
				
            }
            #inner_image{
                padding-top: 12%;
                width: 30%;
			
                margin:0px 0px 20px 100px;
            }
			#pos{
			position:relative;
			bottom:100px;
			right:100px;
				
			}
			
			#back_image{
                padding-top: 75px;
                padding-bottom: 50px;
                color:black;
                background:url("image/img10.jpg")no-repeat center;
                background-size: cover;
				
            }
			a{
				font-size:19px;
				
			}
        </style>
    </head>
</head>
<body>
<?php
include 'header1.php';
?>
<div id="back_image">
    <div class="container">
	<p id="plan">you dont have any active plans    </p>
	<div id="pos">
	<center>
        <div id="inner_image">
                <div id="content">
		       
		<a href="new_plan.php"><span class="glyphicon glyphicon-plus-sign"></span><b>create a new plan</b></a>
		
		</div>
		
    </div>
	</center>
	
	</div>
  </div>
  </div>
	<?php
include 'footer.php';
?>
	


</body>

</html>