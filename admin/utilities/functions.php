<?php
//Function to structure array
function pre_r($array){
	echo "<pre>";
	print_r($array);
	echo "</pre>";
}
//
function reArrayFiles($file_post){

	$file_ary = array();
	$file_count = count($file_post['name']);
	$file_keys = array_keys($file_post);

	for ($i=0; $i < $file_count; $i++) {

		foreach ($file_keys as $key) {
			$file_ary[$i][$key] = $file_post[$key][$i];

		}
	}
	return $file_ary;
}

// function errors(){

// 	echo '<div class="errors">';

//           	 if (isset($errors)) {

//           		if (count($errors) > 0) {

//           echo	'<label class="alert alert-danger">';

//          	 foreach ($errors as $error) {
//           			echo $error;
//           		}
//          echo "</label>";
//        	}
//       }
//        echo"</div>";
// }

function proimage_upload($filename){
	global $errors;
	global $success;

			$allowed_ext = ["jpg","jpeg","png"]; // These will be the only file extensions allowed
			$uploadDirectory = "uploads/products/";
	    $fileName = $_FILES[$filename]['name'];
	    $fileSize = $_FILES[$filename]['size'];
	    $fileTmpName  = $_FILES[$filename]['tmp_name'];
	    $fileType = $_FILES[$filename]['type'];
			$uploadPath = $uploadDirectory . basename($fileName);
			$fileExtension = strtolower(pathinfo($uploadPath, PATHINFO_EXTENSION));
	// $target_dir = "uploads/products/";
	// $target_file = $target_dir . basename($_FILES["$filename"]["name"]);
	// $file_name = $_FILES["$filename"]["name"];
	// $allowed_ext = ['jpeg','jpg','png'];
	// $fileExtension = strtolower(end(explode('.',$fileName)));

	if ($fileName == "") {
		return "";
	}
else {

	if ($fileSize > 500000) {

		array_push($errors, "The size  of" .$fileName. "is above 500kb");

	}

	if (!in_array($fileExtension, $allowed_ext)) {
		// code...
		array_push($errors, "Sorry, Only JPG, PNG and JPEG Formats are Allowed!");
	}


	if (count($errors) == 0) {

		$upload = move_uploaded_file($fileTmpName , $uploadPath);


		if ($upload) {
				// array_push($success, "uploaded");
				return $fileName;
			}

		else{
			array_push($errors, "There was an error uploading your image, please try again!");
		}
	}
}

}


function setnull($var){

	if (empty($var)) {
		$var = "";
		return $var;
	}
	else {
		return $var;
	}
}

 ?>
