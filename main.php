<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en">
<head>
   <title>FIT Messaging system</title>
   <link rel='stylesheet' href='style/sMain.css ' type='text/css'>
   <link rel='shortcut icon' href='favicon.ico'>
</head>
<body>
<div id="background">
    <img src="Imgs/imgBackground.jpg" class="stretch" alt="" />
</div>
<?php

session_start();

if($_SESSION['username'])
{
echo "
<div id='container'> 
<div id='content'>

<div id='header'>
 <h3>Welcome  " .$_SESSION['username']."!!!</h3>
 </div>

 <p> 

	<form action='submit.php' method='POST'>

	Please Enter Your message here <br/>
	<textarea name='message'></textarea><br/>
	
	<input type='submit' name='Submit' value='Post!'/>
	</form>

</p>
<br/>
<a href='logout.php'>Logout</a> 
</p>
</div>
</div>";
}
else
die ("You are not logged in . Please <a href='index.php'>Login</a>");
?>
</body>
</html>