<?php 
session_start();
require_once 'utilities/config.php';
require_once 'utilities/functions.php';

$session_user = $_SESSION['username'];
$session_image = $_SESSION['image'];


$getlist = mysqli_query($con, "SELECT * FROM products");

while($row = mysqli_fetch_array($getlist)){

  $data[] = $row;

}

// echo json_encode($data);



 ?>