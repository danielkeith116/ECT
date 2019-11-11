<?php
session_start();
?>

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
$result = pg_query($tquery);
$rows = pg_fetch_row($result);
if (!$rows)
{
	session_destroy();
	header('Location: /ECT/loginfailure.php');
	
}
else 
{
	 if (password_verify($pw, $rows[3]))
	{
		$_SESSION['email'] = $em;
		$_SESSION['password'] = $h_pw;
		header('Location: /ECT/memberHome.php'); //change to member dashboard
	}
	else
	{
		session_unset();
		session_destroy();
		header('Location: /ECT/loginfailure.php'); 
	} 
}

?>
