 <?php
 session_start();
 if(isset($_POST['submit']))
{
 echo  $id= $_SESSION['id1'];
$a1=$_POST['f1'];
$a2=$_POST['f2'];
 
 
 include 'db.php';
  
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 $s=mysql_query("UPDATE `productiondepartments` SET   `deptcode`='$a1',`deptname`='$a2',`datetime`='$dt' WHERE id='$id'");
   
  
if($s)
echo "<script>alert('Data updated');window.location='departments.php';</script>";
  
}
?>

  