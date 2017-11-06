<?php
include"config.php";

$first_name= $_POST['first_name'];
$last_name= $_POST['last_name'];
$email= $_POST['email'];
$phone= $_POST['phone_number'];
$address= $_POST['address'];
$city= $_POST['city'];
$resume= $_FILES['resume'];
$position= $_POST['position'];

// Upload File
$folder= "resume/";
$target_file= $folder . basename($_FILES["resume"]["name"]);
$upload= 1;
$file_type= pathinfo($target_file, PATHINFO_EXTENSION);


if($_POST['submit']){
	if(move_uploaded_file($_FILES['resume']['tmp_name'], $folder)){	
	$insertapplication=mysql_query("INSERT INTO `job_applicant` VALUES ('NULL', '$first_name',
	'$last_name', '$email', '$phone', '$address', '$city', '$resume', 'asdsa')");
	
		if($insertapplication){
			echo "<div class='alert alert-success'>
					<script>alert('Your application has been sent');location.href='career.html'</script>
				  </div>";
							}
		else{
			echo"<div class='alert alert-danger'>
					<script>alert('Your application has failed to sent');location.href='application-form.php'</script>
				 </div>";
			}
	}
	else if($_FILES["resume"]["size"] > 10000){
		echo "Sorry, your file is too large." . $upload=0;
	}
	else if ($upload==0){
		echo "Your Resume fail to upload";
	}
}
?>