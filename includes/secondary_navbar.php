<?php
$login = "sec_menubtns";
$signup = "sec_menubtns";
$contacts = "sec_menubtns";


$sec_menuLink = basename($_SERVER['PHP_SELF'], ".php");

if($sec_menuLink == "login"){
	
	$login = 'sec_activebtns';
	
}else if($sec_menuLink == "signup"){
	
	$signup = 'sec_activebtns';
	
}else if($sec_menuLink == "contacts"){
	
	$programs = 'sec_activebtns';
	
}

?>

	
	<div class="action_bar" id="action">

		<a "<?php echo $login; ?>" href="login.php">LOGIN</a>
		<a "<?php echo $signup; ?>" href="login.php">SIGNUP</a>
		<a "<?php echo $contacts; ?>" href="contacts.php">CONTACTS</a>
	
	</div>









