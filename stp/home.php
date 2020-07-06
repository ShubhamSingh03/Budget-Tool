<!--db connection -->
<?php
    include 'includes/common.php';
?>
<!DOCTYPE html>
<html>
<head>
    <!--Links-->
    <?php
     include 'includes/links.php'; 
    ?>
    <title>Home | Budget Tool</title>
</head>
<body>
    <!-- Header-->
    <?php
            include 'includes/header.php';
       
          //$user_id = $_SESSION['user_id'];
          // $email = $_SESSION['email'];
        ?>
    <!-- Header End -->

    <!-- Main -->
        <div class="content">
            <div class="container-fluid">
                    <?php
                        echo "<h3 class='text-center'>You don't have any active plans </h3>";
                    ?>
                <br>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading"></div>
                            <div class="panel-body"><a href="add-expense.php" target="_blank"><span class="glyphicon glyphicon-plus-sign"></span>Create new Plan/Expense</a></div>
                            
                        </div>
                    </div>
                </div><!--/.row-->
            </div><!--/.container-fluid-->
        </div><!--/.content-->
    <!--Footer-->   
    <?php
        include './includes/footer.php';
    ?>
</body>
</html>
