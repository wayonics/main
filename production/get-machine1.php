<?php
session_start();
error_reporting(~E_ALL);
include "db.php";
$result=mysql_query("select * from productionmachines where machinecode = '".$_GET['mn']."'")or die(mysql_error()); 
$res=mysql_fetch_array($result);

$result1=mysql_query("select * from productionmachines where machinecode = '".$_GET['drums']."'")or die(mysql_error()); 
$res1=mysql_fetch_array($result1);
 
  
 $result2=mysql_query("select * from productionmachines where machinecode = '".$_GET['drums1']."'")or die(mysql_error()); 
$res2=mysql_fetch_array($result2);
 
  $result3=mysql_query("select * from productionmachines where machinecode = '".$_GET['drums2']."'")or die(mysql_error()); 
$res3=mysql_fetch_array($result3);
 
  
 
 
echo $res['machinename'];
echo $r1=$res1['spindles'];
echo $r2=$res2['spindles'];
echo $r3=$res3['spindles'];


  


?>


