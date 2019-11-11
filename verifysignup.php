<html>
<body>
<?php
session_start();
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;
//require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require 'vendor/autoload.php';
$db_c = pg_connect("host=ec2-174-129-218-200.compute-1.amazonaws.com	 port = 5432 dbname=d1taisgtq9v2u6 user=lwaasictcokjps 
password=7cc9f025cacf299ba7640082a90881e65a38903fc048e3dd326700b7ebf3db8f");
$fn = $_POST["fName"];
$ln = $_POST["lName"];
$em = $_POST["email"];
$pw = $_POST["password"];
$ad = $_POST["address"];
$ct = $_POST["city"];
$st = $_POST["state"];
$zc = $_POST["zipcode"];
$bm = $_POST["month"];
$bd = $_POST["day"];
$by = $_POST["year"];
$h_pw = password_hash($pw, PASSWORD_DEFAULT);
$tquery = "select * from users where users.email = '$em'";
$tresult = pg_query($tquery);
$numrows = pg_num_rows($tresult);
if ($numrows == 0)
{
	$query = "INSERT INTO users VALUES ('$fn', '$ln', '$em', '$h_pw', '$ad', '$ct', '$st', '$zc', '$bd', '$bm', '$by')";
	$result = pg_query($query);
	$_SESSION['email'] = '$em';
	$_SESSION['password'] = '$h_pw';
	//send email upon signup
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
	$mail->addAddress($em, $fn);
	$mail->Subject  = "You've Successfully Signed Up!";
	$mail->Body     = 'Welcome to the Persistent Cookies Wedding Planning Services!';
	if(!$mail->send()) 
	{
	  echo 'Message was not sent.';
	  echo 'Mailer error: ' . $mail->ErrorInfo;
	} 
	else 
	{
	  echo 'Message has been sent.';
	}
	header('Location: /ECT/memberHome.php'); 
}
else 
{
	session_unset();
	session_destroy();
	header('Location: /ECT/failure.php');
}

?>
</body>
</html>
