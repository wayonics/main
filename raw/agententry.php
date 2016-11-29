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
  <h1 align="center">AGENT ENTRY</h1> <hr>
    <div  id="sidebar"> 
	 <form action="agententry.php" method="post" enctype="multipart/form-data">
	<table    >
	<tr>
	<td><font color="#000066">AGENT ID:</font></td><td><input type="text"   class="responsive-table" name="f1"> </td></tr>
	<tr><td><font color="#000066">AGENT NAME:</font></td><td><input type="text" name="f2"   >  </td></tr>
 
	<tr><td><font color="#000066">ADDRESS:</font></td><td><textarea rows="4" cols="18" name="f3"></textarea> </td></tr>
	 <tr><td><font color="#000066">CITY:</font></td><td><input type="text" name="f4"   > </td></tr>
	<tr><td><font color="#000066">STATE:</font></td><td><input type="text" name="f5"   > </td></tr>
	
	</table> </div>
	 
    <div id="content-wrap"> <table>
	
	  <tr><td><font color="#000066">PHONE NUMBER:</font></td><td><input type="text" name="f6"   > </td></tr>
	<tr><td><font color="#000066">AGENT TYPE:</font></td><td><select name="f7">
	                                                          <option>COTTON</option>
															  <option>YARN</option>
															   </select>
															   </td></tr>
 <tr><td><font color="#000066">AGENT FOR:</font></td><td><select name="f8">
	                                                          <option>PURCHASE</option>
															  <option>COTTON PURCHASE</option>
															   </select>
															   </td></tr>
															   
															   
	  <tr><td><font color="#000066">AGENT PAN NO:</font></td><td><input type="text" name="f9"   > </td></tr>
	  <tr><td><font color="#000066">AGENT COMMISSION:</font></td><td><input type="text" name="f10"   > </td></tr>
	  														   
	 </table>  
	

	 <br>	 
	   
	  <div align="center"><input type="submit" name="submit" value="SAVE" class="submit"></div> 
	  	</form>
		 
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
 
 
 include 'db.php';
  
 
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 
 $q=mysql_query("INSERT INTO `agententry`(`id`, `agentid`, `agentname`, `address`, `city`, `state`, `phonenumber`, `agenttype`, `agentfor`,`panno`, `commision`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$dt')");
  
  
  
if($q)
echo "<script>alert('Data Inserted');window.location='agententry.php';</script>";
 
 

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
