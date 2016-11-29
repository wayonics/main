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
      </nav>
    </header>
    <div id="site_content" >
      
 <div  id="main-wrap">
  <h1 align="center">FORM TYPES</h1> <hr>
    <div  id="sidebar"> 
	 <form action="formtype.php" method="post" enctype="multipart/form-data">
	<table>
	<tr>
	<td><font color="#000066">SL NO:</font></td><td><input type="text" name="f1"   > </td>

	<td><font color="#000066">FORM TYPE:</font></td><td><input type="text"   class="responsive-table" name="f2"> </td>
	
	  <td><input type="submit" name="submit" value="SAVE" class="submit"></td></tr></table>
      	
  
	  	</form>
		 
	  <br>	<br>
     
    
	   <?php
  echo "<table border=1 width=1000px>";
			 echo " <tr>";
		  
			 echo " <th>ACTION</th>";
			 echo " <th>SL NO</th>";
			 echo " <th>FORM TYPE</th>";
			  echo " </tr>";
			  
		 
  include 'db.php';
    
   $p =mysql_query("select * from salesformtype")or die(mysql_error());
     
  while(  $a=mysql_fetch_array($p) )
			  {
			    
			  echo "<tr> <td><a href='formtypeedit.php?id=$a[id]'><img src=edit.PNG>&nbsp;&nbsp;&nbsp;&nbsp;<a href='formtypedelete.php?id=$a[id]'><img src=delete.PNG> <td>$a[slno]<td>$a[formtype] ";
			  
			  }
   
   
?>
</tr>
</table> 	
	  <br>	<br>
</div>
  
  
 <style>
 .small
 {
 width:80px;
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
    float: left;
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
 
 
 include 'db.php';
  
 
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 
$q=mysql_query(" INSERT INTO `salesformtype`(`id`, `slno`, `formtype`, `datetime`) VALUES ('','$a1','$a2','$dt')");
 
   
if($q)
echo "<script>alert('Data Inserted');window.location='formtype.php';</script>";
 
 

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
