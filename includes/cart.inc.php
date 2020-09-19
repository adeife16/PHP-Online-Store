<?php 
require_once '/utilities/config.php';
require_once '/utilities/functions.php';

if (isset($_POST['random'])) {
	$random = $_POST['random'];
	$name = $_POST['name'];
	$price = $_POST['disc'];
	$qty = $_POST['qty'];
	$user = $_POST['user'];

	$check = mysqli_query($con, "SELECT `product_id` from `orders` WHERE `product_id`='$random' AND `user_name`='$user' ");
	while($row= mysqli_fetch_assoc($check)){
	$oldqty = $row['quantity'];
}
	if (mysqli_num_rows($check) > 0) {
		$newqty = intval($oldqty) + intval($qty);
		$add = mysqli_query($con, "UPDATE `orders` SET `quantity`='$newqty'" );
	}
	else{
		$create = mysqli_query($con, "INSERT INTO `orders`(`product_id`,`product_name`,`product_price`,`quantity`,`total_price`,`user_name`,`ststus`,`datetime`) VALUES('$random','$name','$price','$qty','$user')");
	}
}





// $pro_ids = array();
//  // Check if cart buttton is clicked
// if (isset($_POST['cart'])) {
// 	// check if session is set
// 		// keep track of the amount of products in the cart
// 		$count = count($_SESSION['cart']);
// 		$pro_ids = array_column($_SESSION['cart'], 'random');
// 		if (!in_array(filter_input(INPUT_POST,'random'), $pro_ids)) {
// 			$_SESSION['cart'][$count] = array(
// 			'random' => filter_input(INPUT_POST, 'random'),
// 			'name' => filter_input(INPUT_POST, 'name'),
// 			'disc' => filter_input(INPUT_POST, 'disc'),
// 			'quantity' => filter_input(INPUT_POST,'qty')
// 		);
// 		}
// 		else{
// 			for ($i=0; $i < count($pro_ids); $i++) { 
// 					if ($pro_ids[$i] == filter_input(INPUT_POST,'random')) {
// 						$_SESSION['cart'][$i]['quantity'] += filter_input(INPUT_POST, 'qty');
// 					}
// 			}
// 		}
		
	
// }
// $show = pre($_SESSION['cart']);
