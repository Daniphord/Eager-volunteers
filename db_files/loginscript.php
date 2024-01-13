<?php
session_start();
if(isset($_POST['loggin_submit'])){

include ("connect.php");

$userid = $_POST['user_id'];
$userpwd = $_POST['user_pwd'];


if(empty($userid) ||  empty($userpwd)){
header("Location: ../index.php?error=emptyfields");
exit();

}else{

$sql = "SELECT * FROM `membertable` WHERE `userName`=? OR `emailAddress`=?";

if(!$stmt = mysqli_prepare($connect, $sql)){

header("Location: loginform.php?error=sqlerror");
exit();

}else{
mysqli_stmt_bind_param($stmt, "ss", $userid, $userid);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if($row=mysqli_fetch_assoc($result)){

$pwdcheck = password_verify($userpwd, $row['passWord']);
if($pwdcheck==false){

header("Location: ../index.php?error=wrongpwd");
exit();

}elseif($pwdcheck==true){




$_SESSION['userName'] = $row['userName'];
$_SESSION['user_id'] = $row['user_id'];
$_SESSION['userLevel'] = $row['userLevel'];

header("Location: ../index.php?login=success");
exit();

}else{
header("Location: ../index.php?signup=wrongaccess");
exit();
mysqli_stmt_close($stmt);
mysqli_close($connect);
}
}
}
}
}

