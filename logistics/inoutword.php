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
</head>

<body> 
       <?php include "menu.php"; ?>
      </nav>
    </header>
    <div id="site_content" > 
   
 
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      
        <h2> <b style="color:#FF6600; "><marquee behavior="alternate">WELCOME TO LOGISTICS</marquee></b> 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <?php /* date_default_timezone_set('Asia/Kuala_Lumpur'); */ 
	echo "<font color=purple>"; echo date('l, jS F Y'); /* - h:i:s A */?></h2>
          
		   
	   <form action="inoutword.php" method="post" enctype="multipart/form-data">
    
		    <div class="one_quarter2  ">
			<h1>INWARD</h1>
			  
			   <font color="#000066">DATE: <input type="date" name="f1"   >
			  
			   <font color="#000066">VEHICLE NO: <input type="text" name="f2"   >
			   <font color="#000066">TRANSPORTER NAME: <input type="text" name="f3"   >
	 
			   <font color="#000066">TYPE OF MATERIAL: <input type="text" name="f4"   >
             <font color="#000066">DC NO: <input type="text" name="f5"   >

                 <font color="#000066">HAMALI CHARGES(IF ANY): <input type="text" name="f6"   >

<br><br>	
        <input type="submit"  name="submit" value="Submit"  class="submit">	

       </div>
          </form>
		  
		   
	 
	   <form action="inoutword.php" method="post" enctype="multipart/form-data">
    	 
		  <div class="one_quarter2  ">
			<h1>OUTWARD</h1>
  <font color="#000066">DATE: <input type="date" name="f7"   >
			  
			   <font color="#000066">VEHICLE NO: <input type="text" name="f8"   >
			   <font color="#000066">TRANSPORTER NAME: <input type="text" name="f9"   >
	 
			   <font color="#000066">CUSTOMER NAME: <input type="text" name="f10"   >
             <font color="#000066">DC NO: <input type="text" name="f11"   >

                 <font color="#000066">HAMALI CHARGES(IF ANY): <input type="text" name="f12"   >
			 
                 <font color="#000066">REMARKS: <textarea rows="5" cols="44" name="f13" ></textarea>
			  
			 <br><br>	
       <input type="submit"  name="submit1" value="ISSUE GATE PASS"  class="submit">	

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
<?php
 if(isset($_POST['submit']))
{
$a1=$_POST['f1'];
$a2=$_POST['f2'];
$a3=$_POST['f3'];
$a4=$_POST['f4'];
$a5=$_POST['f5'];
$a6=$_POST['f6'];
 
 include 'db.php';
  
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
  
  $q=mysql_query("INSERT INTO `inward`(`id`, `date`, `vehicleno`, `transportname`, `typeofmaterial`, `dcno`, `hamalicharges`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$dt')");
  
  
if($q)
echo "<script>alert('Data Inserted');window.location='inoutword.php';</script>";
  
}
?>
 
<br><br>


<?php
 if(isset($_POST['submit1']))
{
$a1=$_POST['f7'];
$a2=$_POST['f8'];
$a3=$_POST['f9'];
$a4=$_POST['f10'];
$a5=$_POST['f11'];
$a6=$_POST['f12'];
$a7=$_POST['f13'];
 
 include 'db.php';
  
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
  
   
	$q=mysql_query("INSERT INTO `outward`(`id`, `date`, `vehicleno`, `transportname`, `customername`, `dcno`, `hamalicharges`, `remarks`, `datetime`) VALUES ( '','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$dt')");
	
	
if($q)
echo "<script>alert('Data Inserted');window.location='inoutword.php';</script>";
  
}
?>


<div class="wrapper list">
  <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
    <nav>
      <ul class="list">
        <li><a href="#">Home |</a></li>
        <li><a  href="#">Packing |</a></li>
		<li><a  href="#">View Packing</a></li>

		 
      </ul>
    </nav>
    
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

