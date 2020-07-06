<?php
session_start();
error_reporting(0);
include('includes/common.php');

  ?>
<!DOCTYPE html>
<html>
<head>
    <title>Expense Monthwise Reports | Budget Tool</title>
    <?php
      include 'includes/links.php';
     ?>
</head>
<body>
    <!--Header -->
    <?php
        include_once('includes/header.php');
    ?>
    <!-- Main -->
    <div class="content">
        <div class="container">
	    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
         	<div class="row">
		    <div class="col-lg-12">
		        <div class="panel panel-default">
			    <div class="panel-heading">
                                <center>
                                    <h4>Monthwise Expense Report</h4>
                                </center>
                            </div>
			    <div class="panel-body">
				<p style="font-size:16px; color:red" align="center">
                                <?php if($msg)
                                {
                                  echo $msg;
                                }  
                                ?>
                                </p>
			        <div class="col-md-12">
                                    <form role="form" method="post" action="expense-monthwise-reports-detailed.php" name="bwdatesreport">
				        <div class="form-group">
					    <label>From Date</label>
					    <input class="form-control" type="date"  id="fromdate" name="fromdate" required="true">
					</div>
					<div class="form-group">
					    <label>To Date</label>
					    <input class="form-control" type="date"  id="todate" name="todate" required="true">
					</div>
                                      	<div class="form-group has-success">
                                            <center>
                                                <button type="submit" class="btn btn-primary" name="submit">Submit</button></center>
					</div>
	                        </div>
								
				    </form>
			    </div>
			</div>
		    </div><!-- /.col-->
		</div><!-- /.row-->
			
	    </div><!-- /.row -->
	</div><!--/.container-->
    </div><!-- /.content-->
    
<!-- Footer-->	
<?php 
  include_once('includes/footer.php');
?>
</body>
</html>
