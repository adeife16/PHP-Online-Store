<?php require_once 'utilities/config.php';
      require_once 'utilities/functions.php';
      session_start();

      if (isset($_SESSION['username'])) {
      
      header('location: index.php');

      }
 ?>

 <?php
if (isset($_POST['login']) && $_POST['login']!="") {
  $user = mysqli_real_escape_String($con, $_POST['username']);
  $pass = mysqli_real_escape_String($con, $_POST['password']);

  if (empty($user)) {
    array_push($errors, "Username is Required!");
  }
  if (empty($pass)) {
    array_push($errors, "Password is Required!");
  }
  if (count($errors) == 0) {

  $pass2 = md5($pass);

  $check_profile = mysqli_query($con, "SELECT * FROM customer WHERE `username` = '$user' AND `password` = '$pass2'");

  if (mysqli_num_rows($check_profile) == 1) {

    $_SESSION['username'] = $user; 

    array_push($success, "Login Success!");

    header('location: index.php');

  }

  else{
    array_push($errors, "Invalid Username or Password!");
  }
}
}
  ?>
<?php
 include 'topnav.php';
?>

<div class="mainBody">


<div id="sidebar" class="span3">

</div>
<!-- Sidebar end=============================================== -->
 <div class="span9">
   <ul class="breadcrumb">
   <li><a href="index.php">Home</a> <span class="divider">/</span></li>
   <li class="active">Registration</li>
   </ul>
   <?php 

   if (isset($errors)) {
     if (count($errors)>0) {
       foreach ($errors as $error){ ?>
         <div class="alert alert-block alert-error fade in">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <p> <?php echo $error; ?> </p>
         </div>

    <?php
   }
     }
   } ?>
 <h3> Registration</h3>
 <div class="well">
 <!--
 <div class="alert alert-info fade in">
   <button type="button" class="close" data-dismiss="alert">×</button>
   <strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
  </div>
 <div class="alert fade in">
   <button type="button" class="close" data-dismiss="alert">×</button>
   <strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
  </div>
  <div class="alert alert-block alert-error fade in">
   <button type="button" class="close" data-dismiss="alert">×</button>
   <strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
  </div> -->

 <form class="form-horizontal" action="" method="post" >
   <h4>Login</h4>
   <div class="control-group">
     <label class="control-label" for="inputUname1">Username <sup>*</sup></label>
     <div class="controls">
       <input type="text" id="inputUname1" name="username" placeholder="Username">
     </div>
    </div>
    <div class="control-group">
     <label class="control-label" for="inputPass">Password <sup>*</sup></label>
     <div class="controls">
       <input type="password" id="inputPass" name="password" placeholder="Password">
     </div>


 <p><sup>*</sup>Required field	</p>

 <div class="control-group">
     <div class="controls">
       <input type="hidden" name="email_create" value="1">
       <input type="hidden" name="is_new_customer" value="1">
       <input class="btn btn-large btn-success" type="submit" name="login" value="Login" />
     </div>
   </div>
 </form>
</div>
</div>

<?php
 include 'footer.php';

?>
