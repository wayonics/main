<?php
session_start();
error_reporting(~E_ALL);
include "db.php";
$result=mysql_query("select * from productionmachines where machinecode = '".$_GET['mn']."'")or die(mysql_error()); 
$res=mysql_fetch_array($result);

$result=mysql_query("select * from productionshiftduration where machinecode = '".$_GET['mn']."'")or die(mysql_error()); 
$res=mysql_fetch_array($result);

  
echo $res['spindles']; 



?>


