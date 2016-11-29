<?php
session_start();
if($_SESSION['uname'])
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
      <ul class="clear">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="packing.php">Packing</a> 
        </li>
		 <li><a href="viewpacking.php">view packing details</a> 
        </li>
       
        <li><a href="logout.php">logout</a></li>
      </ul>
   
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
    <main  class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->
    
      <div class="group">
         WELCOME TO :<?php echo $_SESSION['uname']; ?>
		 <br><br>
		 
	  
 
		 
        </div>
      </div>
      <!-- ################################################################################################ --> 
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div> 


<br><br>
<div class="wrapper list">
  <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
    <nav>
      <ul class="list">
        <li><a href="#">Home |</a></li>
        <li><a  href="#">simplex |</a></li>
		<li><a  href="#">carding |</a></li>
		
        <li><a href="#">Ring Frame |</a></li>
        <li><a href="#">Auto Coner |</a></li>
        <li><a href="#">Drawing |</a></li>
		<li><a href="#">Finish Drawing</a></li>
		
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

