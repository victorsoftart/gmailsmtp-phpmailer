<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Send email via Gmail SMTP server in PHP</title>
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
	<meta name="robots" content="noindex, nofollow">
</head>
<body>
	<div id="main">
		<h1>Send email via Gmail SMTP server in PHP</h1>
		<div id="container">
			<h2>Gmail SMTP</h2>
			<hr/>
			<form action="index.php" method="post">
				<input type="text" placeholder="To : Email Id " name="receiver_email" value="tester@gmail.com"/>
				<input type="text" placeholder="Subject : " name="subject" value="Gmail SMTP Test"/>
				<textarea rows="4" cols="50" placeholder="Enter Your Message..." name="message">Test Gmail SMTP <?php echo date("m/d/Y");?></textarea>
				<input type="submit" value="Send" name="send"/>
			</form>
		</div>
	</div>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
if(isset($_POST['send']))
{
	$sender_name = "smtp tester";
	$sender_email = "noreply@mailer.org";
	//
	$username = "smtpuser@gmail.com";
	$password = "smtpuser.password";
	//
	$receiver_email = $_POST['receiver_email'];
	$message = $_POST['message'];
	$subject = $_POST['subject'];
	
	$mail = new PHPMailer(true);
	$mail->isSMTP();
  //$mail->SMTPDebug = 2;
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
  
	$mail->SMTPSecure = 'tls';
	$mail->Port = 587;
	
	$mail->setFrom($sender_email, $sender_name);
	$mail->Username = $username;
	$mail->Password = $password;
  
	$mail->Subject = $subject;
	$mail->msgHTML($message);
	$mail->addAddress($receiver_email);
	if (!$mail->send()) {
		$error = "Mailer Error: " . $mail->ErrorInfo;
		echo '<p id="info_msg">'.$error.'</p>';
	}
	else {
		echo '<p id="info_msg">Message sent!</p>';
	}
}
else{
	echo '<p id="info_msg">Please enter valid data</p>';
}
?>
</body>
</html>