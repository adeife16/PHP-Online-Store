<?php 
require 'utilities/config.php';
require 'utilities/functions.php'; 


	$random = $_POST["random"];
	$name =   $_POST["name"];
	$price =  $_POST["price"];
	$qty =    $_POST["qty"];
	$user =   $_POST["user"];
	// $result[] = array('random' =>$random, 'name'=>$name, 'price'=>$price, 'qty'=>$qty, 'user'=>$user);

	$check = mysqli_query($con, "SELECT * from `cart` WHERE `product_id`='$random' AND `user_name`='$user' ");
	while($row= mysqli_fetch_assoc($check)){
	$oldqty = $row['quantity'];
}
	if (mysqli_num_rows($check) > 0) {
		$newqty = intval($oldqty) + intval($qty);
		$add = "UPDATE `cart` SET `quantity`='$newqty' WHERE `product_id`='$random'";
		if($con->query($add) == TRUE){
		}
		
	}
	else{
$insert = "INSERT INTO cart( product_id, product_name, product_price, quantity, user_name, status, datetime ) VALUES('$random','$name','$price','$qty','$user','processing',Now())";

if ($con->query($insert) == TRUE) {
	// echo json_encode($result);
}
else{
	echo 'Someting went wrong'.mysqli_error($con);
}
	}
$count = "SELECT * FROM cart WHERE user_name = '$user' ";
$que = $con->query($count);
$num = mysqli_num_rows($que);

echo $num;




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
