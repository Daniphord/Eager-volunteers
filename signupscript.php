<?php
ob_start();
include ('includes/connect.php');
include('includes/functions.php');


?>

        <?php
        $fname = mysqli_real_escape_string($connect, $_POST['fullname']);
        $username = mysqli_real_escape_string($connect, $_POST['username']);
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $pword = mysqli_real_escape_string($connect, $_POST['password']);
        $pword2 = mysqli_real_escape_string($connect, $_POST['password2']);
        $userlevel = 7;
        $status = 'active';
        $pwdresettoken = 'none';
        $pwdtokenexpire = 'none';
        
        $secch = 7;
        $fnotification = 1;
        

        /*echo $fname.'<br>';
        echo $username .'<br>';
        echo $email .'<br>';
        echo $pword.'<br>';
        echo $pword2.'<br>' ; 
        echo $userlevel.'<br>';
        echo $status .'<br>';
        echo $secch .'<br>';
        echo $fnotification .'<br>'; */
        
        
        
        if (isset($fname) && isset($username) && isset($email) && isset($pword) && isset($pword2) && isset($userlevel) && isset($status) ){
        
        if(!empty($fname) && !empty($username) && !empty($email) && !empty($pword) && !empty($pword2)){
        
       if($pword != $pword2) {
           
        echo "<br><br><div class= 'register'>";
        echo "<br>";
        echo "The passwords you provided don't match!<br><br>";
        echo "<a href='registerform.php'>Go back to registration page.</a>";
        echo "</div><br><br>";
    
           
      }else{
          
        $query = "SELECT `userName`, `emailAddress`  FROM `membertable` WHERE `userName`=? OR `emailAddress`=?";
        $stmt = mysqli_prepare($connect, $query);
        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_bind_result($stmt, $dbusername, $dbemailaddress);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_fetch($stmt);
   
    
        
        if($dbusername===$username){
            
        echo "<br><br><div class= 'register'>";
        echo "<br>";
        echo "Username <span class='data_exists'> $dbusername </span> has already been taken<br><br>";
        echo "<a href='registerform.php'>Go back to registration page.</a>";
        echo "</div><br><br>";
            
            
        }elseif($dbemailaddress===$email){
            
        echo "<br><br><div class= 'register'>";
        echo "<br>";
        echo "The email <span class='data_exists'> $dbemailaddress </span> has already been used<br><br>";
        echo "<a href='registerform.php'>Go back to registration page.</a>";
        echo "</div><br><br>";
 
            
        }else{
            $pwdhash = password_hash($pword, PASSWORD_DEFAULT);
          
        $load = "INSERT INTO `membertable`(`fullName`, `userName`, `emailAddress`, `passWord`, `userLevel`, `userStatus`, `secChanger`) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($connect, $load);
        mysqli_stmt_bind_param($stmt, "ssssisi", $fname, $username, $email, $pwdhash, $userlevel, $status, $secch);
        mysqli_stmt_execute($stmt);
        
        
        if($stmt){
        echo "<br><br><div class= 'register'>";
        echo "<br><br>";
        echo "You are successfully registered!<br><br>";
        echo "<a href='loginform.php'>You can login here.</a>";
        echo "</div>";
        }else{
        echo "<br><br><div class= 'register'>";
        echo "<br><br>Registration could not take place, please check your input information<br><br>"; 
        echo "</div>";
        }
        }
      }
    }
}
        
        ?>
