<?php
// session_start();
require_once 'utilities/config.php';
require_once 'utilities/functions.php';

$sql = mysqli_query($con,"SELECT * FROM `products`");
?>
