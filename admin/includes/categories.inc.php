<?php

session_start();
require_once 'utilities/config.php';
require_once 'utilities/functions.php';

$session_user = $_SESSION['username'];
$session_image = $_SESSION['image'];


$view = 0;
$getlist = mysqli_query($con, "SELECT * FROM category");

while($row = mysqli_fetch_array($getlist)){

  $data[] = $row;

}

if (isset($_POST['save']) && $_POST['save']!= "") {

	$catname = $_POST['catName'];

	$Newcatname = strtolower($catname);

	foreach ($data as $value) {

		$value = strtolower($value['cat_name']);

		if ($Newcatname == $value) {

			array_push($errors, "Category Already Exists!");
		}

		}

	if (empty($catname)) {
		array_push($errors, "Category Name is Required!");
	}

	if (count($errors)==0) {

		$insert = mysqli_query($con, "INSERT INTO `category`(`cat_name`) VALUES('$catname')");

		if (!$insert) {
			mysqli_error($con);
		}
	}
}
if (isset($_GET['edit']) && $_GET['edit'] != "") {
  $view = 1;
  $edit = $_GET['edit'];
  $getcat = mysqli_query($con, "SELECT * FROM `category` WHERE `cat_id` = '$edit'");
}

if (isset($_POST['update']) && $_POST['update']!= "") {

  $catname = $_POST['catName'];

  $Newcatname = strtolower($catname);

  foreach ($data as $value) {

    $value = strtolower($value['cat_name']);

    if ($Newcatname == $value) {

      array_push($errors, "Category Already Exists!");
    }

  }

  if (empty($catname)) {
    array_push($errors, "Category Name is Required!");
  }

  if (count($errors)==0) {

    $insert = mysqli_query($con, "UPDATE `category` SET `cat_name` = '$catname' WHERE `cat_id` = $edit ");

    $view = 0;
    array_push($success, "Update Successful!");
    header('location: categories.php');
  }
}

if (isset($_get['del'])) {
  $delete = $_get['del'];
  $check = mysqli_query($con, "SELECT * FROM `products` WHERE `cat_id` = '$delete'");
  if (mysqli_num_rows($check) > 0) {
    array_push($errors, "Some Products are under this Category, therefore it cannot be deleted. Please delete the products first!.");
  }
  else {
    if (count($errors) == 0) {

  $delcat = mysqli_query($con, "DELETE FROM `category` WHERE `cat_id` = '$delete'");
  header('location: categories.php');
  }
  }
}
 ?>
