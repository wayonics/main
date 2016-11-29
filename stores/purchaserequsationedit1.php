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
$a14=$_POST['f14'];
$a15=$_POST['f15'];
 
 
 include 'db.php';
  
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
$s=mysql_query(" UPDATE `storespurchaserequsation` SET  `slno`='$a1',`entrydate`='$a2',`itemname`='$a3',`make`='$a4',`catalogname`='$a5',`drwaingno`='$a6',`deptname`='$a7',`machinename`='$a8',`quality`='$a9',`rate`='$a10',`purpose`='$a11',`suggestedparty`='$a12',`requestedperson`='$a13',`authorisedby`='$a14',`reportingto`='$a15'  WHERE id='$id'");
 
 
  
if($s)
echo "<script>alert('Data updated');window.location='purchaserequsation.php';</script>";
  
}
?>

  