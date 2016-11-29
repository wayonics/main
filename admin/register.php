<?php
session_start();

$a=$_POST['f1'];
$b=$_POST['f2'];

$c=$_FILES['f3']['name'];
$c1=$_FILES['f3']['tmp_name'];
$path="upload/".$c;
copy($c1,$path);
 
$d=$_POST['f4'];
$e=$_POST['f5'];
$f=$_POST['f6'];
$g=$_POST['f7'];
$h=$_POST['f8'];
$i=$_POST['f9'];
$j=$_POST['f10'];

$pwd=$_POST['pwd'];
 
  date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 include 'db.php';
 
 $s=mysql_query("select * from register where value=1 and moduletype='$i'")or die(mysql_error());
 $s1=mysql_num_rows($s);
   if($s1)
   {
   
echo "<script>alert('Already Registered please Login');window.location='index.php';</script>";

  }
 else
 {
  $q=mysql_query("INSERT INTO `register`(`id`, `firstname`, `lastname`, `photo`, `gender`, `phone1`, `phone2`, `address1`, `address2`, `moduletype`, `type`, `datetime`,`password`,`value`) VALUES ('','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$dt','$pwd',1)");
  
 echo "<script>alert('success');window.location='index.php';</script>";
  
 
 }
 //header('location:index.php');
 ?>
 
  
  