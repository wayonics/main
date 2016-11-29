 <?php
  session_start();
echo $id=$_GET['id'];
include 'db.php';
$q=mysql_query("DELETE FROM `leaveentry` WHERE id='$id'");
 
if($q)
header('location:leaveentryview.php');
 
  
  ?>