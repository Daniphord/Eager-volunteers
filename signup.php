<html>

<head>
<style>

h1, h2, h3, h4, p{
margin:0;
padding:0;
}

</style>


</head>


</html>

<?php $page = "Signup"; ?>
<?php include('includes/header.php'); ?>


<?php include('includes/navbar.php'); ?>

        
        
    
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