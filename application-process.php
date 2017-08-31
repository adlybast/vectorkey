<?php
include"config.php";

if($_POST['send_application']){
$insertapplication=mysql_query("INSERT INTO `job_applicant` VALUES ('NULL', '$_POST[apply_first_name]',
	'$_POST[apply_last_name]', '$_POST[apply_email]', '$_POST[apply_phone_number]', '$_POST[apply_address]',
	'$_POST[apply_city]', 'asd', 'asdsa'");

	if($insertapplication){

		echo "<script>alert('Your application has been sent');location.href='career.html'</script>";
						}
	else{
		echo"<script>alert('Your application has failed to sent');location.href='application-form.php'</script>";
		}
}
?>