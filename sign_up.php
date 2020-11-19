<?php
require 'common2.php';
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
            .top_margin{
                margin-top:20px;
            }
			footer{
                padding: 10px 0;
                background-color: #101010;
                color: #9d9d9d;
                bottom: 0;
                width: 100%;
				margin-top:21px;
				
            }
        </style>
    </head>
</head>
<body>
<?php
include 'header.php';


?>

    <div class="container">
        <div style="margin-top:90px" class="row top_margin">
            <div class="col-xs-4 col-xs-offset-4">
                <div class="panel panel-primary">
                    <div style="text-align:center; background-color:white; color:black;" class="panel-heading"><h4>Sign Up</h4></div>
                    <div class="panel-body">
                        <form method="POST" action="user_signup_script.php">
                           
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" placeholder="Name" class="form-control" id="name" name="name">
                            </div>
							<div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" placeholder="Enter Valid Email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="last_name">password:</label>
                                <input type="password" class="form-control" placeholder="Password(Min.6 characters)" required = "true" pattern=".{6,}" id="password" name="password">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number:</label>
                                <input type="number" placeholder="Enter Valid Phone Number(Ex:8448444855)" class="form-control" id="phone" name="phone">
                            </div>
							<button type="submit" style="background-color:#52BE80 " class="btn btn-primary btn-lg btn-block" value=”registration_submit”>Sign up</button>

                          
                        </form>
                    </div>
                </div>
            </div>
        </div>
		
    </div>
	
	<?php	
include 'footer.php';
?>
	


</body>

</html>