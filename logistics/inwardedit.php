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
<body id="top"> <br><br>
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1> <b style="color:#990000; font-size:38px;">Jyotirmaye Textiles Pvt.Ltd</b> </h1>
      <p> </p>
	  
    </div>
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
 
 
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
     <?php 
	  echo  $id=$_GET['id'];
	  $_SESSION['id1']=$id;
	   include 'db.php'; 
	   
	  $q1=mysql_query(" SELECT * FROM `inward` WHERE  id='$id'");
	  $a=mysql_fetch_array($q1);
	    
	   ?>
	     
        <h2> <b style="color:#FF6600; "><marquee behavior="alternate">WELCOME TO LOGISTICS</marquee></b> 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <?php /* date_default_timezone_set('Asia/Kuala_Lumpur'); */ 
	echo "<font color=purple>"; echo date('l, jS F Y'); /* - h:i:s A */?></h2>
            <div class="one_quarter2  ">
			
			 
			 
			 
			 <form action="inwardedit1.php" method="post" enctype="multipart/form-data">
    
		    <div class="one_quarter2  ">
			 
			 
			 <h1>INWARD</h1>
			  
			   <font color="#000066">DATE: <input type="date" name="f1" value="<?php echo $a[1] ?>"  >
			  
			   <font color="#000066">VEHICLE NO: <input type="text" name="f2"   value="<?php echo $a[2] ?>">
			   <font color="#000066">TRANSPORTER NAME: <input type="text" name="f3"   value="<?php echo $a[3] ?>">
	 
			   <font color="#000066">TYPE OF MATERIAL: <input type="text" name="f4"  value="<?php echo $a[4] ?>" >
             <font color="#000066">DC NO: <input type="text" name="f5" value="<?php echo $a[5] ?>"  >

                 <font color="#000066">HAMALI CHARGES(IF ANY): <input type="text" name="f6"  value="<?php echo $a[6] ?>" >

			 
			 <br><br>	
       <center><input type="submit"  name="submit" value="Update"  class="submit">	

       </div>
          </form>
		  
		  
		
    
       </div>
         
          
       </div> 
	   
		<br><br>

   
    </main> 

	</form>
  <style>
  .submit
  {
  color:#0000FF;
  background:#999999;
  font-size:23px;
  }  
  .r
  {
  width:87%;
  }</style>
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

