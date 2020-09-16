<?php 
session_start();
require_once 'utilities/config.php';
require_once 'utilities/functions.php';


session_destroy();

$errors = array();

array_push($succes, "Logout Successful!");
header('location: index.php');
?>