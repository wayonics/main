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
  <h1 align="center">PURCHASE ITEM MASTER</h1> <hr>
    <div  id="sidebar"> 
	 <form action="purchaseitemmaster.php" method="post" enctype="multipart/form-data">
	<table    >
	<tr><td><font color="#000066">MAIN ITEM MASTER:</font></td><td><select name="f1" class="small">
	                                                          <option>PURCHASE</option>
															   </select> </td></tr>
	<tr><td><font color="#000066">SUB ITEM NAME:</font></td><td><select name="f2"class="small">
	                                                          <option>COTTON-LINT</option>
															 
															  </select> </td></tr>
	<tr><td><font color="#000066">VERIETY:</font></td><td><select name="f3"class="small">
	                                                            <option>COTTON-LINT</option>
															   </select> </td></tr>
	<tr><td><font color="#000066">SIZE/COUNT:</font></td><td><select name="f4"class="small">
	                                                          <option></option>
															  <option></option>
															  <option></option>
															  </select> </td></tr>
	<tr><td><font color="#000066">TRANS MODE:</font></td><td><select name="f5"class="small">
	                                                          <option>OUTOF STATE</option>
															  <option>WITHIN STATE</option>
															 
															  </select> </td></tr>
	<tr><td><font color="#000066">PURHCASE MODE:</font></td><td><select name="f6"class="small">
	                                                          <option></option>
															  <option></option>
															  <option></option>
															  </select> </td></tr>
	<tr><td><font color="#000066">UNITS:</font></td><td><select name="f7"class="small">
	                                                          <option>CANDY</option>
															  <option>KGS</option>
															   </select> </td></tr>
<tr><td><font color="#000066">TYPE OF PACK:</font></td><td><select name="f8"class="small">
	                                                          <option>BAGS</option>
															  <option>BALES</option>
															  <option>BORAS</option>
															  </select> </td></tr>															  														  														  														  														  														  														  
											 
	</table> </div>
	 
    <div id="content-wrap"> <table>
 	<tr><td><font color="#000066">BILL SERIES:</font></td><td><input type="text" name="f9"   value="CL" > </td></tr>
	
	  <tr><td><font color="#000066">TRANS SAVE IN ACCOUNTS:</font></td><td><select name="f10"class="small">
	                                                          <option>YES</option>
															  <option>NO</option>
															   </select> </td></tr>
	<tr><td><font color="#000066">SAVE INCLUDE EXPENSES:</font></td><td><select name="f11"class="small">
	                                                          <option>YES</option>
															  <option>NO</option>
															    </select> </td></tr>
	 
	<tr><td><font color="#000066">ACCOUNT NAME:</font></td><td><input type="text" name="f12"   > </td></tr>
	<tr><td><font color="#000066">VAT ACCOUNT NAME:</font></td><td><input type="text" name="f13"   > </td></tr>
	<tr><td><font color="#000066">FINANCIAL YEAR:</font></td><td><input type="text" name="f14" value="2016-2017"   > </td></tr>
	
	  </table>  
	

	 <br>	<br>	<br>
	  </div>
 
	   
	  <div align="center"><input type="submit" name="submit" value="SAVE" class="submit"></div> 
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
 
 
 include 'db.php';
  
 
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
$q=mysql_query(" INSERT INTO `purchaseitemmaster`(`id`, `mainitemmaster`, `subitemname`, `variety`, `size/count`, `transmode`, `purchasemode`, `units`, `typeofpack`, `billlseries`, `transaveinaccounts`, `saveincludeexpenses`, `accountname`, `vataccountname`, `financialyear`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$dt')");
 
   
if($q)
echo "<script>alert('Data Inserted');window.location='purchaseitemmaster.php';</script>";
 
 

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
