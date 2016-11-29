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

 
 
 include 'db.php';
  
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 $s=mysql_query("UPDATE `productionmachines` SET `dept`='$a1',`machinename`='$a2',`machinecode`='$a3',`machinetype`='$a4',`unittype`='$a5',`spindles`='$a6',`datetime`='$dt' WHERE id='$id'");
  
   
  
if($s)
echo "<script>alert('Data updated');window.location='machines.php';</script>";
  
}
?>

  