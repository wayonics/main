
<?php
session_start();
 if(isset($_POST['submit']))
{
 echo  $id= $_SESSION['id1']; 
$a1=$_POST['f1'];
$a2=$_POST['f2'];
$a3=$_POST['f3'];
$a4=$_POST['f4'];
$a5=$_POST['f5']; 
 
 include 'db.php';
  
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 $q=mysql_query("UPDATE `machinereading` SET `unit`='$a1',`count`='$a2',`date`='$a3',`shift`='$a4',`tweight`='$a5',`datetime`='$dt' WHERE id='$id'");
  
  
if($q)
echo "<script>alert('Data updated');window.location='packingreadingview.php.php';</script>";
 
 

}
?>

