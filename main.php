<?php
	session_start();
	
	if ($_SESSION['username'])
	{
		echo "Welcome, " . $_SESSION['username'] . "<br><a href='logout.php'>LOGOUT</a>";
	}
	else
	{
		die("You must be logged in to access this page! Please <a href='index.php'>login here.</a>");
	}
?>