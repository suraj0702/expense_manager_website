<?php
require 'common2.php';
?>
<html>
    <head>
        <title>view plan1</title>
        <!--        Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!--jQuery library-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <style>
             .row_style{
                margin-top: 100px;
                margin-bottom:80px;
            }
            footer{
                padding: 10px 0;
                background-color: #101010;
                color: #9d9d9d;
                bottom: 0;
                width: 100%;
                margin-top: 10px;
            }
        </style>
          </head>
    <body>
        <?php
      include 'header1.php';
      ?>
<div class="container">
            <div class="row row_style">
                <h1>You Plans</h1><br>
                <div class="col-xs-5">
                    <div class="panel panel-default">
                        <div style="color: white; text-align: center; height: 100px; background-color: #2E8B57;" class="panel-heading">
                            <h2>My first Plan</h2>
                            <h4><div style="float:right;" ><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['people'];?></div></h4>
                        </div>
                            <div class="panel-body">
                            <div style="margin-top:30px;" class="table-responsive">
                            <table>
                                <tbody>
                                    <tr>
                                        <td  style="padding-bottom: 30px;"><b>Budget</b></td>
                                        <td style="padding-left: 310px; padding-bottom: 30px;">&#8377 <?php ;echo $_SESSION['initial_budget']
										?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Date</b></td>
                                        <td style="padding-left: 195px;"><?php echo $_SESSION['from_date']; echo"-"; echo $_SESSION['to_date'];?></td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                           
                            <a style="text-decoration: none;color:#2E8B57;" href="view_plan.php"><button style="border-color:#2E8B57; margin-top: 30px;" class="btn btn-default btn-block">View Plan</button></a>
							
							
                        </div>
                       
                    </div>
                </div>
            </div>
    
           <h1> <a href="new_plan.php"><span style="float:right; color:#2E8B57; " class="glyphicon glyphicon-plus-sign"></span></a></h1>
</div>
         <?php
      include 'footer.php';
      ?>
     
    </body>
</html>
