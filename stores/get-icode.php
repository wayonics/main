<?php
session_start();
error_reporting(~E_ALL);
include "db.php";
$result=mysql_query("select * from productioncountmaster where countcode = '".$_GET['grms']."'")or die(mysql_error()); 
$res=mysql_fetch_array($result);
 
  
echo $res['expectedgrams'];
  
?>


