<?php
session_start();
if (!isset($_SESSION['email']))
{	
	header('Location: /ECT/login.php');
}
?>
<h1> You have arrived at the member home page! This means something worked. </h1>
<a class="btn btn-info" href="/ECT/logout.php" role="button">Log Out</a>