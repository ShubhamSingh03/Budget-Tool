<?php
  include('includes/common.php');
  error_reporting(0);
  if (isset($_SESSION['detsuid'])) {
     header('location: home.php');
  } else{
  if(isset($_POST['submit']))
  {
    $userid=$_SESSION['detsuid'];
    $cpassword=md5($_POST['currentpassword']);
    $newpassword=md5($_POST['newpassword']);
    $query=mysqli_query($con,"select ID from tbluser where ID='$userid' and   Password='$cpassword'");
    $row=mysqli_fetch_array($query);
     if($row>0)
     {
        $ret=mysqli_query($con,"update tbluser set Password='$newpassword' where ID='$userid'");
        $msg= "Your password successully changed"; 
     }    
     else 
     {
        $msg="Your current password is wrong";
     }
   }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Change Password | Budget Tool</title>
    <?php 
      include 'includes/links.php';
    ?>
    <script type="text/javascript">
       function checkpass()
       {
          if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
          {
             alert('New Password and Confirm Password field does not match');
             document.changepassword.confirmpassword.focus();
             return false;
          }
          return true;
        } 
    </script>
</head>
<body>
    <?php include_once('includes/header.php');?>
    <div class="content">
        <div class="container">	
	    <div class="col-xs-6 col-sm-offset-3 main">
		<div class="row">
		    <div class="col-lg-12">
			<div class="panel panel-default">
			    <div class="panel-heading">
                                <center>
                                    <h3>Change Password</h3>
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
                                  
				   
				    <form role="form" method="post" action="" name="changepassword" onsubmit="return checkpass();">
								<div class="form-group">
									<label>Current Password</label>
                                                                        <input type="password" name="currentpassword" class=" form-control" required= "true" placeholder="Type your Current Password" value="">
								</div>
								<div class="form-group">
									<label>New Password</label>
                                                                        <input type="password" name="newpassword" class="form-control" placeholder="Type your New Password" value="" required="true">
								</div>
								
								<div class="form-group">
									<label>Confirm Password</label>
                                                                        <input type="password" name="confirmpassword" class="form-control" value="" placeholder="Confirm new password" required="true">
								</div>
								
								<div class="form-group has-success">
									<button type="submit" class="btn btn-block btn-default" name="submit">Change</button>
								</div>
								
								
								</div>
                                  
							</form>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
			
		</div><!-- /.row -->
	</div><!--/.container-->
    </div>
<!-- Footer -->  
<?php 
  include_once('includes/footer.php');
?>
</body>
</html>
  <?php } ?>