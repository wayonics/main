 <?php
  session_start();
echo $itemname=$_SESSION['itemname'];
include 'db.php';
$q=mysql_query("DELETE FROM `purchaseentry1` WHERE itemname='$itemname'");
if($q)
header('location:issues.php');
 
  
  ?>