<?php 

session_start();
require_once 'utilities/config.php';
require_once 'utilities/functions.php';

$session_user = $_SESSION['username'];
$session_image = $_SESSION['image'];


if (isset($session_user)) {
	# code...

$get_profile_details = mysqli_query($con,"SELECT * FROM `users` WHERE `username` = '$session_user'");

$profile_details = mysqli_fetch_assoc($get_profile_details);
}

if (isset($_POST['update_profile']) && $_POST['update_profile']!= '') {
	
	$firstname = mysqli_real_escape_string($con, $_POST["firstname"]);
	$lastname = mysqli_real_escape_string($con, $_POST["lastname"]);
	$old_pass = mysqli_real_escape_string($con, $_POST["old_pass"]);
	$new_pass = mysqli_real_escape_string($con, $_POST["new_pass"]);
	$profileImageName = time() . '-' . $_FILES["profileImage"]["name"];
	$target_dir = "uploads/profile-pic/";
	$target_file = $target_dir.basename($profileImageName);

	$hash_old = md5($old_pass);
	if ($_FILES["profileImage"]["size"] > 1000000) {
		
		array_push($errors, "Image size cannot exceed 1Mb");

	}
	if (file_exists($target_file)) {
		array_push($errors, "Image already uploaded!");
	}
	if ($hash_old != $profile_details['pass']) {
		array_push($errors, "Incorrect old password!");
	}
	if (count($errors) == 0) {
		if (move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
		
		$hash_pass = md5($new_pass);
		$query = mysqli_query($con, "UPDATE `users` SET `firstname` = '$firstname', `lastname` = '$lastname', `userimage` = '$profileImageName' WHERE `username` = '$session_user'");

			array_push($success, "Profile updated Successfully");
		}
		elseif (isset($old_pass) && isset($new_pass)) {
			$hash_pass = md5($new_pass);
			$query = mysqli_query($con, "UPDATE `users` SET `firstname` = '$firstname', `lastname` = '$lastname', `pass` = '$hash_pass' WHERE `username` = '$session_user'");

			array_push($success, "Profile updated Successfully");

		}
		elseif (move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file) && isset($old_pass) && isset($new_pass)) {
			$hash_pass = md5($new_pass);
			$query = mysqli_query($con, "UPDATE `users` SET `firstname` = '$firstname', `lastname` = '$lastname', `pass` = '$hash_pass', `userimage` = '$profileImageName' WHERE `username` = '$session_user'");

			array_push($success, "Profile updated Successfully");
		}

	}
}

 ?>