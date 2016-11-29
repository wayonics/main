<?php
session_start();
error_reporting(~E_ALL);
include "db.php";
$result=mysql_query("select * from productionmachines where machinecode = '".$_GET['mn']."'")or die(mysql_error()); 
$res=mysql_fetch_array($result);

$result1=mysql_query("select * from productionmachines where machinecode = '".$_GET['sp']."'")or die(mysql_error()); 
$res1=mysql_fetch_array($result1);
 
 
$result2=mysql_query("select * from productionmachines where machinecode = '".$_GET['sp1']."'")or die(mysql_error()); 
$res2=mysql_fetch_array($result2);

$result3=mysql_query("select * from productionmachines where machinecode = '".$_GET['sp2']."'")or die(mysql_error()); 
$res3=mysql_fetch_array($result3);

 
 $result4=mysql_query("select * from productionmachines where machinecode = '".$_GET['txt5']."'")or die(mysql_error()); 
$res4=mysql_fetch_array($result4);
 
 
echo $res['machinename'];
echo $r1=$res1['spindles'];
$_SESSION['spndles']=$res1;
echo $res2['spindles'];
echo $res3['spindles'];
echo $res4['spindles'];



 


?>


