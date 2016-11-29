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
 

 
 include 'db.php';
  
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 $s=mysql_query("UPDATE `gatepass` SET `date`='$a1',`machine`='$a2',`vehicleno`='$a3',`product`='$a4',`transport name`='$a5',`dcno`='$a6',`amount`='$a7',`remarks`='$a8' , `datetime`='$dt' WHERE id='$id'")or die(mysql_error());
  
  
if($s)
echo "<script>alert('Data updated');window.location='gatepassentryview.php';</script>";
  
}
?>

  