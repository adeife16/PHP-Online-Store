<?php  require_once 'utilities/config.php';
      require_once 'utilities/functions.php';


if (isset($_GET['id']) && $_GET['id'] != "") {
  $rand = $_GET['id'];
  $prodetails = mysqli_query($con, "SELECT * FROM `products` WHERE `random` = '$rand'");

  
}


 ?>
