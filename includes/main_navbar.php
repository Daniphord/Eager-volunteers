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

	<div class="menu" id="mymenu">
		<a class="<?php echo $index; ?>" href="index.php">HOME</a> 
		<a class="<?php echo $about;?>" href="about.php">ABOUT</a>
		<a class="<?php echo $programs;?>" href="programs.php">PROGRAMS</a>
		<a class="<?php echo $accommodation;?>" href="accommodation.php">HOSITING</a>
		<a class="<?php echo $prices;?>" href="prices.php">PRICES</a>
	</div>

			
</div>







