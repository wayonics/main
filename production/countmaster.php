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
      
 <div  id="main-wrap">
  <h1 align="center">COUNT MASTERS</h1> <hr>
    <div  id="sidebar"> 
	<center>
	 <form action="countmaster.php" method="post" enctype="multipart/form-data">
	<table>
	<tr>
	<td><font color="#000066">DEPARTMENT:</font></td><td><select name="f1"class="small">
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
	<tr><td><font color="#000066">DEPT CODE:</font></td><td><select name="f2"class="small">
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
    <tr><td><font color="#000066">COUNT NUMBER:</font></td><td><input type="text" name="f3"   > </td></tr>
 <tr><td><font color="#000066">COUNT CODE:</font></td><td><input type="text" name="countcode"   > </td></tr>

    <tr><td><font color="#000066">COUNT TO BE MAINTAINED:</font></td><td><input type="text" name="f4"   > </td></tr>
    <tr><td><font color="#000066">VARIETY:</font></td><td><input type="text" name="f5"   > </td></tr>
    <tr><td><font color="#000066">DELIVERY HANK:</font></td><td><input type="text" name="f6"   > </td></tr>
    <tr><td><font color="#000066">PRODUCTION CONSTANT:</font></td><td><input type="text" name="f7"   > </td></tr>
    <tr><td><font color="#000066">EFFICIENCY:</font></td><td><input type="text" name="f8"   > </td></tr>
    <tr><td><font color="#000066">EXPECTED GRAMS:</font></td><td><input type="text" name="f9"   > </td></tr>
    
<tr><td><font color="#000066"> TYPE:</font></td><td><select name="f10"class="small">
<option></option>
<option>COMBED</option>
<option>KARDED</option>
</select>
 </td></tr>
 <tr><td><font color="#000066">UNIT TYPE:</font></td><td><select name="f11" class="small">
 <option></option>
<option>UNIT-1</option>
<option>UNIT-2</option>
</select>
 </td></tr>
<tr><td><font color="#000066">COUNT FREQUENCY:</font></td><td><input type="text" name="f12"   > </td></tr>
 

	 <tr> <td colspan="4"><input type="submit" name="submit" value="SAVE" class="submit"></td></table>
      	
  
	  	</form>
		 
	  <br>	<br>
 
	    <table  border="1"> 
	   <?php

			 echo " <tr>";
		  
			 echo " <th>ACTION</th>";
			 echo " <th>DEPARTMENT</th>";
			 echo " <th>COUNT</th>";
			 echo " <th>COUNT CODE</th>";
			 
			  echo " <th>VERIETY</th>";
		 
			  echo " <th>EFFICIENCY</th>";
		 
			 echo " <th>PRODUCTION CONSTANT</th>"; 
			  echo " <th>EFFICIENCY</th>";
			  echo " <th>EXPECTED GRAMS</th>";
			  
			  			  echo " <th>COUNT FREQUENCY</th>";
			   
			 echo " </tr>";
			  
		 
  include 'db.php';
    
   $p =mysql_query("select * from productioncountmaster")or die(mysql_error());
     
  while(  $a=mysql_fetch_array($p) )
			  {
			  echo "<tr> <td><a href='countmasteredit.php?id=$a[id]'> <img src=edit.PNG>&nbsp;&nbsp;&nbsp;&nbsp;<a href='countmasterdelete.php?id=$a[id]'><img src=delete.PNG>  <td>$a[dept]<td>$a[count]<td>$a[countcode] <td>$a[variety]<td>$a[efficiency]<td>$a[productionconstant]<td>$a[efficiency]<td>$a[expectedgrams]<td>$a[countfrequency] ";
			  
			  }
   
   
?>
</tr>
</table> 	
	   
	   
	  <br>	<br>  <br>	<br>  <br>	<br>  <br>	<br>  <br>	<br>
      </div>	
   
 <style>
 .small
 {
 width:178px;
 }
 a
 {text-decoration:none;
 }
 #main-wrap {
    /* overflow to handle inner floating block */
    overflow: hidden;
	background:#FFFFFF;
	 
    box-shadow: 10px 10px 5px #888888;
}

#sidebar {
    
    width: 50%;
}

#content-wrap {
    float: right;
    width: 50%;
}   
input,select,option{
padding:5px 2px 5px 2px;
}
.submit
{
width:99px;
height:29px;
color:#FFFFFF;
font-size:19px;
font-family:Verdana, Arial, Helvetica, sans-serif;
background:#000000;
padding:0 0 2px 0px;
 
}
td,tr
{margin:15px; padding:2px;
}
table
{
margin:37px;
 
}
 </style>
 
 <style>
 
table,th
{
color:#000000;text-align:center;
   
}
td
{
color:#000000;text-align:center;

}
table
{

   border-collapse: collapse;
   border:#CCCCCC;
 
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
  

$ccode=$_POST['countcode'];
 include 'db.php';
  
 
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 $q=mysql_query("INSERT INTO `productioncountmaster`(`id`, `dept`, `code`, `count`, `counttobemainatained`, `variety`, `deliveredhank`, `productionconstant`, `efficiency`, `expectedgrams`, `type`, `unittype`, `countfrequency`, `datetime`,`countcode`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$dt','$ccode')");
 
  
   
if($q)
echo "<script>window.location='countmaster.php';</script>";
 
 

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
    header('location:index.php');
}
?>
