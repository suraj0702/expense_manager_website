<?php
$con=mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($con));
$select_query="SELECT id,email,first_name FROM users";
$select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con)); 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
	<link rel="stylesheet" href="bootstrap4/bootstrap44/css/bootstrap.css">

    <title>bootstrap form n table</title>
  </head>
  <body>
    <div class="container">
<?php while($row=mysqli_fetch_array($select_query_result)) {?>
	
	<div class="row">
	
         <div class="col-lg-12"><h4>user  </h4></div>
    </div>
	
	<div class="row">
	
         <div class="col-xs-2">ID</div>
		  <div class="col-xs-10"><?php echo $row['id']; ?></div>
		 
    </div>
	
	<div class="row">
	
         <div class="col-xs-2">EMAIL</div>
		  <div class="col-xs-10"><?php echo $row['email']; ?></div>
		 
    </div>
	
	<div class="row">
	
         <div class="col-xs-2">FIRST NAME</div>
		  <div class="col-xs-10"><?php echo $row['first_name']; ?></div>
		 
    </div>
	
<?php}?>	
<hr/>
	
	
	

</div>
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>