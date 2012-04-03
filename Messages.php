<?php
session_start();
$connect = mysql_connect("localhost","root","root") or die ("couldnt connect");
	mysql_select_db("msg_system",$connect);
?>
<html>
<head>
<title>Messages</title>
</head>
<body>
List of messages<br/> <br>
<table border='1'>
<tr><td>id</td><td>user</td><td>Time/Date</td><td>message</td></tr>
<?php
$sql = mysql_query("SELECT * from messages ORDER BY id DESC");
while($row = mysql_fetch_array($sql)){
$id = $row['id'];
$user = $row['user'];
$td = $row['timestamp'];
$message = $row['message'];
?>
<table border='1'>

<tr><td><?php echo $id;?></td><td><?php echo $user; ?></td><td><?php echo $td; ?></td><td><?php echo $message; ?></td></tr>
</table>
<?php 
}
?>
</body>
</html>