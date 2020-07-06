<!--db connection-->
<?php
    require 'includes/common.php';
    if(isset($_SESSION['email'])){
       header('location:home.php');
     }
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Links for js,jquery and bootstrap-->
    <?php
    include 'includes/links.php';
    ?>
    <title>Login | Budget Tool</title>
</head>
<body>
     <!-- Header -->
     <?php
            include 'includes/header.php';
        ?>
    
    <!-- Main -->
     <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="login-panel panel panel-primary">
                        <div class="panel-heading">
                            <h3>LOGIN</h3>
                        </div>
                        <div class="panel-body">
                            
                            <form role="form" action="login_script.php" method="post" id="" name="login">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" placeholder="Enter Email" name="email" required="true">
                                </div>
                                 <div class="form-group">
                                     <label for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="Enter Password" name="password" required="true">
                                </div>
                                <div class="form-group">
                                <button type="submit" name="Submit" class="btn btn-primary btn-block">Login</button><br><br> 
                                <p> <a href="forgetpwd" target="_blank">Forget Password</a></p>
                            </form>
                        </div>
                        </div>
                        <div class="panel-footer">
                            <p>Don't have an account?<a href="signup.php" target="_blank">Register</a></p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        </div>
     </div>
    <!-- Footer -->
    <?php
        include 'includes/footer.php';
    ?>
  
</body>
</html>
 