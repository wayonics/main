<?php
session_start();
include "db.php";
$result=mysql_query("select * from productionshiftduration where shift = '".$_GET['duration']."'")or die(mysql_error());
$res=mysql_fetch_array($result);
echo $res=$res['duration'];
$_SESSION['duration']=$res;

?>


