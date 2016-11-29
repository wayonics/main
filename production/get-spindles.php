<?php
session_start();
include "db.php";
$result=mysql_query("select * from productionmachines where machinename = '".$_GET['result']."'")or die(mysql_error());
$res=mysql_fetch_array($result);
echo $r2=$res['spindles'];
$_SESSION['spndls']=$r2;

?>


