<?php
session_start();
if($_SESSION['user'])
{
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Jyotirmaye Textiles</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
     
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css1/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     

</head>

<body>
  
            <?php include "menu.php"; ?>
			
			  <?php 
			  //session_start();
	   $id=$_GET['id'];
	  $_SESSION['id1']=$id;
	   include 'db.php'; 
	   
	  $q1=mysql_query(" SELECT * FROM `gatepass` WHERE  id='$id'");
	  $a=mysql_fetch_array($q1);
	    
	   ?>
      </nav>
    </header>
    <div id="site_content" >
      
 <div  id="main-wrap" align="center"  >
 <h1 align="center	">GATE PASS ENTRY </h1>
    <div  id="sidebar"> 
	 <form action="gtentryedit1.php" method="post" enctype="multipart/form-data">
	 
	<table>
  
	<tr><td><font color="#000066"> DATE:</font></td><td><input type="date" name="f1"  value="<?php echo $a[1] ?>" > </td> </tr> 
	 <tr><td><font color="#000066">MACHINE :</font></td><td><input type="text" name="f2"   value="<?php echo $a[2] ?>"> </td> </tr>
	 <tr><td><font color="#000066">VEHICLE NO:</font></td><td><input type="text" name="f3"  value="<?php echo $a[3] ?>" > </td></tr>
	<tr><td><font color="#000066">PRODUCT/MATERIAL:</font></td><td><input type="text" name="f4"  value="<?php echo $a[4] ?>" > </td></tr>
	<tr><td><font color="#000066">TRANSPORTER NAME::</font></td><td><input type="text" name="f5"  value="<?php echo $a[5] ?>" > </td></tr>
	<tr><td><font color="#000066">DC NO:</font></td><td><input type="text" name="f6"  value="<?php echo $a[6] ?>" > </td></tr>
	<tr><td><font color="#000066">AMOUNT:</font></td><td><input type="text" name="f7"   value="<?php echo $a[7] ?>"> </td></tr> 
	<tr><td><font color="#000066">REMARKS:</font></td><td><textarea rows="5" cols="44" name="f8" lue="<?php echo $a[8] ?>"></textarea> </td></tr>
	 <tr><td></td><td> </td></tr>  
	
	   
	</table> 
   
	 
	<BR><BR>
   
	   
	  <div align="center"><input type="submit" name="submit" value="SUBMIT" class="submit">  	<BR><BR>	<BR><BR>
	</form>
	
	
	 
		 <BR><BR>	<BR><BR>
</div>

 <style>
 .s
 {
 width:76%;
 }
 #main-wrap {
    /* overflow to handle inner floating block */
    overflow: hidden;
	background:#C1FFE0;
	 
    box-shadow: 19px 10px 5px #888888;
}
#sidebar 1{
    float: left;
    width: 80%;
}

#sidebar {
    float: left;
    width: 50%;
}

#content-wrap {
    float: right;
    width: 50%;
}   
input,select{
border-radius:8px;
height:20px;
}
.submit
{
width:199px;
height:29px;
color:#000000;
font-size:19px;
 
}
 </style>
  
 </div> 
 	   	<BR><BR>	<BR><BR>
	 
	 <?php
	 error_reporting(~E_ALL);
	 session_start();
 if(isset($_POST['submit']))
{
$a1=$_POST['f1'];
$_SESSION['date']=$a1;

$a2=$_POST['f2'];

$a3=$_POST['f3'];
$_SESSION['vehicleno']=$a3;

$a4=$_POST['f4'];
$a5=$_POST['f5'];  
$a6=$_POST['f6'];
$a7=$_POST['f7'];
$a8=$_POST['f8'];
$a9=$_POST['f9'];


 

 include 'db.php'; 
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
$q=mysql_query(" INSERT INTO `gatepass`(`id`, `date`, `machine`, `vehicleno`, `product`, `transport name`,`amount`, `dcno`, `remarks`,`status`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$dt')")or die(mysql_error());
 
  
if($q)
echo "<script>alert('Data Inserted');window.location='gatepass.php';</script>";
  
}
?>

	   
  </div>
  <p>&nbsp;</p>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="js/jquery.kwicks-1.5.1.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#images').kwicks({
        max : 600,
        spacing : 2
      });
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
<?php
}
else
{
    header('location:../index.php');
}
?>

