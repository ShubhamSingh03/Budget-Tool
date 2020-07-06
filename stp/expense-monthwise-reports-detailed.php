<?php
session_start();
error_reporting(0);
include('includes/common.php');
  ?>
<!DOCTYPE html>
<html>
<head>
    <title>Expense Monthwise Reports Detailed | Budget Tool</title>
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
                                    <h3>Monthwise Expense Report</h3>
                                </center>
                            </div>
			    <div class="panel-body">
                                <div class="col-md-12">
					
                                <?php
                                    $fdate=$_POST['fromdate'];
                                    $tdate=$_POST['todate'];
                                    $rtype=$_POST['requesttype'];
                                ?>
                                <h5 align="center" style="color:blue">Monthwise Expense Report from <?php echo $fdate?> to <?php echo $tdate?></h5>
                                <hr />
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <tr>
                                              <th>S.NO</th>
                                              <th>Month-Year</th>
                                              <th>Expense Amount</th>
                                            </tr>
                                        </tr>
                                    </thead>
                                    <?php
                                       $userid=$_SESSION['detsuid'];
                                       $ret=mysqli_query($con,"SELECT month(ExpenseDate) as rptmonth,year(ExpenseDate) as rptyear,SUM(ExpenseCost) as totalmonth FROM tblexpense  where (ExpenseDate BETWEEN '$fdate' and '$tdate') && (UserId='$userid') group by month(ExpenseDate),year(ExpenseDate)");
                                       $cnt=1;
                                       while ($row=mysqli_fetch_array($ret)) 
                                       {

                                    ?>
              
                                    <tr>
                                       <td><?php echo $cnt;?></td>
                                       <td><?php  echo $row['rptmonth']."-".$row['rptyear'];?></td>
                                       <td><?php  echo $ttlsl=$row['totalmonth'];?></td>
                                    </tr>
                                    <?php
                                      $totalsexp+=$ttlsl; 
                                       $cnt=$cnt+1;
                                    }
                                    ?>
                                    <tr>
                                      <th colspan="2" style="text-align:center">Grand Total</th>     
                                      <td><?php echo $totalsexp;?></td>
                                    </tr>     
                                </table>
                                </div>
			    </div>
			</div><!-- /.panel-->
		    </div><!-- /.col-->
			<center>
                            <div class="goback">
                               <a href="expensereport.php" target="_blank" class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span>Go Back</a>
                            </div><br><br>
                        </center>
		</div><!-- /.row -->
	    </div><!--/.main-->
        </div>
    </div>
	
<!-- Footer -->
<?php 
   include_once('includes/footer.php');
?>
	
</body>
</html>
