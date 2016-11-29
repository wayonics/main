 <?php
  session_start();
echo $id=$_GET['id'];
include 'db.php';
$q=mysql_query("DELETE FROM `manualentry` WHERE id='$id'");


if($q)
header('location:manualentryview.php');
 
  
  ?>