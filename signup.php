<?php
$cononical_value = "https://www.eagervolunteers.com/signup.php";
$page_title = "Signup to our website to get more information about our programs"; 
$meta_description = "By signing up you get connect with us so that we can exchange messages about your volunteer placement with us. Let's communicate.";
$meta_keywords = "Login, siginup, volunteers, safaris, cheap accommodation, budget safaris, cheap volunteer placement";
$meta_property_og_title = "Eager Volunteers Signup page";
$meta_property_og_description = "By signing up you get connect with us so that we can exchange messages about your volunteer placement with us. Let's communicate.";
$meta_property_og_url = "https://www.eagervolunteers.com/signup.php";


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