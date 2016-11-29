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
	   
	  $q1=mysql_query(" SELECT * FROM `productioncountmaster` WHERE  id='$id'");
	  $b=mysql_fetch_array($q1);
	    
	   ?>
      </nav>
    </header>
    <div id="site_content" >
      
 <div  id="main-wrap">
  <h1 align="center">COUNT MASTERS</h1> <hr>
    <div  id="sidebar"> 
	 <form action="countmasteredit1.php" method="post" enctype="multipart/form-data">
	<table>
	<tr>
	<td><font color="#000066">DEPARTMENT:</font></td><td><select name="f1">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `productiondepartments` ");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[deptname]</option>";
	  }
	    
	   ?>
		 </select> </td></tr>
	<tr><td><font color="#000066">CODE:</font></td><td><select name="f2">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `productiondepartments` ");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[deptcode]</option>";
	  }
	    
	   ?>
		 </select> </td></tr>
    <tr><td><font color="#000066">COUNT:</font></td><td><input type="text" name="f3"   value="<?php echo $b['count'] ?>"  > </td></tr>
	<tr><td><font color="#000066">COUNT CODE:</font></td><td><input type="text" name="cc"   value="<?php echo $b['countcode'] ?>"  > </td></tr>
	
    <tr><td><font color="#000066">COUNT TO BE MAINTAINED:</font></td><td><input type="text" name="f4"   value="<?php echo $b['counttobemainatained'] ?>"  > </td></tr>
    <tr><td><font color="#000066">VARIETY:</font></td><td><input type="text" name="f5"    value="<?php echo $b['variety'] ?>" > </td></tr>
    <tr><td><font color="#000066">DELIVERY HANK:</font></td><td><input type="text" name="f6"    value="<?php echo $b['deliveredhank'] ?>" > </td></tr>
    <tr><td><font color="#000066">PRODUCTION CONSTANT:</font></td><td><input type="text" name="f7"   value="<?php echo $b['productionconstant'] ?>"  > </td></tr>
    <tr><td><font color="#000066">EFFICIENCY:</font></td><td><input type="text" name="f8"   value="<?php echo $b['efficiency'] ?>"  > </td></tr>
    <tr><td><font color="#000066">EXPECTED GRAMS:</font></td><td><input type="text" name="f9"   value="<?php echo $b['expectedgrams'] ?>"  > </td></tr>
    
<tr><td><font color="#000066"> TYPE:</font></td><td><select name="f10" class="input1"  >
<option></option>
<option>NORMAL</option>
<option>COMPACT</option>
</select>
 </td></tr>
 <tr><td><font color="#000066">UNIT TYPE:</font></td><td><select name="f11" class="input1"   >
 <option></option>
<option>UNIT-1</option>
<option>UNIT-2</option>
</select>
 </td></tr>
<tr><td><font color="#000066">COUNT FREQUENCY:</font></td><td><input type="text" name="f12"  value="<?php echo $b['countfrequency'] ?>"   > </td></tr>
 

	 <tr> <td colspan="4"><input type="submit" name="submit" value="UPDATE" class="submit"></td></table>
      	
  
	  	</form>
		 
	  <br>	<br>
 
	    
	   
	  <br>	<br>  <br>	<br>  <br>	<br>  <br>	<br>  <br>	<br>
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
input,.input{
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
$a4=$_POST['f4'];
$a5=$_POST['f5'];
$a6=$_POST['f6'];
$a7=$_POST['f7'];
$a8=$_POST['f8'];
$a9=$_POST['f9'];
$a10=$_POST['f10'];
$a11=$_POST['f11'];
$a12=$_POST['f12'];
  
 include 'db.php';
  
 
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 $q=mysql_query("INSERT INTO `productioncountmaster`(`id`, `dept`, `code`, `count`, `counttobemainatained`, `variety`, `deliveredhank`, `productionconstant`, `efficiency`, `expectedgrams`, `type`, `unittype`, `countfrequency`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$dt')");
 
  
   
if($q)
echo "<script>alert('Data Inserted');window.location='countmaster.php';</script>";
 
 

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
