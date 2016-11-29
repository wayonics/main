 <?php
  session_start();
echo $id=$_GET['id'];
include 'db.php';
$q=mysql_query("DELETE FROM `productionstoapgereason` WHERE  id='$id'")or die(mysql_error());
if($q)
header('location:stopagereason.php');
 
  
  ?>