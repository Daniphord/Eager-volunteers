   

<main>

   <h1> Signup here</h1>
<?php
if(isset($_GET['error'])){

if($_GET['error']=="emptyfields"){

echo "<p>All fields need to be field!</p>";
}elseif($_GET['error']=="invalidcharacters"){

echo "<p>Sorry! You entered invalid Characters</p>";

}elseif($_GET['error']=="invalidemail"){

echo "<p>Sorry! You entered an invalid E-mail address</p>";


}elseif($_GET['error']=="passwordnomatch"){

echo "<p>Sorry! Passwords in the fields don't match.</p>";


}elseif($_GET['error']=="usertaken"){

echo "<p>Sorry! The E-mail or username you used has alredy been used.</p>";


}elseif($_GET['error']=="invalidusername"){

echo "<p>Sorry! You entered an invalid username, try again!</p>";


}
}
?>
   <form action="includes/signupscript.php" method="post"><br>
      <input type="text" name="fullname" placeholder="Enter Your Full name"><br>
      <input type="text" name="username" placeholder="Enter a username"><br>
      <input type="text" name="useremail" placeholder="Enter your email"><br>
      <input type="password" name="userpwd" placeholder="Password"><br>
      <input type="password" name="userpwd2" placeholder="Confirm password"><br>
      <input type="submit" name="submit" value="SIGNUP"><br>
     
   </form>
</main>