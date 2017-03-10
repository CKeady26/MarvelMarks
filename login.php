<?php
	session_start();


	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if ($username && $password)
	{
		$connect = mysql_connect("localhost", "root", "PASSWORD HERE") or die("Could not connect to MySQL database!");
		mysql_select_db("phplogin") or die("Could not find specified database!");
		
		$query = mysql_query("SELECT * FROM Users WHERE username='$username'");
		
		$numrows = mysql_num_rows($query);
		
		if ($numrows != 0)
		{
			while ($row = mysql_fetch_assoc($query))
			{
				$dbusername = $row['username'];
				$dbpassword = $row['password'];
			}
			//check to see if they match
			if ($username == $dbusername && $password == $dbpassword)
			{
				//found corresponding user/pass in MySQL server, redirect to main.php
				header('Location: main.php');
				$_SESSION['username'] = $username;
			}
			else
			{
				echo ("Incorrect Username/Password");
			}
		}
		else
		{
			die("That user does not exist!");
		}
	}
	else
	{
		die("Please enter a username and a password:");
	}
?>
