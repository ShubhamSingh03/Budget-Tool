<!--db connection-->
<?php
    require 'includes/common.php';
    //database connection at common.php file
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Budget Tool</title>
       <?php
         include 'includes/links.php';
          //links for javascript,bootstrap,jquery and style.css included here
         ?>
    </head>
    <body>
        <?php
        
         include 'includes/header.php';
          //including code of header bar or navbar here
        ?>
        
         <div class="content">
            <div class="banner-image">
                <center>
                <div class="inner-banner-image">
                    <div class="banner-content">
                        <div>
                            <h2>We help you control your budget</h2>
                            <a href="signup.php" target="_blank" class="button">Start Today</a>
                        </div>
                        
                    </div>
                </div>
                </center>
            </div>
        </div><!--/.content-->
        
    <!--Footer-->
       <?php
        include 'includes/footer.php';
         //including footer bar code here
        ?>
        
    </body>
</html>
