<?php
session_start();
require_once 'utilities/config.php';
require_once 'utilities/functions.php';

$session_image = $_SESSION['image'];

if (!isset($_SESSION['username'])) {

array_push($errors, "You Must Login To View This Page!");
  header('location: index.php');
}

$getfeatures = mysqli_query($con,"SELECT * FROM `featured_product`");
while ($row = mysqli_fetch_assoc($getfeatures)) {
  $pro_id = $row['product_id'];
}


 ?>
