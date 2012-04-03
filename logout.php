<?php
session_start();
session_destroy();
echo "Youve been looged out <a href='index.php'> Login</a> again";

?>