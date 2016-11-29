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
$a6=$_POST['f6'];
$a7=$_POST['f7'];
$a8=$_POST['f8'];
$a9=$_POST['f9'];
  
 
 
 include 'db.php';
  
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 
 $s=mysql_query("UPDATE `productionpackingmaster` SET `count`='$a1',`code`='$a2',`variety`='$a3',`lotno`='$a4',`conetip`='$a5',`strapcolor`='$a6',`conewt`='$a7',`conesbag`='$a8',`unit`='$a9',`datetime`='$dt' WHERE id='$id'");
 
  
  
if($s)
echo "<script>alert('Data updated');window.location='packingmaster.php';</script>";
  
}
?>

  