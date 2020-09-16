<?php 
mysqli_report(MYSQLI_REPORT_STRICT);
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
 ?>
 <script src="assets/vendor/jquery/jquery.js"></script>
 <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
 <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
