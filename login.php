<?php
	session_start();
?>

<html>
<body>
<?php
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;
//require 'vendor/autoload.php';
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;
//require 'vendor/autoload.php';
$db_c = pg_connect("host=ec2-174-129-218-200.compute-1.amazonaws.com	 port = 5432 dbname=d1taisgtq9v2u6 user=lwaasictcokjps 
password=7cc9f025cacf299ba7640082a90881e65a38903fc048e3dd326700b7ebf3db8f");
$em = $_POST["email"];
$pw = $_POST["password"];
$h_pw = password_hash($pw, PASSWORD_DEFAULT);
$tquery = "select * from users where users.email = '$em'";
$rows = pg_fetch_row($tquery);
if (!$rows)
{
	session_destroy();
	header('Location: /ECT/loginfailure.html');
	
}
else 
{
	if ($rows[3] == $h_pw)
	{
		$_SESSION["email"] = $em;
		$_SESSION["password"] = $h_pw;
		header('Location: /ECT/success.html');
	}
	else
	{
		session_destroy();
		header('Location: /ECT/failure.html');
	}
}

?>
</body>
</html>
