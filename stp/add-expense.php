<?php
session_start();
error_reporting(0);
include('includes/common.php');
//database connection

if(isset($_POST['submit']))
  {
   	$userid=$_SESSION['detsuid'];
        $dateexpense=$_POST['dateexpense'];
        $item=$_POST['item'];
        $costitem=$_POST['costitem'];
        $query=mysqli_query($con, "insert into tblexpense(UserId,ExpenseDate,ExpenseItem,ExpenseCost) value('$userid','$dateexpense','$item','$costitem')");
    if($query)
    {
      echo "<script>alert('Expense has been added');</script>";
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
    <title>Add Expense | Budget Tool</title>
        <!-- Links -->
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
                <div class="row">
	            <div class="col-xs-7 col-xs-offset-3 main">
	         	<div class="panel panel-default">
			    <div class="panel-heading">
                                <center>
                                    <h3>Add Expense</h3>
                                </center>
                            </div>
		            <div class="panel-body">
                                <div class="col-lg-12">
				  <p style="font-size:16px; color:red" align="center"> 
                                    <?php if($msg)
                                    {
                                       echo $msg;
                                    } 
                                    ?> 
                                  </p>
				<div class="col-md-12">
							
				    <form role="form" method="post" action="">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input class="form-control" type="text" placeholder="Title (Ex. Trip to Ladakh)" name="title"  required>
                                        </div>
					<div class="form-group">
					     <label>Date of Expense</label>
					     <input class="form-control" type="date" value="" name="dateexpense" required="true">
					</div>
					<div class="form-group">
					     <label>Item</label>
                                             <input type="text" class="form-control" name="item" value="" placeholder="Name of item purchased"required="true">
					</div>
                                        <div class="form-group">
					     <label>Cost of Item</label>
                                             <input class="form-control" type="text" value="" placeholder="Price of item"required="true" name="costitem">
					</div>
				        <div class="form-group">
                                             <label for="noofperson">No. of Person</label>
                                             <input type="text" id="noofperson" class="form-control" name="noofperson" value="<?php echo $_POST['noofperson']; ?>" placeholder="No. of Person" required="true">
                                        </div>		
                                        <div class="form-group">
                                             <label for="upbill">Upload Bill</label>
                                             <input type="file" class="form-control" placeholder="" name="filetype">
                                        <?php
                                        function GetImageExtension($imagetype)
                                        {
                                          if(empty($imagetype)) return false;
                                           switch($imagetype)
                                            {
                                               case 'image/bmp': return '.bmp';
                                               case 'image/gif': return '.gif';
                                               case 'image/jpeg': return '.jpg';
                                               case 'image/png': return '.png';
                                               default: return false;
                                            }
                                        }
                                        if (!empty($_FILES["uploadedimage"]["name"])) 
                                        {
                                          $file_name=$_FILES["uploadedimage"]["name"];
                                          $temp_name=$_FILES["uploadedimage"]["tmp_name"];
                                          $imgtype=$_FILES["uploadedimage"]["type"];
                                          $ext= GetImageExtension($imgtype);
                                          $imagename=date("d-m-Y")."-".time().$ext;
                                          $target_path = "img/".$imagename;
                                          if(move_uploaded_file($temp_name, $target_path))
                                          {
                                                 // Make a query to save data to your database.
                                          }
                                        }
                                      ?>

                                        </div>
				        <div class="form-group has-success">
					    <button type="submit" class="btn btn-block btn-default" name="submit">ADD EXPENSE</button>
					</div>
		                </div>
		                    </form>
			        </div>
			    </div>
			</div><!-- /.panel-->
		    </div><!-- /.col-->
			
	</div><!-- /.row -->
	</div><!--/.container-->
    </div><!--/.content-->

 <!-- Footer-->
<?php 
   include_once('includes/footer.php');
?>
</body>
</html>
