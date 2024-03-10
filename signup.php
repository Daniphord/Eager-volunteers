<?php
$cononical_value = "https://eagervolunteers.com/signup.php";
$page_title = "Signup to get the most off our it | Eager Volunteers"; 
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
         <!-- The main contant goes here -->
         
                    
                				<h2>Signup Below</h2>
                			
             <form action="signupscript.php" class="logginform col-6" method="POST">
				
				<br>
					<input type="text" name="fullname" placeholder="Full Name"><br>
					<input type="text" name="username" placeholder="User Name"><br>
					<input type="text" name="email" placeholder="Enter Your Active Email Address"><br>
					<input type="password" name ="password" placeholder="Password"><br>
					<input type="password" name="password2" placeholder="Confirm Password"><br>
					<input type="submit" name="submit" Value="SIGNUP" class="submit">
                </form>
                	
            </div>
     
   
 <?php include ('includes/footer.php'); ?>
</body>
</body>
</html>