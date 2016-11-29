<?php
session_start();
if($_SESSION['user'])
{
?><!DOCTYPE HTML>
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
	 error_reporting(~E_ALL);
		// session_start();
	    $id=$_GET['id'];
	  $_SESSION['id1']=$id;
	   include 'db.php'; 
	   
	  $q1=mysql_query(" SELECT * FROM `productionsupervisor` WHERE  id='$id'");
	  $b=mysql_fetch_array($q1);
	    
	   ?>
      </nav>
    </header>
    <div id="site_content" >
      
 <div  id="main-wrap">
  <h1 align="center">SUPERVISOR ENTRY</h1> <hr>
    <div  id="sidebar"> 
	 <form action="supervisoredit1.php" method="post" enctype="multipart/form-data">
	<table>
	<tr>
	<td><font color="#000066">SUPRVISOR NAME:</font></td><td><input type="text"  name="f1" value="<?php echo $b['supervisorname'] ?>" > </td>
	<td><font color="#000066">ASM:</font></td><td><input type="text" name="f2"   value="<?php echo $b['asm'] ?>" > </td>
    <td><font color="#000066">MAISTRY:</font></td><td><input type="text" name="f3"   value="<?php echo $b['maistry'] ?>" > </td> 
	
	  <td><input type="submit" name="submit" value="UPDATE" class="submit"></td></tr></table>
      	
  
	  	</form>
		 
	  <br>	<br>
     
	  <br>	<br>
</div>
  
 <style>
 #main-wrap {
    /* overflow to handle inner floating block */
    overflow: hidden;
	background:#C1FFE0;
	 
    box-shadow: 10px 10px 5px #888888;
}

#sidebar {
    float: left;
    width: 50%;
}

#content-wrap {
    float: right;
    width: 50%;
}   
input{
border-radius:8px;
height:20px;
}
.submit
{
width:99px;
height:29px;
color:#000000;
font-size:19px;
 
}

table,th
{
color:red;text-align:center;
   
}
td
{
color:purple;text-align:center;

}
table
{
margin-left:177px;
  width: 100%; border-collapse: collapse;
 
}
 </style>
  
 </div> 
	<br>	 
	 
	 <?php
 if(isset($_POST['submit']))
{
$a1=$_POST['f1'];
$a2=$_POST['f2'];
$a3=$_POST['f3'];
 
 include 'db.php';
  
 
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
$q=mysql_query(" INSERT INTO `productionsupervisor`(`id`, `supervisorname`, `asm`, `maistry`, `datetime`) VALUES ('','$a1','$a2','$a3','$dt')");
  
   
if($q)
echo "<script>alert('Data Inserted');window.location='supervisorentry.php';</script>";
 
 

}
?>

	  
	
    <footer>
      <p>Copyright | <a href="http://www.css3templates.co.uk"> </a></p>
    </footer>
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
