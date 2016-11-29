  <?php
  session_start();
echo $id=$_GET['id'];
include 'db.php';
$q=mysql_query("DELETE FROM `machinereading` WHERE id='$id'");
if($q)
header('location:viewpacking.php');
  
  ?>
  
  
  
  