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
  <h1 align="center">ITEM CREATION</h1> <hr>
    <div  id="sidebar"> 
	 <form action="stopagereason.php" method="post" enctype="multipart/form-data">
      <caption><font color="#000066" size="+2"> preparatory</font></caption>
	<table    >
	<tr>
	<td><font color="#000066">SLNO:</font></td><td><input type="text"   class="responsive-table" name="f1"> </td></tr>
	<tr><td><font color="#000066">REASON:</font></td><td><input type="text" name="f2"   > </td></tr>
	<tr><td><font color="#000066">SR(SHORT_REASON):</font></td><td><input type="text" name="f3"   > </td></tr>
	 
	</table> </div>
	 
    <div id="content-wrap"> 
    <caption><font color="#000066" size="+2"> spinning</font></caption><table>
	<tr>
	 <td><font color="#000066">SLNO:</font></td><td><input type="text"   class="responsive-table" name="f4"> </td></tr>
	<tr><td><font color="#000066">REASON:</font></td><td><input type="text" name="f5"   > </td></tr>
    <tr><td><font color="#000066">STANDARD</font></td><td><input type="text" name="f6"   > </td></tr>
    
	<tr><td><font color="#000066">SR(SHORT_REASON):</font></td><td><input type="text" name="f7"   > </td></tr>
	 
	
	<tr><td></td></tr><tr><td></td></tr>
	</table>  
	

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
			 echo " <th>SL NO</th>";
			 echo " <th>REASON</th>";
			  echo " <th>SHORT_REASON</th>";
			 echo " <th>REASON</th>";
			 echo " <th>STANDARD</th>";
			 
			  echo " <th>SHORT_REASON</th>";
			  			  
			  
			   
			 echo " </tr>";
			  
		 
  include 'db.php';
    
   $p =mysql_query("select * from productionstoapgereason")or die(mysql_error());
     
  while(  $a=mysql_fetch_array($p) )
			  {
			  echo "<tr> <td><a href='stopageedit.php?id=$a[id]'> <img src=edit.PNG>&nbsp;&nbsp;&nbsp;&nbsp;<a href='stopagedelete.php?id=$a[id]'><img src=delete.PNG>  <td>$a[1]<td>$a[2] <td>$a[3]<td>$a[5]<td>$a[6]<td>$a[7]";
			  
			  }
   
   
?>
</tr>
</table> 	
	 
	  <br>	<br>
  
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
$a3=$_POST['f3'];
$a4=$_POST['f4'];
$a5=$_POST['f5'];
$a6=$_POST['f6'];
$a7=$_POST['f7'];
 

 
 include 'db.php';
  
 
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 $q=mysql_query("INSERT INTO `productionstoapgereason`(`id`, `pslno`, `preason`, `psr`, `sslno`,`sreason`, `standard`, `ssr`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7')")or die(mysql_error());
 
  
  
if($q)
echo "<script>alert('Data Inserted');window.location='stopagereason.php';</script>";
 
 

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
