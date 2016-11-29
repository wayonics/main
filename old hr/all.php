<?php
 
include 'db.php';

$q=mysql_query("UPDATE `manualentry` SET  `status`='Approve' WHERE status='Not-Approve'");

if($q)
echo "<script>alert('APPROVED');window.location='overtime.php';</script>";
   

?>