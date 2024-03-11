<?php
$login = "sec_navbar_menubtns";
$signup = "sec_navbar_menubtns";
$contacts = "sec_navbar_menubtns";


$sec_menuLink = basename($_SERVER['PHP_SELF'], ".php");

if($sec_menuLink == "login"){
	
	$login = 'sec_navbar_activebtns';
	
}else if($sec_menuLink == "signup"){
	
	$signup = 'sec_navbar_activebtns';
	
}else if($sec_menuLink == "contacts"){
	
	$contacts = 'sec_navbar_activebtns';
	
}else if($sec_menuLink == "passwordreset"){
	
	$login = 'sec_navbar_activebtns';
	
}

?>

	
	<div class="sec_navbar" id="action">

		<a class="<?php echo $login; ?>" href="login.php">LOGIN</a>
		<a class="<?php echo $signup; ?>" href="signup.php">SIGNUP</a>
		<a class="<?php echo $contacts; ?>" href="contacts.php">CONTACTS</a>
	
	
	</div>









