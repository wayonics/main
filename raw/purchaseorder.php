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
  <h1 align="center">PURCHASE ORDER</h1> <hr>
    <div  id="sidebar"> 	   
	    
	   <form action="purchaseorder.php" method="post" enctype="multipart/form-data">
     <table>
	 
			 
			   	<tr><td>  <font color="#000066">ITEM NAME: </td><td><select name="f1" class="small">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `itemmaster`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[itemname]</option>";
	  }
	    
	   ?>
			  </select> </font></td></tr>
			   <tr><td><font color="#000066"> VERIETY: </td><td><select name="f2"class="small">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `veriertymaster`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[verierty]</option>";
	  }
	    
	   ?>
			  </select> </font></td></tr>
			   <tr><td><font color="#000066"> QUALITY:</td><td> <input type="text" name="f3"   ></font></td></tr>
			     
			  <tr><td><font color="#000066">STATE: </td><td> <select name="f8"class="small">
		 <option>please select-----</option>
		 <option>WITHIN STATE</option>
		 <option>OUT STATE</option>
		 </select>
		  </font></td></tr>
			 
	 
	   <tr><td> <font color="#000066">SLNO:</td><td><input type="text" name="f5"   ></font></td></tr>
		<tr><td><font color="#000066">PURCHASE ORDER DATE:</td><td><input type="DATE" name="f6"   ></font></td></tr>
		<tr><td><font color="#000066">PURCHASE ORDER NO:</td><td><input type="text" name="f7"   ></font></td></tr>
		<tr><td><font color="#000066">SUPPLIER NAME:</td><td><select name="f8"class="small">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `supplierentry`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[nameofaccount]</option>";
	  }
	    
	   ?>
			  </select> </font></td></tr>
		<tr><td><font color="#000066">AGENT NAME:</td><td><select name="f9"class="small">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `agententry`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[agentname]</option>";
	  }
	    
	   ?>
			  </select> </font></td></tr>
		<tr><td><font color="#000066">DELIVERY WEIGHT:</td><td><input type="text" name="f10"   ></font></td></tr>
		 
     	</table> </div>
	 
    <div id="content-wrap">
	<table>
	  
	  
	 <tr><td><font color="#000066" >MONTH TO BE DELIVERY:</font></td><td><input type="DATE" name="f11"   >  </font></td></tr>
	 <tr><td><font color="#000066">COUNT: </td><td> <select name="f12"class="small">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `sizecountmaster`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[sizecount]</option>";
	  }
	    
	   ?>
	   </select></font></td></tr>	
	   
	    <tr><td><font color="#000066">BAG TYPE: </td><td> <input type="text" name="f12"   > </font></td></tr>
	   
	   <tr><td> <font color="#000066">NO OF PACKS:</td><td><input type="text" name="f13"   > </font></td></tr>
	<tr><td> <font color="#000066">RATE for CANDY:</td><td><input type="text" name="f14"  > </font></td></tr>
	   
      <tr><td><font color="#000066">PAYMENT TERMS:</td><td><input type="text" name="f15" class="r"  > </font></td></tr>
	 <tr><td> <font color="#000066">STATION:</td><td><input type="text" name="f16" class="r" > </font></td></tr>
	 <tr><td> <font color="#000066">STAPLE LENGTH:</td><td><input type="text" name="f17" class="r" > </font></td></tr>
	 <tr><td>  <font color="#000066">STRENGTH</td><td>:<input type="text" name="f18"class="r"  > </font></td></tr>
	   <tr><td>  <font color="#000066">MIC:</td><td><input type="text" name="f19" class="r" >  </font></td></tr>
	 
	  
	</table>
 <div align="left" >
	  <input type="submit"  name="submit" value="Submit" class="submit"> </div>
	 
		<br><br>
		<br><br>

       </div>
	   
    
	</form>
   
	  <br>	<br>	
</div>
  
 <style>
 .small
 {
 width:150px;
 }
 a
 {text-decoration:none;
 }
 #main-wrap {
    /* overflow to handle inner floating block */
    overflow: hidden;
	background:#FFFFFF;
	 
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
$a7=$_POST['f7'];
$a8=$_POST['f8'];
$a9=$_POST['f9'];
$a10=$_POST['f10'];
$a11=$_POST['f11'];
$a12=$_POST['f12'];
$a13=$_POST['f13'];
$a14=$_POST['f14'];
$a15=$_POST['f15'];
$a16=$_POST['f16'];
$a17=$_POST['f17'];
$a18=$_POST['f18'];
$a19=$_POST['f19']; 
 
 include 'db.php';
  
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
  
  $q=mysql_query("INSERT INTO `purchaseorder`(`id`, `itemname`, `veriety`, `quality`, `state`, `slno`, `purchaseorderdate`, `purchaseorderno`, `suppliername`, `agentname`, `deliveryweight`, `monthtobedelivered`, `count`, `bagtype`, `noofpacks`, `rate`, `paymentterms`, `station`, `straplestrenth`, `mic`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$dt')");
  
  
if($q)
echo "<script>alert('Data Inserted');window.location='purchaseorder.php';</script>";
  
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
