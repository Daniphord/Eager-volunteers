<?php
$host = "localhost";
$user = "eagervolunteers@localhost";
$dbname = "Database: eagervolunteers_eager_vols_db1";
$connect = mysqli_connect($host, $user) or die("Connection could not be estalished.");
if($connect){
$select = mysqli_select_db($connect, $dbname);
}else{
echo "Connection failed";
}

?>