<!--DB connection -->
<?php
    include 'includes/common.php';
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Links -->
    <?php
     include 'includes/links.php'; 
    ?>
    <title>Expense Report | Budget Tool</title>
</head>
<body>
    <!--Header -->
    <?php
            include 'includes/header.php';
       
          
     
        ?>
    <!-- Header End -->

    <!-- Main -->
        <div class="content">
            <div class="container-fluid">
                <br>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">
                                <center>
                                    <h3>Expense Report</h3>
                                </center>
                            </div>
                            <div class="panel-body">
                                <div class="btn-signup">
                                 <?php
                                  echo  '<a href="expense-datewise-reports.php" target="_blank" name="submit" value="submit" class="btn btn-default">Day-Wise Expense</a>'
                                  ?>
                                </div>
                                <br>
                                <br>
                                <div class="btn-signup">
                                 <?php
                                  echo  '<a href="expense-monthwise-reports.php" target="_blank" name="submit" value="submit" class="btn btn-default">Month-Wise Expense</a>'
                                  ?>
                                </div>
                            </div><!--/.panel-body -->
                        </div><!--/.panel-->
                    </div><!--/.col-->
                </div><!--/.row-->
            </div><!--/.container-fluid-->
        </div><!--/.content-->
    <!--Footer-->
    <?php
        include 'includes/footer.php';
    ?>
</body>
</html>
