<?php
include"config.php";

$first_name= $_POST['first_name'];
$last_name= $_POST['last_name'];
$email= $_POST['email'];
$phone= $_POST['phone_number'];
$address= $_POST['address'];
$city= $_POST['city'];
$position= $_POST['position'];

// Upload File
$folder= "resume/";
$file_name=basename($_FILES["resume"]["name"]);
$target_file= $folder . $file_name ;
$upload= 1;
$file_type= pathinfo($target_file, PATHINFO_EXTENSION);


if($_POST['submit']){
	if(move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file)){
	$insert=mysql_query("INSERT INTO `job_applicant` VALUES ('NULL', '$first_name',
	'$last_name', '$email', '$phone', '$address', '$city', '$file_name', '$position')");
	
		if($insert){
			echo "<script>window.location.href='thank-you.html'</script>";
							}
		else{
			echo"<div class='alert alert-danger'>
					<script>alert('Your application has failed to sent');location.href='application-form.php'</script>
				 </div>";
			}
	}

	// else if($_FILES["resume"]["size"] > 10000){
	// 	echo "Sorry, your file is too large." . $upload=0;
	// }

	else{
		echo "the file failed to upload";
	}
}
?>