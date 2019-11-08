<?php
session_start();
if (!isset($_SESSION['email']))
{	
	header('Location: /ECT/login.html');
}
else
{header('Location: /ECT/store.html');}
?>