<?php
session_start();

include('includes/connect.php');

mysqli_query($connect, "DELETE FROM online_users WHERE username = '".$_SESSION['userName']."'");

session_destroy();

header('Location:login.php');


?>