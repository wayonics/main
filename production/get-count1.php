<?php
session_start();
error_reporting(~E_ALL);
include "db.php";
$result=mysql_query("select * from productioncountmaster where countcode = '".$_GET['ccode']."'")or die(mysql_error()); 
$res=mysql_fetch_array($result);

$result1=mysql_query("select * from productioncountmaster where countcode = '".$_GET['eff']."'")or die(mysql_error()); 
$res1=mysql_fetch_array($result1);
  
 
echo $res['count']; 
echo $res1['efficiency'];

 
?>


