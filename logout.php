<?php 
require 'utilities/config.php';
session_start();
$user = $_SESSION['username'];
mysqli_query($con, "DELETE FROM cart WHERE user_name = '$user' ");
unset($_SESSION['username']);
session_destroy();
header('location: index.php');

 ?>