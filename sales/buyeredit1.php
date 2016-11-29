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
 
 include 'db.php';
  
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 $s=mysql_query("UPDATE `salesbuyers` SET  `nameofac`='$a1',`acalias`='$a2',`group`='$a3',`transactiontype`='$a4',`openingbalance`='$a5',`palce`='$a6',`regaddress`='$a7',`pincode`='$a8',`country`='$a9',`state`='$a10',`district`='$a11',`phoneno`='$a12',`faxno`='$a13',`emailid`='$a14',`tinno`='$a15',`branchaddress`='$a16',`rcno`='$a17',`cstno`='$a18',`totno`='$a19',`panno`='$a20',`qty`='$a21' WHERE id='$id'");
  
  
if($s)
echo "<script>alert('Data updated');window.location='buyers.php';</script>";
  
}
?>

  