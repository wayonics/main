
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
$a16=$_POST['f16'];
$a17=$_POST['f17'];
$a18=$_POST['f18'];
$a19=$_POST['f19'];
$a20=$_POST['f20'];
$a21=$_POST['f21'];
$a22=$_POST['f22'];
$a23=$_POST['f23'];
$a24=$_POST['f24'];	
$a25=$_POST['f25'];
$a26=$_POST['f26'];
 
 
 include 'db.php';
  
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 
 $q=mysql_query("UPDATE `packing` SET  `unit`='$a1',`count`='$a2',`customername`='$a3',`conesproduction`='$a4',`tapeconetip`='$a5',`bagnofrom`='$a6',`conesstock`='$a7',`stockinnotall`='$a8',`opbags`='$a9',`opcones`='$a10',`variety`='$a11',`lotsize`='$a12',`desstatus`='$a13',`strapcolour`='$a14',`bagnoto`='$a15',`bagsstock`='$a16',`pendinglot`='$a17',`clbags`='$a18',`clcones`='$a19',`date`='$a20',`despdate`='$a21',`despatches`='$a22',`shift`='$a23',`bagspacked`='$a24',`dispatchedto`='$a25',`conesinnotallot`='$a26',`datetime`='$dt' WHERE id='$id'");
 
  
  
if($q)
echo "<script>alert('Data updated');window.location='viewpacking1.php';</script>";
 
 

}
?>

