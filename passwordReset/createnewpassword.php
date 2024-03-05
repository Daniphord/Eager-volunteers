    <?php 
    include ('../site_includes/connect.php');
    include ('../site_includes/functions.php');
    $page = 'create_new_pwd';
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
 
<?php 

    $selector = $_GET['selector'];
    $validator = $_GET['token'];
    
    if(isset($selector) && isset($validator)){
    if(empty($selector) || empty($validator)){
    
    echo "We could not validate your request!";
    exit();
    
    
    }else{
         
            

        if(ctype_xdigit($selector)!==false && ctype_xdigit($validator) !==false ){
        ?>
        
         <div class="logginform_wrapper">
            <form class="logginform col-6" action="resetpasswordscript.php"  method="POST">
                <br>
                <input type="hidden" name ="selector" value="<?php echo $selector ?>"><br>
                <input type="hidden" name ="validator" value ="<?php echo $validator ?>"><br>
                <input type="password" name ="newpassword" placeholder ="Enter your new password "><br>
                <input type="password" name ="newpassword2" placeholder ="Confirm new password "><br>
                <input type="submit" name="reset_request_submit" value="RESET" class="submit">
            </form>
            
          </div>
            <?php
          }    
           
      

    }

         
    
    }else{
        
        echo "No values were found!";
    }
    
    ?>    
        </div> 
        
    <?php include ('../site_includes/sitefooter.php'); ?>

   </body>

   <?php include ('../site_includes/jscodes_includer.php'); ?>
</html>  
