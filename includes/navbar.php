<?php
$index = "menubuttons";
$about = "menubuttons";
$programs = "menubuttons";
$prices = "menubuttons";
$accommodation = "menubuttons";


$menuLink = basename($_SERVER['PHP_SELF'], ".php");

if($menuLink == "index"){
	
	$index = 'menuactivebuttons';
	
}else if($menuLink == "about"){
	
	$about = 'menuactivebuttons';
	
}else if($menuLink == "programs"){
	
	$programs = 'menuactivebuttons';
	
}else if($menuLink == "prices"){
	
$prices = 'menuactivebuttons';	
		
}else if($menuLink == "accommodation"){
	
$accommodation = 'menuactivebuttons';	

}		

?>

<div class='navbar' id="mynavbar">

<!-- MOBILE NAVIGATION HTML -->

<div class="mobmenucontainer">
<img src="images/eager-volus_mob_log.jpg" id="mob_menu_logo"/>
<h1 class='main_title_mob'>EAGER VOLUNTEERS</h1> 
<img src="images/mob_nav_icon.png" id="navbutton" onClick="showMenu()"/>

	<div class="mobmenu" id="mobmenu">
	<a class="mobmenuitems" href="index.php">HOME</a> 
	<a class="mobmenuitems" href="about.php">ABOUT</a>
	<a class="mobmenuitems" href="programs.php">PROGRAMS</a>
	<a class="mobmenuitems" href="prices.php">PRICES</a>
	<a class="mobmenuitems" href="login.php">LOGIN</a>
	<a class="mobmenuitems" href="signup.php">SIGNUP</a>
	<a class="mobmenuitems" href="contacts.php">CONTACTS</a>
	</div>

</div>

<!-- END MOBILE NAVIGATION HTML -->

	<div class="menu" id="mymenu">
		<a class="<?php echo $index; ?>" href="index.php">HOME</a> 
		<a class="<?php echo $about;?>" href="about.php">ABOUT</a>
		<a class="<?php echo $programs;?>" href="programs.php">PROGRAMS</a>
		<a class="<?php echo $accommodation;?>" href="accommodation.php">HOSITING</a>
		<a class="<?php echo $prices;?>" href="prices.php">PRICES</a>
	</div>
	
	
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

	}

	?>
	
	<!--SECONDARY NAVIGATION MENU -->
	
	<div class="sec_navbar" id="sec_navbar">

		<a class="<?php echo $login; ?>" href="login.php">LOGIN</a>
		<a class="<?php echo $signup; ?>" href="signup.php">SIGNUP</a>
		<a class="<?php echo $contacts; ?>" href="contacts.php">CONTACTS</a>
	
	</div>	
		
		
</div>







