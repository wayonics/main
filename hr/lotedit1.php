 <?php
 session_start();
 if(isset($_POST['submit']))
{
 echo  $id= $_SESSION['id1'];
$a1=$_POST['f1'];
$a2=$_POST['f2'];
$a3=$_POST['f3'];

 
 include 'db.php';
  
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 $s=mysql_query("UPDATE `productionlotnos` SET `lotnos`='$a1',`shifts`='$a2',`itemname`='$a3',`datetime`='$dt' WHERE id='$id'");
  
  
if($s)
echo "<script>alert('Data updated');window.location='lotnos.php';</script>";
  
}
?>

  