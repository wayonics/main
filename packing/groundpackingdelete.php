  <?php
  session_start();
echo $id=$_GET['id'];
include 'db.php';
$q=mysql_query("DELETE FROM `groundreading` WHERE id='$id'");
if($q)
header('location:viewpacking.php');
  
  ?>
  
  
  
  