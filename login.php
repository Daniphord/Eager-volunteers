<?php
$cononical_value = "https://eagervolunteers.com/login.php";
$page_title = "Affordable Safaris | Eager Volunteers"; 
$meta_description = "When volunteering with us, you are also able to book an affordable trip to one of the greatest tourism sites.";
$meta_keywords = "affordable safaris, cheap accommodation, budget safaris, cheap volunteer placement";
$meta_property_og_title = "Eager Volunteers Safaris page";
$meta_property_og_description = "When volunteering with us, you are also able to book an affordable trip to one of the greatest tourism sites.";
$meta_property_og_url = "https://www.eagervolunteers.com/safaris.php";

?>


<?php include('includes/header.php'); ?>

<?php include('./includes/mobile_navbar.php'); ?>
<?php include('./includes/main_navbar.php'); ?>
<?php include('./includes/secondary_navbar.php'); ?>


        
       
              
                    <div class="logginform_wrapper">
                          
                			<h2 class='maindivh2'>Already a member? Login here</h2>
                				                		       
                				<form class="logginform col-6" action="loginscript.php"  method="POST">
                					<br>
                					<input type="text" name="userloginid" placeholder="Username/E-mail"><br>
                					<input type="password" name ="userpwd" placeholder="Password">
                					<input type="submit" name="submit" value="LOGIN" class="submit">
                				</form>
            
            
                            <?php if(isset($_GET['newpwd'])){
                            
                            if($_GET['newpwd']=="pwdupdated"){
                            
                            echo '<p class="resetpwd_success">Your password was successfully reset! You can log in with your new password.</p>';
                            
                            }
                            
                            }
                            
                            ?>
                          				
                				
                		<h3  class="forgot_password" ><span ><a href="passwordReset/passwordreset.php">Forgot password?</a></span></h3>
                    </div>
            
           
        
    <?php include ('includes/footer.php'); ?>
</div>
</body>

 </html>