<?php
session_start();

/*if (isset($_SESSION['email']))
{
	echo "TRUE";
	echo "<br>";
	echo $_SESSION['email'];
}
else {echo "FALSE";}
echo "<br>";
echo $_SESSION['password'];
echo "<br>";
session_unset();
echo "unset called";
echo "<br>";

if (isset($_SESSION['email']))
{
	echo "TRUE";
	echo "<br>";
	echo $_SESSION['email'];
	echo "<br>";
echo $_SESSION['password'];
}*/
/*echo $_SESSION['email'];
echo "<br>";
echo $_SESSION['password'];
echo "<br>";*/

session_unset();
session_destroy();

header('Location: /ECT/index.html');
?>