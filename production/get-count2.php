<?php
session_start();
error_reporting(~E_ALL);
include "db.php";
$result=mysql_query("select * from productionpackingmaster where code = '".$_GET['conetip']."'")or die(mysql_error()); 
$res=mysql_fetch_array($result);

$result1=mysql_query("select * from productionpackingmaster where code = '".$_GET['verity']."'")or die(mysql_error()); 
$res1=mysql_fetch_array($result1);
  
  
$result2=mysql_query("select * from productionpackingmaster where code = '".$_GET['colour']."'")or die(mysql_error()); 
$res2=mysql_fetch_array($result2);
  
  
 
echo $res['conetip']; 
echo $res1['variety'];
echo $res2['strapcolor'];

 
?>


