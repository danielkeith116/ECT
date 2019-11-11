<?php
session_start();
if (!isset($_SESSION['email']))
{
	header('Location: /ECT/login.php');
}
?>
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
$fn = $_POST["fName"];
$ln = $_POST["lName"];
$em = $_POST["email"];
$wm = $_POST["month"];
$wd = $_POST["day"];
$wy = $_POST["year"];
$vn = $_POST["venue"];
$lk = $_POST["link"];
$mg = $_POST["message"];
$query = "INSERT INTO orders VALUES ('$fn', '$ln', '$em', '$wm', '$wd', '$wy', '$vn', '$lk', '$mg',0.00252,'ChiAlpha')";
$result = pg_query($query);
$_SESSION['checkout'] = 'Josh Moran';
header('Location: /ECT/xaBitPay.php');

?>
</body>
</html>