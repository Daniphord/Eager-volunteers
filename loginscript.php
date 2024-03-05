<?php
session_start();
if(isset($_POST['submit'])){

include ("includes/connect.php");

$userid = $_POST['userloginid'];
$userpwd = $_POST['userpwd'];


if(empty($userid) ||  empty($userpwd)){
	
header("Location: login.php?error=emptyfields");
//echo "<h2>empty Fields!</h2>";

exit();

}else{

$sql = "SELECT * FROM `membertable` WHERE `userName`=? OR `emailAddress`=?";

if(!$stmt = mysqli_prepare($connect, $sql)){

header("Location: login.php?error=sqlerror");
//echo "<h2>Request Failed!</h2>";

exit();

}else{
mysqli_stmt_bind_param($stmt, "ss", $userid, $userid);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if($row=mysqli_fetch_assoc($result)){

$pwdcheck = password_verify($userpwd, $row['passWord']);
if($pwdcheck==false){

header("Location: index.php?error=wrongpwd");
//echo "<h2>Counldn't verify password!</h2>";

exit();

}elseif($pwdcheck==true){

$_SESSION['userName'] = $row['userName'];
$_SESSION['user_id'] = $row['user_id'];
$_SESSION['userLevel'] = $row['userLevel'];

header("Location: index.php?login=success");
//echo "<h2>Logged in Successfully!</h2>";

exit();

}else{
	
header("Location: login.php?signup=wrongaccess");
//echo "<h2>Wrong Access!</h2>";

exit();
mysqli_stmt_close($stmt);
mysqli_close($connect);
}
}
}
}
}

