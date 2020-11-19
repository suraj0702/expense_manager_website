<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>View Plan</title>
        <style>
            .row{
                margin: 80px;
            }
        </style>
         </head>
    <body>
       
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a href="#" class="navbar-brand">Ct&#8377l Budget </a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="about.us.php"><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
                        <li><a href="changepassword.php"><span class="glyphicon glyphicon-cog"></span>Change Password</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
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
                                        <td style="padding-bottom:20px;"><b>Budget</b></td>
                                        <td style="padding-left: 300px; padding-bottom: 20px;">&#8377 10000</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-bottom: 20px;"><b>Remaining Amount</b></td>
                                        <td style="padding-left: 310px; padding-bottom: 20px;"></td>
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
                    <a style=" text-decoration: none; color: #2E8B57;" href="expensedistribution.php">Expense Distribution</a></button>
               
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
                            <input type="date" class="form-control" name="date" id="date" placeholder="dd/09/2019">
                            </div>
                                <div class="form-group">
                        <label for="amount_spent">Amount Spent</label>
                        <input type="number" class="form-control" name="amount_spent" id="amount_spent" placeholder="Amount Spent">
                                </div>
                                 <select class="form-control">
                                        <option>      Choose </option>
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
         <nav class="navbar navbar-inverse navbar-fixed-bottom">
            <div class="container">
                <div class="navbar-footer">
           
                    <center>
                        <p style="color:#999999;padding-top: 10px;"> Copyright &#169 Control Budget.All Rights Reserved|Contact Us:+91-84448444853. </p>
                    </center>
           
            </div>
            </div>
</nav >
           
    </body>
</html>
