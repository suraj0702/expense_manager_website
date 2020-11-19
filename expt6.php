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
                margin-left:300px;
                margin-bottom: 150px;
            }
            .hover_item:hover{
                background-color:green;
                color: white;
            }
            footer {
                padding: 10px 0;
                background-color: #101010;
                color: #9d9d9d;
                bottom: 0;
                width: 100%;
            }
        </style>
    </head>
    <body>
        <?php
      include 'header1.php';
      ?>
         <div class="container">
              <div class="row row_style">
                  <div class="col-xs-8">
                      <div class="panel panel-default">
                          <div class="panel-heading" style="background-color:#2E8B57; border:1px #2E8B57 solid; color: white;">
                              <center>
                      <h1>Create New Plan</h1>
                              </center>
                          </div>
                          <div class="panel-body">
                              <form>
                         
                          <div class="form-group">
                              <label for="initial budget">Initial Budget</label>
                              <input type="number" class="form-control" name="initial budget" id="initial budget"
                                     placeholder="Initial Budget(Ex. 4000)" required="true" min="0">
                             
                          </div>
                          <div class="form-group">
                              <label for="how many people you want to add in your group?">How many people you want to add in your group?</label>
                              <input type="number" class="form-control" name="how many people you want to add in your group?"
                                     placeholder="No. of people" reuired="true" min="0">
                             
                          </div>
                            <center>
                             
                                <button style="border:1px #2E8B57 solid;" class="btn btn-default btn-block">
                                    <a href="plan_details.php" style="color:#2E8B57; text-decoration: none;">Next</a></button>
                               
                              </center>
                          </div>
                      </form>
                      </div>
                  </div>
              </div>
         </div>
           <?php
      include 'footer.php';
      ?>
     
    </body>
</html>
