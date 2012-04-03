<!DOCTYPE html PUBLIC  '-//W3C//DTD XHTML 1.01//EN '>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta http-equiv= 'Content-Type ' content= 'text/html; charset=ISO-8859-1 '>
   <title>FIT Messaging system</title>
   <link rel= 'stylesheet ' href= 'style/sMain.css ' type= 'text/css '/>
   <link rel= 'shortcut icon ' href= 'favicon.ico '/ >
</head>
<body>
<?php 
session_start();

if($_SESSION)
 header( 'Location: main.php ');
 ?>
 
 <div id="background">
    <img src="Imgs/imgBackground.jpg" class="stretch" alt="background" />
</div>
<div id='container'>
	<div id='logo' >
	</div>
	
	
<div id='content'>
<div id= 'header '>

   <h1>Welcome to FIT messaging system</h1>
</div>

<div id= 'content '>
   
   <p> 

	<form action='login.php' method='POST'>
	<table>
	<tr>

	<td>Username:</td><td><input type='text'name='username' placeholder='[Username]'></br></td>
	</tr>
	<tr>
	<td>Password:</td><td><input type='password'name='password' placeholder='[Password]'></br></td>
	</tr>
	<tr>
	<td></td><td><input type='submit' name='Login'></td>
	</tr>
	</table>
	</form>

	</p>
</div>
</div>

</div>

   


</body>
</html>