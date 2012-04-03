<?php 
session_start();
$connect = mysql_connect("localhost","root","root") or die ("couldnt connect");
	mysql_select_db("msg_system",$connect);
	
$username = $_SESSION['username'];
$message = $_POST['message'];

mysql_query("INSERT INTO messages (message , user) VALUES ('$message','$username')");
mysql_close($connect);
 echo "Your message has been entered to the system";

?>