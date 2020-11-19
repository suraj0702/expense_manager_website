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
                margin-left: 200px;
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
                <div class="col-xs-9">
                   
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
                                        <td style="padding-bottom: 20px;"><b>Initial Budget</b></td>
                                        <td style="padding-left: 440px; padding-bottom: 20px;">&#8377 10000</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-bottom: 20px;"><b>Person A</b></td>
                                        <td style="padding-left: 475px; padding-bottom: 20px;">&#8377 0</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-bottom: 20px;"><b>Person B</b></td>
                                        <td style="padding-left: 475px; padding-bottom: 20px;">&#8377 0</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-bottom: 20px;"><b>Total amount spent</b></td>
                                        <td style="padding-left: 475px; padding-bottom: 20px;">&#8377 0</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-bottom: 20px;"><b>Remaining Amount</b></td>
                                        <td style="padding-left: 475px; padding-bottom: 20px;"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding-bottom: 20px;"><b>Individual Shares</b></td>
                                        <td style="padding-left: 475px; padding-bottom: 20px;">&#8377 0</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-bottom: 20px;"><b>Person A</b></td>
                                        <td style="padding-left: 475px; padding-bottom: 20px;">&#8377 0</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-bottom: 20px;"><b>Person B</b></td>
                                        <td style="padding-left: 475px; padding-bottom: 20px;">&#8377 0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><br><br>
                        <center>
                        <button style="border-color: #2E8B57;" class="btn btn-default btn-lg"><span style="color: #2E8B57;" class="glyphicon glyphicon-arrow-left">
                                <a style="text-decoration: none; color: #2E8B57;" href="view_plan.php">Go back</a></span></button>
                                </center>
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
