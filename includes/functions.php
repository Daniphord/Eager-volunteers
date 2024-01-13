<?php 
include('connect.php');
?>
<?php

	
	function is_loggedin(){
	if(loggedin() == false){
		header('Location:https://www.thedmcentralpoint.com/index.php');
		exit();
	    }
	}





function loggedin(){
if(isset($_SESSION['user_id']) && isset($_SESSION['userLevel']) && isset($_SESSION['userName']) && !empty($_SESSION['user_id']) && !empty($_SESSION['userLevel']) && !empty($_SESSION['userName'])){
return true; 
}else{
return false;
}
}



function online(){
session_start();
include('connect.php');
    
    $guest_timeout = time() - 120;
    $member_timeout = time() - 300;
    $guest_ip = $_SERVER['REMOTE_ADDR'];
    $time = time();
    
 
    
    if(isset($_SESSION['userName'])){
          //if the user is loggedin 
       $query = mysqli_query($connect, "DELETE FROM active_guests WHERE guest_ip ='".$guest_ip."'");
       
       $query2 = mysqli_query($connect, "REPLACE INTO online_users (username, time_visited) VALUES ('".$_SESSION['userName']."', '".$time."' )");
        
    }else{
        //guests active
     $query3 = mysqli_query($connect, "REPLACE INTO active_guests (guest_ip, time_visited) VALUES ('".$guest_ip."', '".$time."')");
    }
    
    $query4 = mysqli_query($connect, "DELETE FROM active_guests WHERE time_visited < ".$guest_timeout);
    $query5 = mysqli_query($connect, "DELETE FROM online_users WHERE time_visited < ".$member_timeout);
    $query6 = mysqli_query($connect, "SELECT guest_ip FROM active_guests");
    $online_guests = mysqli_num_rows($query6);
    $query7 = mysqli_query($connect, "SELECT username FROM online_users");
    $online_users = mysqli_num_rows($query7);
    
    echo "<div class='online'><p> Site guest(s) [" .$online_guests."]  and Online user(s)[".$online_users."] </p></div> ";
    
}



?>