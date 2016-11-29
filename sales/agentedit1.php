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
 
 
 $s=mysql_query("UPDATE `salesagents` SET `agentcode`='$a1',`agentname`='$a2',`address`='$a3',`city`='$a4',`state`='$a5',`phone`='$a6',`commissionper`='$a7',`ledgerac`='$a8' WHERE id='$id'");
 
 
  
if($s)
echo "<script>alert('Data updated');window.location='agents.php';</script>";
  
}
?>

  