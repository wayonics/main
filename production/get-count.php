<?php
session_start();
error_reporting(~E_ALL);
include "db.php";
$result=mysql_query("select * from productioncountmaster where countcode = '".$_GET['grms']."'")or die(mysql_error()); 
$res=mysql_fetch_array($result);

$result1=mysql_query("select * from productioncountmaster where countcode = '".$_GET['hank']."'")or die(mysql_error()); 
$res1=mysql_fetch_array($result1);
 
$result2=mysql_query("select * from productioncountmaster where countcode = '".$_GET['const']."'")or die(mysql_error()); 
$res2=mysql_fetch_array($result2);
 
 
 $result3=mysql_query("select * from productioncountmaster where countcode = '".$_GET['eff']."'")or die(mysql_error()); 
$res3=mysql_fetch_array($result3);
 
 
  $result4=mysql_query("select * from productioncountmaster where countcode = '".$_GET['cm']."'")or die(mysql_error()); 
$res4=mysql_fetch_array($result4);
 
  $result5=mysql_query("select * from productioncountmaster where countcode = '".$_GET['grmss']."'")or die(mysql_error()); 
$res5=mysql_fetch_array($result5);

  
echo $res['expectedgrams'];
echo $res1=$res1['deliveredhank'];
$_SESSION['acthank']=$res1;

echo $res2=$res2['productionconstant'];
$_SESSION['prodconst']=$res2;


echo $res3['efficiency'];
echo $res4['counttobemainatained'];
echo $res5['expectedgrams'];




 
?>


