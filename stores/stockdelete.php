 <?php
  session_start();
  $id=$_GET['id'];
include 'db.php';
$q=mysql_query("DELETE FROM `purchaseentry1` WHERE id='$id'");
if($q)
header('location:stockreports.php');
 
  
  ?>