<html>
<body>
<?php
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;
//require 'vendor/autoload.php';

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

mail("emily.mussey@gmail.com", $name, $message);
?>
</body>
</html>
