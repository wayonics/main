 <?php
  session_start();
echo $id=$_GET['id'];
include 'db.php';
$q=mysql_query("DELETE FROM `issues` WHERE  id='$id'")or die(mysql_error());
if($q)
header('location:issuesview.php');
 
  
  ?>