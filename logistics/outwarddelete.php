  <?php
  session_start();
echo $id=$_GET['id'];
include 'db.php';
$q=mysql_query("DELETE FROM `outward` WHERE id='$id'");
if($q)
header('location:view.php');
  
  ?>
  
  
  
  