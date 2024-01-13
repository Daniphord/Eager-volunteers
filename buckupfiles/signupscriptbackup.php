<?php
include ('../includes/connect.php');
include('../includes/functions.php');
?>

<?php
if(isset($_POST['submit'])){

$fname = mysqli_real_escape_string($connect, $_POST['fullname']);
$username = mysqli_real_escape_string($connect, $_POST['username']);
$email = mysqli_real_escape_string($connect, $_POST['useremail']);
$pword = mysqli_real_escape_string($connect, $_POST['userpwd']);
$pword2 = mysqli_real_escape_string($connect, $_POST['userpwd2']);
$userlevel = 7;
$status = 'active';
$pwdresettoken = 'none';
$pwdtokenexpire = 'none';

$secch = 7;
$fnotification = 1;


if (isset($fname) && isset($username) && isset($email) && isset($pword) && isset($pword2) && isset($userlevel) && isset($status) ){

if(empty($fname) && empty($username) && empty($email) && empty($pword) && empty($pword2)){
header("Location: ../signup.php?error=emptyfields&uid=".$username."&email=".$useremail);
exit();   
    

}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){

header("Location: ../signup.php?error=invalidcharacters");
exit();

}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
header("Location: ../signup.php?error=invalidemail&uid=".$username);
exit();

}elseif(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
header("Location: ../signup.php?error=invalidusername&email=".$useremail);
exit();

}elseif($userpwd !== $userpwd2){
header("Location: ../signup.php?error=passwordnomatch&email=".$useremail."&uid=".$username);
exit();

}else{
    
$sql = "SELECT * FROM `membertable` WHERE `userName`=? OR `emailAddress`=?";

if(!$stmt=mysqli_prepare($connect, $sql)){

header("Location: ../signup.php?error=sqlerror");
exit();

}else{

mysqli_stmt_bind_param($stmt, "ss", $username, $useremail);
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);

$resultcheck = mysqli_stmt_num_rows($stmt);

if($resultcheck > 0){

header("Location: ../signup.php?error=usertaken");
exit(); 

}else{ 
    
$pwdhash = password_hash($pword, PASSWORD_DEFAULT);

$load = "INSERT INTO `membertable`(`fullName`, `userName`, `emailAddress`, `passWord`, `userLevel`, `userStatus`, `secChanger`) VALUES (?, ?, ?, ?, ?, ?, ?)";

if(!$stmt = mysqli_prepare($connect, $load)){
    
header("Location: ../signup.php?error=sqlerror");
exit();

}else{
    
mysqli_stmt_bind_param($stmt, "ssssisi", $fname, $username, $email, $pwdhash, $userlevel, $status, $secch);
mysqli_stmt_execute($stmt);

if($stmt){
header("Location: ../index.php?signup=success");
exit();

}else{
header("Location: ../signup.php?error=sqlerror");
exit();
}
}
}
}
}
}else{
header("Location: ../signup.php?error=novaluesset");
exit(); 
}
}else{
header("Location: ../signup.php?signup=wrongaccess");
exit();    
    
}
?>
