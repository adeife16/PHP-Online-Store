<?php 

if (isset($_POST['id'])) {

	$id = $_POST['id'];

	$update = mysqli_query($con, "UPDATE order SET status = 'delivered' WHERE order_id = '$id' ");


}
if (isset($_POST['delid'])) {

	$id = $_POST['delid'];

	$update = mysqli_query($con, "DELETE FROM order WHERE order_id = '$id' ");


}
