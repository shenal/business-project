<?php
session_start();//Starts session

$username = $_POST['username'];
$password = $_POST['password'];

if ($username&&$password)
	{
	$connect = mysql_connect("localhost","root","root") or die ("couldnt connect");
	mysql_select_db("msg_system");
	
	$query= mysql_query("SELECT * FROM users WHERE username='$username'");
	
	$numrows = mysql_num_rows($query);
	if ($numrows !=0)
		{
		 while ($row = mysql_fetch_assoc($query))
			{
				$dbusername = $row['username'];
				$dbpassword = $row['password'];
			}
		if ($username==$dbusername&&$password==$dbpassword)
			{
				 echo "You Have successfully logged in as <em>$username</em>\n you will be redirected to the main page"; 
				 $_SESSION['username']=$dbusername;
				 sleep (5);
				 header("Location: main.php");
			}
		else
			die ("The password you entered is incorrect");
		 }
	else
		die("User does not exist");
	}
else
	echo("Please Enter an username and a password");
	
	?>