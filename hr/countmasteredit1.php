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
  
 
 include 'db.php';
  
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 $s=mysql_query("UPDATE `productioncountmaster` SET `dept`='$a1',`code`='$a2',`count`='$a3',`counttobemainatained`='$a4',`variety`='$a5',`deliveredhank`='$a6',`productionconstant`='$a7',`efficiency`='$a8',`expectedgrams`='$a9',`type`='$a10',`unittype`='$a11',`countfrequency`='$a12',`datetime`='$dt' WHERE id='$id'");
 
   
if($s)
echo "<script>alert('Data updated');window.location='countmaster.php';</script>";
  
}
?>

  