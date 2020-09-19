<?php
mysqli_report(MYSQLI_REPORT_STRICT);
error_reporting(-1);
$hostname =  'localhost';
$user = 'root';
$pass = '';
$dbname = 'store_db';


$con = mysqli_connect($hostname,$user,$pass,$dbname);

	if (!$con) {
		die("Error connecting to database: " . mysqli_connect_error());
}
if ($con) {
	$errors = array();
	$success = array();
}
$_SESSION['cart'] = array();
 ?>
 
