<?php 
	$cononical_value = "https://www.eagervolunteers.com/passwordReset/passwordreset.php";
	$page_title = "Reset your password to regain access to your account"; 
	$meta_description = "If you are locked out of your account you have the change to reset your password her. It is important that you have access to your account.";
	$meta_keywords = "charity, volunteer placement, volunteering in Tanzania, community support,accommodation, community work, volunteer opportunity, Tanzania volunteer work, Tanzania";
	$meta_property_og_title = "Eager Volunteers passwordreset page";
	$meta_property_og_description = "If you are locked out of your account you have the change to reset your password her. It is important that you have access to your account.";
	$meta_property_og_url = "passwordreset.php";

	include ('./includes/connect.php');
	include ('./includes/functions.php');

	include('./includes/header.php');

	include('./includes/mobile_navbar.php'); 
	include('./includes/main_navbar.php'); 
	include('./includes/secondary_navbar.php');
	
?>

            

</head>
    <body>
        
            <div class="maindiv">
            
                      
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
        
 <?php include_once('./includes/footer.php'); ?>

</body>


</html>