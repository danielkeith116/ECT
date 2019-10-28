<html>
<body>
<?php
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;
//require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require 'vendor/autoload.php';
$db_c = pg_connect("host=ec2-174-129-218-200.compute-1.amazonaws.com	 port = 5432 dbname=d1taisgtq9v2u6 user=lwaasictcokjps 
password=7cc9f025cacf299ba7640082a90881e65a38903fc048e3dd326700b7ebf3db8f");
$name = $_POST["inputName"];
$email = $_POST["email"];
$message = $_POST["message"];
//send email upon contactus
//require 'PHPMailerAutoload.php';
/*$mail = new PHPMailer;
$mail->setFrom('thePersistentCookies@gmail.com', 'Admin');
$mail->Username = 'thePersistentCookies@gmail.com';
$mail->Password = 'Uvaistheb3st!';
$mail->addAddress('thePersistentCookies@gmail.com', 'Admin');
$mail->Subject  = $name+"'s Contact Us Submission";
$mail->Body     = "Their Email: "+$email +"They're Message: "+ $message;
if(!$mail->send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo 'Message has been sent.';
}*/
$query = "INSERT INTO feedback VALUES ('$name', '$email', '$message')";
$result = pg_query($query);
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->SMTPAuth = true;
$mail->setFrom('thePersistentCookies@gmail.com', 'Crazy Cookies');
$mail->Username = 'thePersistentCookies@gmail.com';
$mail->Password = 'Uvaistheb3st!';
$mail->addAddress('thePersistentCookies@gmail.com', 'Crazy Cookies');
$mail->Subject  = "New Contact Us Entry";
$mail->Body     = 'Name: ' . $name . ' Email: ' . $email . ' Message: ' . $message;
if(!$mail->send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  header('Location: /ECT/contactus.html');
}
?>
</body>
</html>
