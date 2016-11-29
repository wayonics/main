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


$a10=$_FILES['f10']['name'];
$temp=$_FILES['f10']['tmp_name'];
$path="pic/".$a10;
copy($temp,$path);
 
$a11=$_POST['f11'];
 
 include 'db.php';
  
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 
 $s=mysql_query("UPDATE `leaveentry` SET `empcode`='$a1',`empname`='$a2',`leavecode`='$a3',`fromdate`='$a4',`todate`='$a5',`leavedays`='$a6',`daysaccounatbleforleave`='$a7',`leavetype`='$a8',`groupname`='$a9',`photo`='$path',`reason`='$a11',`datetime`='$dt' WHERE id='$id'");
 
  
  
if($s)
echo "<script>alert('Data updated');window.location='leaveentryview.php';</script>";
  
}
?>

  