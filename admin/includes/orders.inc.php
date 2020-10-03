<?php
session_start();
require_once 'utilities/config.php';
require_once 'utilities/functions.php';


$get = mysqli_query($con, "SELECT p.*, o.* FROM `products` p, `order` o WHERE p.random = o.product_id ");

