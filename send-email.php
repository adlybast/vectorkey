  <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

   <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.css">

<?php
require"phpmailer/PHPMailerAutoload.php";


$name = $_POST['sender_name'];
$email = $_POST['sender_email'];
$subject = $_POST['sender_subject'];
$message = $_POST['sender_message'];

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                // Set mailer to use SMTP
$mail->Host = ' smtp.gmail.com';  				// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                        	// Enable SMTP authentication
$mail->Username = "your email";                		// SMTP username
$mail->Password = "your pass";                   		// SMTP password
$mail->SMTPSecure = 'tls';                     	// Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                             	// TCP port to connect to

$mail->setFrom($email, $subject); //('from', \'subject
$mail->addAddress('support@digitize.co.id', $_POST['sender_name']);     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com'sender_subject);
//$mail->addBCC('bcc@example.com')$_POST['sender_message']r.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body    = "
	Name: $name <br>
	Email: $email <br>
	Subject: $subject <br>
	Message: $message
";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

else {
    echo "<script>window.location.href='thank-you.html'</script>";
}
?>