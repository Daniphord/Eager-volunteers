<?php
$host = "localhost";
$user = "myroot";
$dbname = "eager_vols_db";
$connect = mysqli_connect($host, $user) or die("Connection could not be estalished.");
if($connect){
$select = mysqli_select_db($connect, $dbname);
}else{
echo "Connection failed";
}

?>