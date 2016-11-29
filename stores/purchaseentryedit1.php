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
$a27=$_POST['f27'];
$a28=$_POST['f28'];
$a29=$_POST['f29'];
$a30=$_POST['f30'];
$a31=$_POST['f31'];
$a32=$_POST['f32'];
$a33=$_POST['f33'];
$a34=$_POST['f34']; 
$a35=$_POST['f35']; 
 
 
 include 'db.php';
  
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
$s= mysql_query("UPDATE `purchaseentry` SET  `entrydate`='$a1',`typeofentry`='$a2',`inwardno`='$a3',`suppliername`='$a4',`billno`='$a5',`billdate`='$a6',`purorderno`='$a7',`purorderdate`='$a8',`dclist`='$a9',`formtype`='$a10',`billtype`='$a11',`state`='$a12',`transmode`='$a13',`receiptno`='$a14',`dcinwardno`='$a15',`debitinwardno`='$a16',`itemname`='$a17',`itemcode`='$a18',`qty`='$a19',`rate`='$a20',`amount`='$a21',`finhead`='$a22',`narration`='$a23',`make`='$a24',`billamout`='$a25',`discount`='$a26',`insurance`='$a27',`pandf`='$a28',`frieght`='$a29',`courier`='$a30',`vat`='$a31',`cat`='$a32',`servicetax`='$a33',`othercharges`='$a34',`indentreferenceno`='$a35',`datetime`='$dt' WHERE id='$id'");
    
	
$s1= mysql_query("UPDATE `purchaseentry1` SET  `entrydate`='$a1',`typeofentry`='$a2',`inwardno`='$a3',`suppliername`='$a4',`billno`='$a5',`billdate`='$a6',`purorderno`='$a7',`purorderdate`='$a8',`dclist`='$a9',`formtype`='$a10',`billtype`='$a11',`state`='$a12',`transmode`='$a13',`receiptno`='$a14',`dcinwardno`='$a15',`debitinwardno`='$a16',`itemname`='$a17',`itemcode`='$a18',`qty`='$a19',`rate`='$a20',`amount`='$a21',`finhead`='$a22',`narration`='$a23',`make`='$a24',`billamout`='$a25',`discount`='$a26',`insurance`='$a27',`pandf`='$a28',`frieght`='$a29',`courier`='$a30',`vat`='$a31',`cat`='$a32',`servicetax`='$a33',`othercharges`='$a34',`indentreferenceno`='$a35',`datetime`='$dt' WHERE id='$id'");
     
  
if($s==true or $s1==true)
echo "<script>alert('Data updated');window.location='purchaseentryview.php';</script>";
  
}
?>

  