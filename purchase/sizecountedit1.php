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

 
 
 include 'db.php';
  
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 
 
 $s=mysql_query("UPDATE `salessizecountmaster` SET  `itemname`='$a1',`itemcode`='$a2',`verity`='$a3',`veritycode`='$a4',`sizecount`='$a5',`sizecountcode`='$a6',`slno`='$a7'  WHERE id='$id'");
   
 
  
if($s)
echo "<script>alert('Data updated');window.location='sizecountmaster.php';</script>";
  
}
?>

  