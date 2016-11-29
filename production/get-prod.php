<?php
session_start();
include "db.php";

$acthanks=$_GET['acthanks'];
$prodconst=$_SESSION['prodconst']

$prod=$acthanks*$prodconst;
$_SESSION['prdo']=$prod;
 
//$result=mysql_query("select * from productionmachines where machinename = '".$_GET['result']."'")or die(mysql_error());
//$res=mysql_fetch_array($result);
//echo $r2=$res['spindles'];
 
?>


