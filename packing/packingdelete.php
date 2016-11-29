  <?php
  session_start();
echo $id=$_GET['id'];
include 'db.php';
$q=mysql_query("DELETE FROM `packing` WHERE id='$id'");
if($q)
header('location:viewpacking1.php');
  
  ?>
  
  
  
  