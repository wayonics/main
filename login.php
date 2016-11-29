<?php
session_start();

$a=$_POST['f1'];
$_SESSION['user']=$a;
 
$b=$_POST['f2'];
  
  date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 include 'db.php';
  $p=mysql_query("select * from register where firstname='$a' and password='$b' and moduletype='PRODUCTION'");
  $p1=mysql_num_rows($p);
  
  
  $q=mysql_query("select * from register where firstname='$a' and password='$b' and moduletype='QUALITY'");
  $q1=mysql_num_rows($q);
  
  
   $s=mysql_query("select * from register where firstname='$a' and password='$b' and moduletype='STORES'");
  $s1=mysql_num_rows($s);
  
  
   $r=mysql_query("select * from register where firstname='$a' and password='$b' and moduletype='RAW MATERIALS'");
  $r1=mysql_num_rows($r);
  
    $m=mysql_query("select * from register where firstname='$a' and password='$b' and moduletype='MAINTENANCE'");
  $m1=mysql_num_rows($m);
  
   $se=mysql_query("select * from register where firstname='$a' and password='$b' and moduletype='SECURITY'");
  $se1=mysql_num_rows($se);
   
   $hr=mysql_query("select * from register where firstname='$a' and password='$b' and moduletype='HR'");
  $hr1=mysql_num_rows($hr);
  
   $sa=mysql_query("select * from register where firstname='$a' and password='$b' and moduletype='SALES'");
  $sa1=mysql_num_rows($sa);
  
    $acc=mysql_query("select * from register where firstname='$a' and password='$b' and moduletype='ACCOUNTS'");
  $acc1=mysql_num_rows($acc);
  
  
    $wa=mysql_query("select * from register where firstname='$a' and password='$b' and moduletype='WASTAGE'");
  $wa1=mysql_num_rows($wa);
  
    $la=mysql_query("select * from register where firstname='$a' and password='$b' and moduletype='LOGISTICS'");
  $la1=mysql_num_rows($la);
  
  
    $pur=mysql_query("select * from register where firstname='$a' and password='$b' and moduletype='PURCHASE'");
  $pur1=mysql_num_rows($pur);
  
  
   $head=mysql_query("select * from register where firstname='$a' and password='$b' AND type='Managing Director' OR type='Vice Precident' OR type='Genaral Manager'");
  $head1=mysql_num_rows($head);
 
 if($head1==true)
  {
 echo "<script>window.location='admin/index.php';</script>";
 }

 else if($p1==true)
  {
 echo "<script>window.location='production/index.php';</script>";
 }
 else if($q1==true)
  {
 echo "<script>window.location='quality/index.php';</script>";
 } 
  else if($s1==true)
  {
 echo "<script>window.location='stores/index.php';</script>";
 } 
  else if($r1==true)
  {
 echo "<script>window.location='raw/index.php';</script>";
 } 
   else if($m1==true)
  {
 echo "<script>window.location='maintenance/index.php';</script>";
 } 
 
   else if($se1==true)
  {
 echo "<script>window.location='security/index.php';</script>";
 } 
 
   else if($hr1==true)
  {
 echo "<script>window.location='hr/index.php';</script>";
 } 
 
   else if($sa1==true)
  {
 echo "<script>window.location='sales/index.php';</script>";
 } 
 
   else if($acc1==true)
  {
 echo "<script>window.location='accounts/index.php';</script>";
 } 
 
   else if($wa1==true)
  {
 echo "<script>window.location='waste/index.php';</script>";
 } 
  else if($pur1==true)
  {
 echo "<script>window.location='purchase/index.php';</script>";
 } 
  else
  {
  //echo "Username/Password Invalid";
  
 echo "<script>alert('Username/Password Invalid');window.location='index.php';</script>";
 }
 //header('location:index.php');
 ?>
 
  
  