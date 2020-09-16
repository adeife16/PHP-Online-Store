<?php
session_start();
require_once 'utilities/config.php';
require_once 'utilities/functions.php';

$session_user = $_SESSION['username'];
$session_image = $_SESSION['image'];


$id = rand();
// check if random is already exists
$check = mysqli_query($con,"SELECT * FROM `products` WHERE `random` = '$id'");

if (mysqli_num_rows($check) > 0) {

	$id = rand();
}

$getcat = mysqli_query($con, "SELECT * FROM category");

$getpro = mysqli_query($con, "SELECT * FROM products");


if (isset($_POST['Add']) && $_POST['Add'] != "") {

	$name = mysqli_real_escape_string($con,$_POST['proname']);
	$desc = mysqli_real_escape_string($con, $_POST['prodesc']);
	$cat = mysqli_real_escape_string($con, $_POST['procat']);
	$qty = mysqli_real_escape_string($con, $_POST['proqty']);
	$price =mysqli_real_escape_string($con, $_POST['proprice']);
	$discprice = mysqli_real_escape_string($con, $_POST['prodis']);

//Create uploads file errors array
	if (empty($name)) {
		array_push($errors, "Product Name is Required!");
	}
while ($pro = mysqli_fetch_assoc($getpro)) {

	$newpro = strtolower($pro['pro_name']);
	if ( $name == $newpro) {
		array_push($errors, "Product Already Exists!");
}
	}
	if (empty($desc)) {
		array_push($errors, "Product Description is Required!");
	}

	if ($cat == "") {
		array_push($errors, "Product Category is Required!");
	}
	if (empty($qty)) {
		array_push($errors, "Produt Quantity is Required!");
	}
	if (empty($price)) {
		array_push($errors, "Product Price is Required!");
	}
	if (empty($discprice)) {
		$discprice = $price;
	}




	if ($_POST['Add'] == "Add Product") {


if (isset($_FILES['file1']) && $_FILES['file1'] != "" ) {
	if (!empty($_FILES['file1'])) {
		$file1 = proimage_upload('file1');
	}

	}
if (isset($_FILES['file2']) && $_FILES['file2'] != "" ) {
	if (!empty($_FILES['file2'])) {
		$file2 = proimage_upload('file2');
	}

	}
if (isset($_FILES['file3']) && $_FILES['file3'] != "" ) {
	if (!empty($_FILES['file3'])) {
		// code...
		$file3 = proimage_upload('file3');
	}

	}
if (isset($_FILES['file4']) && $_FILES['file4'] != "" ) {
	if (!empty($_FILES['file4'])) {
		// code...
		$file4 = proimage_upload('file4');
	}

	}
if (isset($_FILES['file5']) && $_FILES['file5'] != "" ) {
	if (!empty($_FILES['file5'])) {
		// code...
		$file5 = proimage_upload('file5');
	}
	}
	if ($file1 == "" && $file2 == "" && $file3 == "" && $file4 == "" && $file5 == "" ) {
		array_push($errors, "Please Upload at least one image");
	}

	if (count($errors) == 0) {

	$query1 = mysqli_query($con,"INSERT INTO `products`(`random`,`pro_name`,`pro_desc`,`pro_qty`,`pro_price`,`pro_disc`,`cat_id`,`img_1`,`img_2`,`img_3`,`img_4`,`img_5` ) VALUES('$id','$name','$desc','$qty','$price','$discprice','$cat','$file1','$file2','$file3','$file4','$file5' )");
if (!$query1) {

	die("Error connecting to database: " . mysqli_error($con));
}
		array_push($success, "Upload Successful!");
		header('location: prolist.php');

}
}
}
 ?>
