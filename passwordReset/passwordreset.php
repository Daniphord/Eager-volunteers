<?php 
include ('../site_includes/connect.php');
include ('../site_includes/functions.php');
$page = 'pwd_reset_page';
?>
<!DOCTYPE html>

<html>
<head>
    <title><?php echo $page;?> </title>      
    <meta charset="utf-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
include ('../site_includes/head.php'); 
?>
            

</head>
    <body>
        
            <div class="maindiv">
            
                <?php include ('../site_includes/siteheader.php'); ?>
                
                 <div class="logginform_wrapper">
                
                <h2 class='maindivh2'>Enter Your Email Address</h2>
                <br>
                
                <form class="logginform col-6" action="passwordresetscript.php"  method="POST">
                    <br>
                    <input type="email" name ="email" placeholder="Enter Your Email Here"><br>
                    
                    <input type="submit" name="submit" value="SEND" class="submit">
                </form>

<?php
            if(isset($_GET['reset'])){
                
                if($_GET['reset']=="success"){
                 
                 echo '<p class="resetpwd_success">Please Check Your Email Please</p><br><br>';
                    
                }elseif($_GET['reset']=="empty"){
                    
                    
                 echo '<p class="resetpwd_success">Filled was empty, make sure you type your email.</p><br><br>';   
                    
                }
                
                
            }

        
        
?>    </div>


 </div> 
        
    <?php include ('../site_includes/sitefooter.php'); ?>

</body>

   <?php include ('../site_includes/jscodes_includer.php'); ?>
</html>