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
      </nav>
    </header>
    <div id="site_content" >
      
 <div  id="main-wrap" align="center"  >
 <h1 align="center	">GATE PASS ISSUE </h1>
    <div  id="sidebar"> 
	 <form action="gatepassissues.php" method="post" enctype="multipart/form-data">
	 
	<table>
  
	<tr><td><font color="#000066"> DATE:</font></td><td><input type="date" name="f1"   > </td> </tr>
 
	 <tr><td><font color="#000066">MACHINE NAME:</font></td><td><input type="text" name="f2"   > </td> </tr>
	 <tr><td><font color="#000066">REPAIRS</font></td><td><input type="text" name="f3"   > </td></tr>
	<tr><td><font color="#000066">ASSIGNED CLIENT:</font></td><td><input type="text" name="f4"   > </td></tr>
	 <tr><td><font color="#000066">REMARKS:</font></td><td><textarea rows="5" cols="44" name="f5"></textarea> </td></tr>
	 
	</table> 
   
	 
	<BR><BR>
   
	   
	  <div align="center"><input type="submit" name="submit" value="SUBMIT" class="submit">  	<BR><BR> 
	</form>
	
	 
	 
		 
		  <form action="printgatepass.php" method="post">
	  <input type="submit" name="submit1" value="PRINT GATEPASS" class="submit"> 
	  
	  	</form>
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
 	   	<BR><BR>	 
	 
	 <?php
	  error_reporting(~E_ALL);
	 session_start();
 if(isset($_POST['submit']))
{
$a1=$_POST['f1']; 
$_SESSION['date']=$a1;

$a2=$_POST['f2']; 
$a3=$_POST['f3'];
$_SESSION['repairs']=$a3;
  
$a4=$_POST['f4'];
$_SESSION['assignedclient']=$a4;

$a5=$_POST['f5'];  

 include 'db.php'; 
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 $q=mysql_query("INSERT INTO `gatepassissue`(`id`, `date`, `machinename`, `repair`, `client`, `remarks`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$a5', '$dt')");
 
  
  
if($q)
echo "<script>alert('Data Inserted');window.location='gatepassissues.php';</script>";
  
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
    header('location:index.php');
}
?>
