<html>
<body>
<?php
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;
//require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require 'vendor/autoload.php';
//database connection 
$db_c = pg_connect("host=ec2-174-129-218-200.compute-1.amazonaws.com	 port = 5432 dbname=d1taisgtq9v2u6 user=lwaasictcokjps 
password=7cc9f025cacf299ba7640082a90881e65a38903fc048e3dd326700b7ebf3db8f");

//variable assignment to html post form info: variable format: $xxx
//SEMICOLONS
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

//how to hash a password
$h_pw = password_hash($pw, PASSWORD_DEFAULT);

//TO QUERY A DATABASE
//STEP 1: set up a variable with a string of the SQL command
$tquery = "select * from users where users.email = '$em'"; 
//select * from users: select all entries from table users
//where users.email = '$em'";: only select the entries where the email field is the same as '$em'

//STEP 2: use the function pg_query with your SQL string variable as the argument
//RETURN VALUE of PG_QUERY: A LIST of matching entries
$tresult = pg_query($tquery);
$numrows = pg_num_rows($tresult); //NUMBER of matching entries from the query
if ($numrows == 0)
{
	//INSERT INTO TABLE
	//CREATE STRING
	$query = "INSERT INTO users VALUES ('$fn', '$ln', '$em', '$h_pw', '$ad', '$ct', '$st', '$zc', '$bd', '$bm', '$by')";
	//INSERT INTO users VALUES: insert an entry into the table "users" with the specified values, ORDER MATTERS
	
	$result = pg_query($query); //yay another query
	
	//send email upon signup
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->SMTPDebug = SMTP::DEBUG_SERVER;
	$mail->Host = 'smtp.gmail.com'; //using gmail
	$mail->Port = 587;
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
	$mail->SMTPAuth = true;
	$mail->setFrom('thePersistentCookies@gmail.com', 'Crazy Cookies'); //sending from "our email", "our name"
	$mail->Username = 'thePersistentCookies@gmail.com'; //our google username
	$mail->Password = 'Uvaistheb3st!'; //our google password
	$mail->addAddress($em, $fn); //send to email from database with name from database
	$mail->Subject  = "You've Successfully Signed Up!"; //subject
	$mail->Body     = 'Welcome to the Persistent Cookies Wedding Planning Services!'; //body of email
	if(!$mail->send()) //validate
	{
		//echo is print
	  echo 'Message was not sent.';
	  echo 'Mailer error: ' . $mail->ErrorInfo;
	} 
	else 
	{
	  echo 'Message has been sent.';
	
	//REDIRECTS THE WEBPAGE to this file
	header('Location: /ECT/success.html');
}
else 
{
	header('Location: /ECT/failure.html');
}

?>
</body>
</html>


--------------------------------------------------------------------------------------------------------------------------------------------------
//PHP SESSIONS
<?php
session_start(); 
?>
//STARTS a php session; to start a session, session_start() MUST be FIRST thing in file
//A SESSION REMEMBERS THAT YOU ARE LOGGED IN AND WHO YOU ARE 

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

//Gives you the first entry in the query result
$rows = pg_fetch_row($result);

//if your login credentials don't exist in the database
if (!$rows)
{
	//THIS COMMAND RESETS ALL SESSION VARIABLES
	session_unset();
	
	//THIS COMMAND DELETES A SESSION
	session_destroy();
	header('Location: /ECT/loginfailure.html');
	
}

//if you do exist in the database
else 
{
	//VERIFY A PASSWORD WITH A HASH: arg 1: the plaintext, arg2: the hash in the db
	//RETURNS TRUE IF VALID OR FALSE IF NOT
	 if (password_verify($pw, $rows[3])) //you can index an entry from 0 to whatever to get the value of that column
	{
		//THESE ARE SESSION VARIABLES
		//They ALWAYS have this format: $_SESSION['key'] = value;
		//These can be accessed as long as a session is alive
		
		$_SESSION['email'] = '$em';
		$_SESSION['password'] = '$h_pw';
		$_SESSION['elephant'] = "Bob"; //these can be ANYTHING
		header('Location: /ECT/success.html');
	}
	else
	{
		session_unset();
		session_destroy();
		header('Location: /ECT/failure.html');
	} 
}

?>



