 <?php
  session_start();
  $id=$_GET['id'];
include 'db.php';
$q=mysql_query("DELETE FROM `gatepassissue` WHERE id='$id'");
if($q)
header('location:gatepassissueview.php');
 
  
  ?>