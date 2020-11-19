<?php
require 'common2.php';
?>
<html>
    <head>
        <title>first expense</title>
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
      require 'header1.php';
      ?>

<div class="container">
            <div class="row row_style">
                <div class="col-xs-8">
                    <div class="panel panel-default">
                        <div style="color: white; text-align: center; height: 100px; background-color: #2E8B57;" class="panel-heading">
                            <h2>My first Plan</h2>
                            <h4><div style="float:right;" ><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['people']?> </div></h4>
                        </div>
                            <div class="panel-body">
                            <div style="margin-top:20px;" class="table-responsive">
                            <table>
                                <tbody>
                                    <tr>
                                        <td style="padding-bottom: 20px;"><b>Budget</b></td>
                                        <td style="padding-left: 450px; padding-bottom: 20px;">&#8377 <?php echo $_SESSION['initial_budget'];?></td>
                                    </tr>
                                    <tr>
                                        <td style="padding-bottom: 20px;"><b>Remaining Amount</b></td>
                                        <td style="padding-left: 450px; padding-bottom: 20px;">&#8377<b><?php echo $_SESSION['rmn_amt']-$_SESSION['amount_spent'];?></b>
                                           
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Date</b></td>
                                        <td style="padding-left: 290px;"><?php echo $_SESSION['from_date']; echo"-"; echo $_SESSION['to_date'];?></td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            </div>
                    </div>
                </div>
                <a style="  text-decoration: none;" href="expense_distribution.php"><button style="border-color: #2E8B57;
                 float:right; color: #2E8B57; margin-bottom:500px;" class="btn btn-lg btn-default">Expense Distribution</button></a>
                 
                  <div class="col-xs-4">
                      <div class="panel panel-default">
                          <div style="background-color: #2E8B57; color: white; text-align: center;" class="panel-heading">
                            <h2>My First Expense</h2>
                        </div>
                           <div class="panel-body">
                            <div style="margin-top:20px;" class="table-responsive">
                            <table>
                                <tbody>
                                    <tr>
                                        <td style="padding-bottom: 20px;"><b>Amount</b></td>
                                        <td style="padding-left: 180px; padding-bottom: 20px;">Rs.<?php echo $_SESSION['amount_spent'];?>
										</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-bottom: 20px;"><b>Paid by</b></td>
                                        <td style="padding-left: 180px; padding-bottom: 20px;"><?php echo $_SESSION['person'];?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Paid On</b></td>
                                        <td style="padding-left: 170px;"><?php echo $_SESSION['date1'];?></td>
                                    </tr>
                                </tbody>
                            </table>
                      </div>
                               
                  </div>
                      </div>
                  </div>
                           
             
               
                <div style="float:right; margin-top: 50px;" class="col-xs-5 col-xs-offset-7">
                    <div class="panel panel-default">
                        <div style="background-color: #2E8B57; color: white; text-align: center;" class="panel-heading">
                            <h2>Add New Expense</h2>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="first_expense_script.php">
                                <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Expense Name">
                        </div>
                                 <div class="form-group">
                                <label for="date">Date</label><br>
                            <input type="date" class="form-control" name="date" id="date" placeholder="dd/09/2019" min="2019-09-01">
                            </div>
                                <div class="form-group">
                        <label for="amount_spent">Amount Spent</label>
						
                        <input type="number" class="form-control" name="amount_spent" id="amount_spent" placeholder="Amount Spent" min="0"
						
>
                        </div>
                                <select class="form-control" name="person" id="person">
                                   <option><?php echo $_SESSION['person_1']?></option> 
									<option><?php echo $_SESSION['person_2']?></option>
                                </select><br>
                                <div class="form-group">
                        <label for="upload_bill">Upload Bill</label>
                        <input type="file" class="form-control" name="upload_bill" id="upload_bill" placeholder="No file chosen">
                        </div>
                                <a href="second_expense.php"><button style="border-color: #2E8B57; color: #2E8B57;" class="btn btn-default btn-block">Add</button></a>
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