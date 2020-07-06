<?php 
session_start();
error_reporting(0);
include('includes/common.php');
if(isset($_POST['submit']))
  {
    $fname=$_POST['name'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $contact=$_POST['mobilenumber'];

    $ret=mysqli_query($con, "select Email from tbluser where Email='$email' ");
    $result=mysqli_fetch_array($ret);
    if($result>0){
       $msg="This email  associated with another account";
    }
    else{
    $query=mysqli_query($con, "insert into tbluser(FullName, Email, Password, MobileNumber) value('$fname','$email', '$password' , '$contact' )");
    if ($query) {
    $msg="You have successfully registered";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }
}
}

 ?>

<!DOCTYPE html>
<html>
<head>
<?php
         include 'includes/links.php';
        ?>
    <title>Sign Up | Budget Tool</title>
   
<body>
    <!-- Header -->
     <?php
         include 'includes/header.php';
      ?>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <!-- Main -->
    
    <div class="content">
        <div class="container">
	<div class="row">
          <div class="col-xs-4 col-xs-offset-4">
			<div class="login-panel panel panel-default">
                            <div class="panel-heading">
                                <center>
                                    <h3>SIGN UP</h3>
                                </center>
                            </div>
			    <div class="panel-body">
			        <form role="form" action="" method="post" id="" name="signup">
				  <p style="font-size:16px; color:red" align="center"> 
                                      <?php if($msg)
                                        { 
                                          echo $msg;
                                        }  ?>
                                  </p>
				   <fieldset>
					<div class="form-group">
                                            <label for="name">Name:</label>
                                            <input class="form-control" placeholder="Enter Name" id="name" name="name" type="text" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" required="true">
					</div>
					<div class="form-group">
                                            <label for="email">Email:</label>
                                            <input class="form-control" placeholder="Enter valid E-mail" id="email" name="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="true">
					</div>
	                           	<div class="form-group">
                                            <label for="password">Password:</label>
                                            <input class="form-control" placeholder="Enter Password(Min. 6 characters)" id="password" name="password" pattern=".{6,}" type="password" value="" required="true">
					</div>
                                        <div class="form-group">
                                            <label for="contact">Contact:</label>
					    <input type="text" class="form-control" id="contact" name="mobilenumber" placeholder="Enter Valid Contact(Ex. 9343232444)" maxlength="10" pattern="[0-9]{10}" required="true">
				        </div>
                              		<div class="checkbox">
					    <button type="submit" value="submit" name="submit" class="btn btn-setting btn-block">Sign Up</button>
                                            <div class="col-xs-9">
                                            <span style="padding-left:250px">
                                                <a href="login.php" target="_blank" class="btn btn-default">Login</a></span></div>
                                      	</div>
                                      
				    </fieldset>
				</form>
			    </div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
       </div>
    </div><!-- /.content-->
<!-- Footer -->
<?php
        include 'includes/footer.php';
?>
</body>
</html>
