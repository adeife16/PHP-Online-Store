<?php
    require_once 'utilities/config.php';
    require_once 'utilities/functions.php';
    
    $user_name = $_SESSION['username'];
    
    $count =  mysqli_query($con,"SELECT p.img_1,c.* FROM products p, cart c WHERE p.random=c.product_id AND c.user_name = '$user_name' ");
    
