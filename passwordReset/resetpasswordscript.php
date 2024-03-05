<?php

if(isset($_POST['reset_request_submit'])){

$selector = $_POST["selector"];
$validator = $_POST["validator"];
$newpwd = $_POST["newpassword"];
$newpwd2 = $_POST["newpassword2"];

if(empty($newpwd) || empty($newpwd2)){

header("Location: creatnewpassword.php?newpwd=empty");
exit();

}else if($newpwd != $newpwd2){

header("Location: creatnewpassword.php?newpwd=pwddonotmatch");
exit();
}

$currentdate = date("U");

include'../site_includes/connect.php';

$sql ="SELECT `pwdResetEmail`,  `pwdResetSelector`, `pwdResetExpires`,`pwdResetToken` FROM `pwdReset` WHERE `pwdResetSelector`=? AND `pwdResetExpires`>=?";
$stmt = mysqli_stmt_init($connect);
if(!mysqli_stmt_prepare($stmt, $sql)){

echo "There was a problem selecting the database";
exit();

}else{

mysqli_stmt_bind_param($stmt, 'ss', $selector, $currentdate);  
mysqli_stmt_execute($stmt);

$result =mysqli_stmt_get_result($stmt);

if(!$row =mysqli_fetch_assoc($result)){
echo "We could not select the data, you need to re-submit your reset request";
exit();

}else{
$tokenbin = hex2bin($validator);
$tokencheck = password_verify($tokenbin, $row['pwdResetToken']);

if($tokencheck === false){
echo "Tokencheck was not successful, you need to re-submit your reset request";
exit();


}elseif ($tokencheck === true) {

$tokenemail = $row["pwdResetEmail"];  

$sql ="SELECT `emailAddress` FROM `membertable` WHERE `emailAddress`=?";
$stmt = mysqli_stmt_init($connect);
if(!mysqli_stmt_prepare($stmt, $sql)){

echo "There was a problem selecting the database";
exit();
}else{

  
mysqli_stmt_bind_param($stmt, 's', $tokenemail);  
mysqli_stmt_execute($stmt);

$result =mysqli_stmt_get_result($stmt);    

if(!$row =mysqli_fetch_assoc($result)){

echo "We couldn't find matching data!";
exit();

}else{ 


$sql ="UPDATE `membertable` SET `passWord`=? WHERE `emailAddress`=?";
$stmt = mysqli_stmt_init($connect);

if(!mysqli_stmt_prepare($stmt, $sql)){

echo "We couldn't reset your password, make sure you entered the right information!";
exit();
}else{

$newpwdhash = password_hash($newpwd, PASSWORD_DEFAULT);
mysqli_stmt_bind_param($stmt, 'ss', $newpwdhash,  $tokenemail);  
mysqli_stmt_execute($stmt);

$sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
$stmt = mysqli_stmt_init($connect);
if(!mysqli_stmt_prepare($stmt, $sql)){

echo "There was a problem deleting data";
exit();

}else{

mysqli_stmt_bind_param($stmt, 's', $tokenemail);  
mysqli_stmt_execute($stmt);
header("Location: ../loginform.php?newpwd=pwdupdated");
exit();
}  


}

}
}

}
}

}   

}else{

header("Location: ../index.php");
}
