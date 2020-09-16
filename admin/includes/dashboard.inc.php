<?php
session_start();
require_once 'utilities/config.php';
require_once 'utilities/functions.php';

$session_image = $_SESSION['image'];

if (!isset($_SESSION['username'])) {

array_push($errors, "You Must Login To View This Page!");
  header('location: index.php');
}

$getfeatpro = mysqli_query($con,"SELECT p.*, f.* FROM `products` p, `featured_product` f WHERE p.random=f.product_id");

if (isset($_GET['del'])) {
	$del = $_GET['del'];


$delete = mysqli_query($con, "DELETE FROM `featured_product` WHERE `product_id`='$del' ");

header('location: dashboard.php');
array_push($success, "Product Deleted Successfully!");
}

 ?>
