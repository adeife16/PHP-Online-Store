<?php
session_start();
require_once 'utilities/config.php';
require_once 'utilities/functions.php';

$session_user = $_SESSION['username'];
$session_image = $_SESSION['image'];

if (isset($_GET['edit'])) {

	$edit = $_GET['edit'];

	$getlist = mysqli_query($con, "SELECT * FROM products WHERE `random` = '$edit'");
	$getcat = mysqli_query($con, "SELECT * FROM category");

// if (!$getlist) {
// 	mysqli_error($con);
// }
}
	if (isset($_POST['update'])) {


	$name = $_POST['proname'];
	$desc = mysqli_real_escape_string($con, $_POST['prodesc']);
	$cat = $_POST['procat'];
	$qty = $_POST['proqty'];
	$price = $_POST['proprice'];
	$discprice = $_POST['prodis'];

	if (empty($name)) {
		array_push($errors, "Product Name is Required!");
	}
while ($pro = mysqli_fetch_assoc($getlist)) {

	$newpro = strtolower($pro['pro_name']);
	if ( empty($name)) {
		array_push($errors, "Product Name is Required!");
}
$defimg_1 = setnull($pro['img_1']);
$defimg_2 = setnull($pro['img_2']);
$defimg_3 = setnull($pro['img_3']);
$defimg_4 = setnull($pro['img_4']);
$defimg_5 = setnull($pro['img_5']);


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
				$file4 = proimage_upload('file4');
			}

			}
		if (isset($_FILES['file5']) && $_FILES['file5'] != "" ) {
			if (!empty($_FILES['file5'])) {
				// code...
				$file5 = proimage_upload('file5');
			}
			}

			if ($file1 == "") {
				$file1 = $defimg_1;
			}
			if ($file2 == "") {
				$file2 = $defimg_2;
			}
			if ($file3 == "") {
				$file3 = $defimg_3;
			}
			if ($file4 == "") {
				$file4 = $defimg_4;
			}
			if ($file5 == "") {
				$file5 = $defimg_5;
			}

if (count($errors) == 0) {
$query1 = mysqli_query($con," UPDATE `products` SET `pro_name` = '$name', `pro_desc` = '$desc', `pro_qty` = '$qty', `pro_price` = '$price', `pro_disc` = '$discprice', `cat_id` = '$cat', `img_1` = '$file1', `img_2` = '$file2', `img_3` = '$file3', `img_4` = '$file4' = `img_5` = '$file5' WHERE `random` = '$edit' ");
if ($query1) {

	array_push($success, "Product Updated Successfully!");
	header('location: prolist.php');
	// die("Error connecting to database: " . mysqli_error($con));
}



// if (isset($_FILES['files']) && $_FILES['files'] != "" ) {
//
// 	$filesArray = reArrayFiles($_FILES['files']);
//
// 	//pre_r($filesArray);
//
// 	if (count($filesArray) > 5) {
// 		array_push($errors, "Maximum of 5 pictures allowed!");
// 	}
// 	else{
// for ($i=0; $i < count($filesArray); $i++) {
//
// 	if ($filesArray[$i]['error']) {
// 		//errors from the array to be diplayed here
// 		//array_push($errors, "An error Occured!");
// 	}
// 	else{
// 		$ext = array('jpg','png','gif','jpeg');
//
// 		$file_ext = explode('.', $filesArray[$i]['name']);
// 		$file_ext = end($file_ext);
//
// 		if (!in_array($file_ext, $ext)) {
// 			array_push($errors, $filesArray[$i]['name']." not uploaded invalid extention!");
//
// 		}
// 		else{
// 				move_uploaded_file($filesArray[$i]['tmp_name'],"uploads/products/".$filesArray[$i]['name']);
//
// 				$image = $filesArray[$i]['name'];
//
// 				$insert = mysqli_query($con,"INSERT INTO product_images(`product_id`,`image_dir`) VALUES('$id', '$image')");
//
// 				if (!$insert) {
// 					die("Error connecting to database: " . mysqli_error($con));
// 				}
// 			}
// 		}
// 	}
// }
// }
}
}


if (isset($_GET['delete'])){

    $delete = $_GET['delete'];

$query3 = mysqli_query($con, "DELETE FROM `products` WHERE `random` = '$delete'");

		array_push($success, "Product Deleted Sucessfully!");
    header('location: prolist.php');
}

if (isset($_GET['add'])) {

	$add = $_GET['add'];

	$query4 = mysqli_query($con, "INSERT INTO `featured_product`(`product_id`) VALUES('$add')" );
	header('location: prolist.php');
}

















	 ?>
