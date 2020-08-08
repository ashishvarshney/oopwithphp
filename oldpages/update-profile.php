<?php
include_once 'classes/class.login.php';







if ($_FILES['business_logo']['size'] == 0 && $_FILES['business_logo']['error'] == 0)
{
  $business_logo = 'old_image';
}else{



$target_dir = "images/business_logo/";
$target_file = $target_dir . basename($_FILES["business_logo"]["name"]);
$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) {


 $check = getimagesize($_FILES["business_logo"]["tmp_name"]);
  if($check !== false) {
	$business_logo = basename( $_FILES["business_logo"]["name"]);
    $uploadOk = 1;
  } else {
    $business_logo = 'old_image';
    $uploadOk = 0;
  }

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["business_logo"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["business_logo"]["tmp_name"], $target_file)) {
    
  } 
}
	 
	 
	
}


	
    $business_name = filter_var($_POST["business_name"], FILTER_SANITIZE_STRING);
	$phone_number = filter_var($_POST["phone_number"], FILTER_SANITIZE_STRING);
	$business_number = filter_var($_POST["business_number"], FILTER_SANITIZE_STRING);
	$business_address = filter_var($_POST["business_address"], FILTER_SANITIZE_STRING);
	$business_website = filter_var($_POST["business_website"], FILTER_SANITIZE_STRING);
	

  $member_id = isset($_SESSION["id"])?$_SESSION["id"]:0;
  $user = new Login();
    $isUpdate = $user->updateprofile($member_id,$phone_number,$business_number,$business_name,$business_logo,$business_address,$business_website);
    if ($isUpdate) {
		  header("Location: account.php");
		
    }
    
    
}