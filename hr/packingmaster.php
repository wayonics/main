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
  <h1 align="center">PACKING MASTER</h1> <hr>
    <div  id="sidebar"> 
	 <form action="packingmaster.php" method="post" enctype="multipart/form-data">
      <center>
	<table  >
	<tr>
	<td><font color="#000066">COUNT:</font></td><td><select name="f1"class="small">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `productioncountmaster` ");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[count]</option>";
	  }
	    
	   ?>
		 </select></td></tr>
	<tr><td><font color="#000066">CODE:</font></td><td><select name="f2"class="small">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `productioncountmaster` ");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[counttobemainatained]</option>";
	  }
	    
	   ?>
		 </select>   </td></tr>
	<tr><td><font color="#000066">VARIETY:</font></td><td><select name="f3"class="small">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `productioncountmaster` ");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[variety]</option>";
	  }
	    
	   ?>
		 </select>   </td></tr>
   <tr><td><font color="#000066">LOT NO:</font></td><td><select name="f4"class="small">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `productionlotnos`  ");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[lotnos]</option>";
	  }
	    
	   ?>
		 </select></td></tr>
    <tr><td><font color="#000066">CONE TIP:</font></td><td><input type="text" name="f5"   > </td></tr>
   <tr><td><font color="#000066">STRAP COLOR:</font></td><td><input type="text" name="f6"   > </td></tr>
   <tr><td><font color="#000066">CONE WT:</font></td><td><input type="text" name="f7"   > </td></tr>
   <tr><td><font color="#000066">CONES/BAG:</font></td><td><input type="text" name="f8"   > </td></tr>
   
 <tr><td><font color="#000066">UNIT TYPE:</font></td><td><select name="f9"class="small">
 <option></option>
<option>UNIT-1</option>
<option>UNIT-2</option>
</select>
 </td></tr>
	  
	

	 <br>	<br>	 
	 <table>
 <TR><TD>
	   
	 <input type="submit" name="submit" value="SAVE" class="submit"> </TD></TR></table>
	  	</form>
		 
	  <br>	<br>	
</div>

 <?php
  echo "<table border=1 width=1000px>";
			 echo " <tr>";
		  
			 echo " <th>ACTION</th>";
			 echo " <th>COUNT</th>";
			 echo " <th>COUNT CODE</th>";
			 echo " <th>LOT NO</th>";
			  echo " <th>CONE TIP</th>";
			 echo " <th>STRAP COLOR</th>";
			 echo " <th>CONE WT</th>";
			 
			  echo " <th>CONES/BAG</th>";
			  echo " <th>UNIT</th>";
			  
			  			  
			  
			   
			 echo " </tr>";
			  
		 
  include 'db.php';
    
   $p =mysql_query("select * from productionpackingmaster")or die(mysql_error());
     
  while(  $a=mysql_fetch_array($p) )
			  {
			  echo "<tr> <td><a href='packingedit.php?id=$a[id]'> <img src=edit.PNG>&nbsp;&nbsp;&nbsp;&nbsp;<a href='packingdelete.php?id=$a[id]'><img src=delete.PNG>   <td>$a[1]<td>$a[2]  <td>$a[4]<td>$a[5]<td>$a[6]<td>$a[7]<td>$a[8]<td>$a[9]";
			  
			  }
   
   
?>
</tr>
</table> 	
	 
	  <br>	<br>
  
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
  
 
 include 'db.php';
  
 
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 
 $q=mysql_query("INSERT INTO `productionpackingmaster`(`id`, `count`, `code`, `variety`, `lotno`, `conetip`, `strapcolor`, `conewt`, `conesbag`, `unit`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$dt')");
  
  
if($q)
echo "<script>alert('Data Inserted');window.location='packingmaster.php';</script>";
 
 

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
