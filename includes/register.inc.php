<?php
session_start();
if (isset($_SESSION['username'])) {
      
      header('location: index.php');

      }

if (isset($_POST['register']) && $_POST['register']) {

    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $lastname =  mysqli_real_escape_string($con, $_POST['lastname']);
    $email =  mysqli_real_escape_string($con, $_POST['mail']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['pass']);
    $password2 = mysqli_real_escape_string($con, $_POST['pass2']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $addy = mysqli_real_escape_string($con, $_POST['addy']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $state = mysqli_real_escape_string($con, $_POST['state']);
    $country = mysqli_real_escape_string($con,$_POST['country']);
    $zip = mysqli_real_escape_string($con, $_POST['zip']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);

    if (empty($firstname)) {
      array_push($errors, "Firstname is Required!");
    }
    if (empty($lastname)) {
      array_push($errors, "Lastname is Required!");
    }
    if (empty($email)) {
      array_push($errors, "email is Required!");
    }
    if (empty($password)) {
      array_push($errors, "Password is Required!");
    }
    if ($password != $password2) {
      array_push($errors, "Passwords do not match!");
    }
    if (empty($dob)) {
      array_push($errors, "Date of Birth is Required!");
    }
    if (empty($gender)) {
      array_push($errors, "Gender is Required!");
    }
    if (empty($addy)) {
      array_push($errors, "Address is Required!");
    }
    if (empty($city)) {
      array_push($errors, "City is Required!");
    }
    if (empty($state)) {
      array_push($errors, "State is Required!");
    }
    if (empty($country)) {
      array_push($errors, "Country is Required!");
    }
    if (empty($zip)) {
      array_push($errors, "Zip is Required!");
    }
    if (empty($mobile)) {
      array_push($errors, "Mobile number is Required!");
    }

$check_profile = mysqli_query($con, "SELECT * FROM `customer` WHERE `username` = '$username' ");

if (mysqli_num_rows($check_profile) > 0) {
  array_push($errors, "Username already taken!");
}

$check_profile2 = mysqli_query($con, "SELECT * FROM `customer` WHERE `email` = '$email' ");

if (mysqli_num_rows($check_profile2) > 0) {
  array_push($errors, "Email already taken!");
}

if (count($errors) == 0) {

$hash_password = md5($password);

$insert_profile = mysqli_query($con, "INSERT INTO `customer`(`firstname`,`lastname`,`address`,`city`,`province`,`country`,`dob`,`gender`,`phonenum`,`email`,`zip`,`username`,`password`,`status`,`joindate`) VALUES('$firstname','$lastname','$addy','$city','$state','$country','$dob','$gender','$mobile','$email','$zip','$username','$hash_password','active', NOW())");

array_push($success, "Registeration Successful!");


echo "<script>window.alert('Registeration Successful! You would be redirected now!');</script>";
echo "<script>window.location.replace('index.php');</script>";
}
}
?>
