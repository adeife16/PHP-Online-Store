<?php
require_once 'utilities/config.php';
require_once 'utilities/functions.php';

$user_name = $_POST["user_name"];

$count = "SELECT * FROM cart WHERE user_name = '$user_name' ";
$que = $con->query($count);
$num = mysqli_num_rows($que);

echo $num;