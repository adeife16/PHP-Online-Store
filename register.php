<?php
require_once 'includes/register.inc.php';
include 'topnav.php';
 if (isset($_SESSION['username'])) {
      
      header('location: index.php');

      }
?>
 <div class="mainBody">
 <div id="sidebar" class="span3">

 </div>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Registration</li>
    </ul>
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
   }

    ?>
	<form class="form-horizontal" action="" method="post" name="register">
		<h4>Your personal information</h4>
		<div class="control-group">
			<label class="control-label" for="inputFname1">First name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputFname1" name="firstname" placeholder="First Name">
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="inputLnam">Last name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputLnam" name="lastname" placeholder="Last Name">
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="input_email">Email <sup>*</sup></label>
		<div class="controls">
		  <input type="text" id="input_email" name="mail" placeholder="Email">
		</div>
	  </div>
		<div class="control-group">
		<label class="control-label" for="input_username">Username<sup>*</sup></label>
		<div class="controls">
		  <input type="text" id="input_username" name="username" placeholder="Username">
		</div>
	  </div>
	<div class="control-group">
		<label class="control-label" for="inputPassword1">Password <sup>*</sup></label>
		<div class="controls">
		  <input type="password" id="inputPassword1" name="pass" placeholder="Password">
		</div>
	  </div>
	<div class="control-group">
		<label class="control-label" for="inputPassword2">Confirm Password <sup>*</sup></label>
		<div class="controls">
		  <input type="password" id="inputPassword2" name="pass2" placeholder="Confirm Password">
		</div>
	  </div>
		<div class="control-group">
		<label class="control-label">Date of Birth <sup>*</sup></label>
		<div class="controls">
		  <input type="date" name="dob" value="">
		</div>
	  </div>


   <div class="control-group">
     <label class="control-label" for="gender">Gender<sup>*</sup></label>
     <div class="controls">
       <select id="gender" name="gender" >
       <option value="">Select Gender</option>
       <option value="male">Male</option>
       <option value="female">Female</option>
     </select>
   </div>
   </div>

		<div class="control-group">
			<label class="control-label" for="address">Address<sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="address" name="addy" placeholder="Adress"/> <span>Street address, P.O. box, company name, c/o</span>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="city">City<sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="city" name="city" placeholder="city"/>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="state">State<sup>*</sup></label>
			<div class="controls">
			  <select id="state" name="state">
				<option value="">-</option>
				<option value="1">Alabama</option><option value="2">Alaska</option><option value="3">Arizona</option><option value="4">Arkansas</option><option value="5">California</option><option value="6">Colorado</option><option value="7">Connecticut</option><option value="8">Delaware</option><option value="53">District of Columbia</option><option value="9">Florida</option><option value="10">Georgia</option><option value="11">Hawaii</option><option value="12">Idaho</option><option value="13">Illinois</option><option value="14">Indiana</option><option value="15">Iowa</option><option value="16">Kansas</option><option value="17">Kentucky</option><option value="18">Louisiana</option><option value="19">Maine</option><option value="20">Maryland</option><option value="21">Massachusetts</option><option value="22">Michigan</option><option value="23">Minnesota</option><option value="24">Mississippi</option><option value="25">Missouri</option><option value="26">Montana</option><option value="27">Nebraska</option><option value="28">Nevada</option><option value="29">New Hampshire</option><option value="30">New Jersey</option><option value="31">New Mexico</option><option value="32">New York</option><option value="33">North Carolina</option><option value="34">North Dakota</option><option value="35">Ohio</option><option value="36">Oklahoma</option><option value="37">Oregon</option><option value="38">Pennsylvania</option><option value="51">Puerto Rico</option><option value="39">Rhode Island</option><option value="40">South Carolina</option><option value="41">South Dakota</option><option value="42">Tennessee</option><option value="43">Texas</option><option value="52">US Virgin Islands</option><option value="44">Utah</option><option value="45">Vermont</option><option value="46">Virginia</option><option value="47">Washington</option><option value="48">West Virginia</option><option value="49">Wisconsin</option><option value="50">Wyoming</option></select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="postcode">Zip / Postal Code<sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="postcode" name="zip" placeholder="Zip / Postal Code"/>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="country">Country<sup>*</sup></label>
			<div class="controls">
			<select id="country" name="country">
				<option value="">Country</option>
				<option value="nigeria">Nigeria</option>
			</select>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="mobile">Mobile Phone </label>
			<div class="controls">
			  <input type="text"  name="mobile" id="mobile" placeholder="Mobile Phone"/>
			</div>
		</div>

	<p><sup>*</sup>Required field	</p>

	<div class="control-group">
			<div class="controls">
				<input type="hidden" name="email_create" value="1">
				<input type="hidden" name="is_new_customer" value="1">
				<input class="btn btn-large btn-success" type="submit" name="register" value="Register" />
			</div>
		</div>
	</form>
</div>
</div>
</div>

<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
<?php include 'footer.php'; ?>