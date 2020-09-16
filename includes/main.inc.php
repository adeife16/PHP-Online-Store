<?php
// session_start();
require_once 'utilities/config.php';
require_once 'utilities/functions.php';

$sql = mysqli_query($con,"SELECT * FROM `products`");

$getfeatpro = mysqli_query($con,"SELECT p.*, f.* FROM `products` p, `featured_product` f WHERE p.random=f.product_id");

?>
