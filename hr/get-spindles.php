<?php
include "db.php";
$result=mysql_query("select * from productionmachines where machinename = '".$_GET['result']."'");
$res=mysql_fetch_array($result);
echo $res['spindles'];
?>


