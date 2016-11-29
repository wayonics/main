<?php
include "dbconnect.php";
$result=mysqli_query($con,"select * from table_name where id= '".$_GET['result']."'") or die(mysqli_error($con));
$res=mysqli_fetch_array($result);
echo $res['name'];
?>


