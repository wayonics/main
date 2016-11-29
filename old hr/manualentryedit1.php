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
$a10=$_POST['f10'];
 
 
 include 'db.php';
  
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 $s=mysql_query("UPDATE `manualentry` SET  `date`='$a1',`emppcode`='$a2',`empname`='$a3',`shift`='$a4',`logintime`='$a5',`logouttime`='$a6',`late`='$a7',`early`='$a8',`workhours`='$a9',`remarks`='$a10',`datetime`='$dt' WHERE id='$id'");
  
  
if($s)
echo "<script>alert('Data updated');window.location='manualentryview.php';</script>";
  
}
?>

  