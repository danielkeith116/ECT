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
$wp = $_POST["package"];
$fn = $_POST["fName"];
$ln = $_POST["lName"];
$em = $_POST["email"];
$wm = $_POST["month"];
$wd = $_POST["day"];
$wy = $_POST["year"];
$vn = $_POST["venue"];
$lk = $_POST["link"];
$mg = $_POST["message"];

$pr = 0;
$redirect = 'Location: /ECT/index.html';
if ($wp == "All In")
{
    $pr = 0.003;
    $redirect = 'Location: /ECT/allBitPay.html';
}
if ($wp == "Halfway")
{
    $pr = 0.002;
    $redirect = 'Location: /ECT/halfBitPay.html';
}
if ($wp == "11th Hour")
{
    $pr = 0.001;
    $redirect = 'Location: /ECT/11BitPay.html';
}
$query = "INSERT INTO orders VALUES ('$fn', '$ln', '$em', '$wm', '$wd', '$wy', '$vn', '$lk', '$mg','$pr','$wp')";
$result = pg_query($query);
header($redirect);

?>
</body>
</html>