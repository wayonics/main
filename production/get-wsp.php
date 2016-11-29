<?php
session_start();
include "db.php";
 
 
$result=mysql_query("select * from productionworkedspndls where duration = '".$_GET['sp2']."'")or die(mysql_error());
$res=mysql_fetch_array($result);
echo $res['workdspndls'];
?>


