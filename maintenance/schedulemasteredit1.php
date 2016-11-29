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
$a11=$_POST['f11'];
$a12=$_POST['f12'];
$a13=$_POST['f13']; 
 
 
 include 'db.php';
  
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 $s=mysql_query("UPDATE `schedulemaster` SET `unit`='$a1',`deptname`='$a2',`deptcode`='$a3',`machinename`='$a4',`machineno`='$a5',`slno`='$a6',`activity`='$a7',`years`='$a8',`months`='$a9',`days`='$a10',`hours`='$a11',`manhours`='$a12',`maintaineddate`='$a13'  WHERE id='$id'");
 
    
  
if($s)
echo "<script>alert('Data updated');window.location='schedulemaster.php';</script>";
  
}
?>

  