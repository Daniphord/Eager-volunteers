<?php 
	$cononical_value = "https://www.eagervolunteers.com/passwordReset/createnewpassword.php";
	$page_title = "Create a New Password Here"; 
	$meta_description = "If you have forgotten your password you can easily create a new one right here, It is important for you to regain access to your account.";
	$meta_keywords = "charity, volunteer placement, volunteering in Tanzania, community support,accommodation, community work, volunteer opportunity, Tanzania volunteer work, Tanzania";
	$meta_property_og_title = "Eager Volunteers Createnewpassword page";
	$meta_property_og_description = "If you have forgotten your password you can easily create a new one right here, It is important for you to regain access to your account.";
	$meta_property_og_url = "passwordReset/createnewpassword.php";

	include ('./includes/connect.php');
	include ('./includes/functions.php');

	include('./includes/header.php');

	include('./includes/mobile_navbar.php'); 
	include('./includes/main_navbar.php'); 
	include('./includes/secondary_navbar.php');
	
?>
	

    <div class="maindiv">  
 
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
        
  <?php include_once('../includes/footer.php'); ?>

   </body>


</html>  