<html>
    <head>
        <title>Index Page</title>
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
                <div class="col-xs-7">
                    <div class="panel panel-default">
                        <div style="color: white; text-align: center; height: 100px; background-color: #2E8B57;" class="panel-heading">
                            <h2>My first Plan</h2>
                            <h4><div style="float:right;" ><span class="glyphicon glyphicon-user"></span> 2</div></h4>
                        </div>
                            <div class="panel-body">
                            <div style="margin-top:20px;" class="table-responsive">
                            <table>
                                <tbody>
                                    <tr>
                                        <td style="padding-bottom: 20px;"><b>Budget</b></td>
                                        <td style="padding-left: 410px; padding-bottom: 20px;">&#8377 10000</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-bottom: 20px;"><b>Remaining Amount</b></td>
                                        <td style="padding-left: 410px; padding-bottom: 20px;">
                                           
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Date</b></td>
                                        <td style="padding-left: 290px;">20th Sep - 30th Sep 2019</td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            </div>
                    </div>
                </div>
                <button style="border-color: #2E8B57; margin-top: 50px; margin-left: 200px;" class="btn btn-lg btn-default">
                    <a style=" text-decoration: none; color: #2E8B57;" href="expense_distribution.php">Expense Distribution</a></button>
               
                <div style="float:right; margin-top: 50px;" class="col-xs-5 col-xs-offset-7">
                    <div class="panel panel-default">
                        <div style="background-color: #2E8B57; color: white; text-align: center;" class="panel-heading">
                            <h2>Add New Expense</h2>
                        </div>
                        <div class="panel-body">
                            <form>
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
                        <input type="number" class="form-control" name="amount_spent" id="amount_spent" placeholder="Amount Spent" min="0">
                        </div>
                                <select class="form-control">
                                    <option>Choose</option>
                                </select><br>
                                <div class="form-group">
                        <label for="upload_bill">Upload Bill</label>
                        <input type="file" class="form-control" name="upload_bill" id="upload_bill" placeholder="No file chosen">
                        </div>
                                <button style="border-color: #2E8B57; color: #2E8B57;" class="btn btn-default btn-block">Add</button>
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
