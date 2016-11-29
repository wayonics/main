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

include 'db.php';
  
  
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 $s=mysql_query("UPDATE `quality` SET  `Date`='$a1',`Count`='$a2',`avgcount`='$a3',`Count CV%`='$a4',`Strength`='$a5',`Strength CV%`='$a6',`CSP`='$a7',`U%`='$a8',`CVM`='$a9',`CV(b)`='$a10',`Thin`='$a11',`Thick`='$a12',`Neps`='$a13',`Total1`='$a14',`H`='$a15',`Thin1`='$a16',`Thin2`='$a17',`Thick1`='$a18',`Neps1`='$a19',`Total2`='$a20' WHERE id='$id'");
 
 
    
  
if($s)
echo "<script>alert('Data updated');window.location='view.php';</script>";
  
}
?>

  