<?php


<div class="mainwrapper">
        <?php include ('../includes/header.php'); ?>
            <div class="maindiv">
            
                
                
              
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

        
        
?>  


 </div> 
        
    <?php include ('../includes/sitefooter.php'); ?>

</div>

</body>

   <?php include ('https://www.eagervolunteers.com/includes/jscodes_includer.php'); ?>
</html>