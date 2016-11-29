<?php
defined('DB_HOST') ? NULL : define('DB_HOST', 'localhost');
defined('DB_USER') ? NULL : define('DB_USER', 'root');
defined('DB_PASS') ? NULL : define('DB_PASS', '');
defined('DB_NAME') ? NULL : define('DB_NAME', 'dbname');
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME) or die(mysql_error());
?>