<?php $page = "Login"; ?>
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