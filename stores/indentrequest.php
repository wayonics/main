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
  <h1 align="center">INDENT REQUEST</h1> <hr>
    <div  id="sidebar"> 
	 <form action="indentrequest.php" method="post" enctype="multipart/form-data">
	<table    >
	<tr>
	<td><font color="#000066">ENTRY DATE:</font></td><td><input type="date"   class="responsive-table" name="f1"> </td></tr>
	<tr><td><font color="#000066">INDENT NO:</font></td><td><input type="text" name="f2"   > </td></tr>
	 <tr><td><font color="#000066">DEPT NAME:</font></td><td><select name="f3" class="small">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `storesmainheads`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[deptname]</option>";
	  }
	    
	   ?>
		 </select>   </td></tr>
		 
		 
		 <tr><td><font color="#000066">MACHINE NO:</font></td><td><select name="f4" class="small">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `storesmachinarymaster`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[machinecode]</option>";
	  }
	    
	   ?>
		 </select> </td></tr>
	
		 
		 
	</table> </div>
	 
    <div id="content-wrap"> <table>
	
	 <tr><td><font color="#000066">SL NO:</font></td><td><input type="text" name="f5"   > </td></tr>
	 <tr><td><font color="#000066">ITEM NAME:</font></td><td><input type="text" name="f6"   > </td></tr>
	  
	<tr>
	 <td><font color="#000066">STOCK IN STORES:</font></td><td><input type="text" name="f7"   > </td></tr>
	<tr><td><font color="#000066">REQUIRED QUANTITY:</font></td><td><input type="TEXT" name="f8"   > </td></tr>
	<tr><td><font color="#000066">REASON FOR REQUIREMENT:</font></td><td><input type="TEXT" name="f9"   > </td></tr>
	 </table>  
	
	  </div>
 
	   
 <BR><BR><BR><BR> <BR><BR><BR><BR> <BR><BR><BR><BR>  
	 
	   <div align="center"><input type="submit" name="submit" value="SAVE" class="submit"></div> 
	  	</form>
		 
	  <br>	<br>	
</div>
  
 <style>
 .small
 {
 width:150px;
 }
 .s
 {
 width:76%;
 }
 #main-wrap {
    /* overflow to handle inner floating block */
    overflow: hidden;
	background:#FFFFFF;
	 
    box-shadow: 12px 10px 5px #888888;
}
#sidebar 1{
    float: left;
    width: 80%;
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
td,tr
{margin:15px; padding:2px;
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
 
}</style>
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
 
 $q=mysql_query("INSERT INTO `storesindentrequest`(`id`, `date`, `indentno`, `deptname`, `machineno`, `slno`, `itemname`, `stockinstores`, `quantity`, `reason`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$dt')");
  
if($q)
echo "<script>alert('Data Inserted');window.location='indentrequest.php';</script>";
 
 

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
