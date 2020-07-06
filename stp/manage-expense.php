<?php  
session_start();
error_reporting(0);
include('includes/common.php');
//code deletion
if(isset($_GET['delid']))
{
  $rowid=intval($_GET['delid']);
  $query=mysqli_query($con,"delete from tblexpense where ID='$rowid'");
  if($query)
  {
    echo "<script>alert('Record successfully deleted');</script>";
    echo "<script>window.location.href='manage-expense.php'</script>";
  }
  else
  {
    echo "<script>alert('Something went wrong. Please try again');</script>";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage Expense | Budget Tool</title>
	<?php
        include 'includes/links.php';
        ?>
</head>
<body>
    <?php
        include_once('includes/header.php');
    ?>
    <div class="content">
        <div class="container">
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
            <div class="row">
		<div class="col-lg-12">
		    <div class="panel panel-default">
			<div class="panel-heading">
                            <center>
                                <h3>Manage Expense</h3>
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
							
			       <div class="table-responsive">
                                   <table class="table table-bordered mg-b-0">
                                    <thead>
                                        <tr>
                                           <th>S.NO</th>
                                           <th>Expense Item</th>
                                           <th>Expense Cost</th>
                                           <th>Expense Date</th>
                                           <th>Action</th>
                                        </tr>
                                    </thead>
                                <?php
                                      $userid=$_SESSION['detsuid'];
                                      $ret=mysqli_query($con,"select * from tblexpense where UserId='$userid'");
                                      $cnt=1;
                                      while ($row=mysqli_fetch_array($ret)) 
                                      {

                                ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $cnt;?></td>
              
                                        <td><?php  echo $row['ExpenseItem'];?></td>
                                        <td><?php  echo $row['ExpenseCost'];?></td>
                                        <td><?php  echo $row['ExpenseDate'];?></td>
                                        <td><a href="manage-expense.php?delid=<?php echo $row['ID'];?>">Delete</a>
                                    </tr>
                                <?php 
                                   $cnt=$cnt+1;
                                      }
                                ?>
               
                       </tbody>
                    </table>
                </div>
	    </div>
	</div>
    </div><!-- /.panel-->
  </div><!-- /.col-->
            <center>
                <div class="goback">
                    <a href="add-expense.php" target="_blank" class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span>Go Back</a>
                </div><br><br>
            </center>
   </div><!-- /.row -->
</div><!--/.main-->
       
</div>
        <div class="container">
         <div class="row">
            <div class=" col-xs-offset-6 col-xs-2">
                <div class="btn-signup">
                    <?php
                                  echo  '<a href="expensereport" target="_blank" name="submit" value="submit" class="btn btn-block btn-default">Expense Report</a>'
                                  ?>
                </div>
            </div>
        </div>
        </div>
    </div><!--/.content -->
<!-- Footer-->
<?php
   include_once('includes/footer.php');
?>
</body>
</html>
