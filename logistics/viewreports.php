<?php
session_start();
if($_SESSION['user'])
{
?>

<!DOCTYPE html>
<!--
Template Name: Academic Education V2
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>Jyotirmaye Textiles </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
 <br><br>
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
    <h1> <b style="color:#990000; font-size:38px;">Jyotirmaye Textiles Pvt.Ltd</b> </h1>
      <p> </p>
	  
    </div>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php /* date_default_timezone_set('Asia/Kuala_Lumpur'); */ 
	echo "<font color=purple>"; echo date('l, jS F Y'); /* - h:i:s A */?>
    <div class="fl_right">
      <form class="clear" method="post" action="#">
        <fieldset>
          <legend>Search:</legend>
          <input type="text" value="" placeholder="Search Here">
          <button class="fa fa-search" type="submit" title="Search"><em>Search</em></button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ --> 
  </header>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
      <!-- ################################################################################################ -->
        <?php include 'menu.php'; ?>
   
   
   
    </nav>
  </div>
</div>
  <style>
 .header ,img{
 display:inline;
 }
 
 </style>
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
       
	 
	  
            <center><h1><b><font color="purple">INWARD DETAILS</font></h1>
           	<div class="one_quarter2">  <p align="right">
  <form action="inwardexport.php" method="post">
	 <font color="#000066" ><input type="submit" name="submit1" value="EXPORT">
	</form></p>	
         <table  width="950px"   >
			 
			  <tr>
			 <th>ID</th>
			 <th>DATE</th>
			 <th>VEHICLE NO</th>
			 <th>TRANSPORTER NAME</th>
			 <th>MATERIAL</th>
			 <th>DC NO</th>
			 <th>HAMALI CHARGES</th>
	 
			  
			 </tr>
			 
			 <?php
	 
			 include 'db.php';
				 
				   $q=mysql_query("select * from inward")or die(mysql_error()); 
             while($a=mysql_fetch_array($q))
				 {
				 
				 echo "<tr><td>$a[0]<td>$a[1]<td>$a[2]<td>$a[3]<td>$a[4]<td>$a[5]<td>$a[6] ";
			   
				 }
				     
	?>   
   </table>
   <br> 

 <BR><BR><BR> <center><h1><b><font color="purple">OUTWARD DETAILS</font></b></h1><p align="left">
  <form action="outwardexport.php" method="post">
	 <font color="#000066" ><input type="submit" name="submit1" value="EXPORT">
	</form></p>	
          <table width="950px"   >
			 
			  <tr>
			 <th>ID</th>
			 <th>DATE</th>
			 <th>VEHICLE NO</th>
			 <th>TRANSPORTER NAME</th>
			 <th>CUSTOMER NAME</th>
			 <th>DC NO</th>
			 <th>HAMALI CHARGES</th>
			 <th>REMARKS</th>
			 
			  
			 </tr>
			 
			 <?php
	 
			 include 'db.php'; 
				   $q1=mysql_query("select * from outward")or die(mysql_error()); 
             while($a=mysql_fetch_array($q1))
				 {
				  
				 
				 echo "<tr><td>$a[0]<td>$a[1]<td>$a[2]<td>$a[3]<td>$a[4]<td>$a[5]<td>$a[6]<td>$a[7] ";
			   
				 }
				     
	?>   
   </table>
   <br>
   <button onClick="print()">PRINT</button>


 
<script>
function print()
{
window.print();

</script>
 

  </center>
 
 
 </main> 
	
	
	
  <style>
  .submit
  {
  color:#0000FF;
 
  font-size:18px;
  }  
  .date
  {
  border-radius:7px;
  width:107%;
  }
   
table,th
{
color:#0000FF;text-align:center;
    border: 1px solid black;
}
td
{
color:purple;text-align:center;
 border: 1px solid black;
}
table
{
margin-left:7px;
  width: 100%; border-collapse: collapse;
 
}

  
  </style>
  </div>
  
</div> 


<br><br>
 

 
<br><br>
<div class="wrapper list">
  <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
    <nav>
      <ul class="list">
        <li><a href="#">Home |</a></li>
        <li><a  href="#">masters |</a></li>
		<li><a  href="#">reports |</a></li>
		
        <li><a href="#">Notifications  </a></li>
      
		
      </ul>
    </nav>
    <!-- ################################################################################################ --> 
  </div>
</div>
<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
     <b style="color:#FF0000">Copyrights &copy;2016 All Reserved @<a href="http://eautomation.in/" target="_blank">eautomation Pvt Ltd</a></b>
         
    </nav>
  </div>
</div>
 <br><br><br><br>
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>
</body>
</html>
<?php
}
else
{
header('location:../index.php');
}
?>

