<?php
session_start();
error_reporting(0);
include('includes/home.php');
?>
<!DOCTYPE html>
<html>
<head>
    <?php
      include 'includes/links.php';
    ?>
    <title>Forget Password | Budget Tool</title>
</head>
<body>
    <!--Header-->
    <?php
    include 'includes/header.php';
    ?>
    <div class="content">
    <div class="container">
	<div class="row">
            <div class="col-xs-6 col-xs-offset-3">
	        <div class="panel panel-default">
				<div class="panel-heading">
                                    <center>
                                        <h3>Forget Password</h3>
                                    </center>
                                </div>
				<div class="panel-body">
                                    <form>
                                              <div class="form-group">
                                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" required="true">
					      </div>
                                              <div class="form-group">
						<input class="form-control" placeholder="Mobile Number" name="contactno" type="contactno" value="" required="true">
					      </div>
					      <div class="checkbox">
                                                  <button type="submit" value="" name="submit" class="btn btn-primary">Reset</button><span style="padding-left:350px"><a href="login.php" class="btn btn-primary">Login</a></span>
                                           	</div>
				    </form>
				</div>
		</div><!--/.panel-->
	    </div>
	</div><!--/.row-->
    </div>
    </div><!--/.content-->
     <!-- Footer -->
    <?php
        include 'includes/footer.php';
    ?>

</body>
</html>
