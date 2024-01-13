
<!DOCTYPE html>  
 <html>  

      <body> 
	  <div class="mainwrapper">
	  <?php
	  include_once("includes/header.php");
	  
	  ?>
	  
	  
	  
<div class="content">
<h1>GALLERY</h1>
  
</div>
 
 
<?php
include("includes/footer.php");

?>

</div>

<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script> 
		
      </body>  
 </html>  
  