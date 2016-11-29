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
		 <?php 
		// session_start();
	   $id=$_GET['id'];
	  $_SESSION['id1']=$id;
	   include 'db.php'; 
	   
	  $q1=mysql_query(" SELECT * FROM `schedulemaster` WHERE  id='$id'");
	  $a=mysql_fetch_array($q1);
	    
	   ?>
      </nav>
    </header>
    <div id="site_content" >
      
 <div  id="main-wrap">
  <h1 align="center">SCHEDULE MASTER</h1> <hr>
    <div  id="sidebar"> 
	 <form action="schedulemasteredit1.php" method="post" enctype="multipart/form-data">
	<table    >
	<tr>
	<td><font color="#000066">UNIT</td> 
	<td><font color="#000066">DEPARTMENT <br>NAME</td>
	<td><font color="#000066">DEPARTMENT <br>CODE</td>
	<td><font color="#000066">MACHINE NAME</td>
	<td><font color="#000066">MACHINE NO</td>
	</tr>
	
	<tr><td><select name="f1">
		 <option>please select-----</option>
		 <option>UNIT-1</option>
		 <option>UNIT-2</option> 
		    </select></td>
			<td>  <input type="text" name="f2"   value="<?php echo $a[2] ?>"  ></td>
			<td>  <input type="text" name="f3"    value="<?php echo $a[3] ?>" ></td>
			<td>  <input type="text" name="f4"   value="<?php echo $a[4] ?>"  ></td>
			<td>  <input type="text" name="f5"    value="<?php echo $a[5] ?>" ></td>
			 </tr> 
	
	
	</table>
	 
 
	<table    >
	<tr>
	<td><font color="#000066">SL NO</td> 
	<td><font color="#000066">ACTIVITY</td>
	<td><font color="#000066">YEARS</td>
	<td><font color="#000066">MONTHS</td>
	<td><font color="#000066">DAYS</td>
	<td><font color="#000066">HOURS</td>
	<td><font color="#000066">MANHOURS</td>
	<td><font color="#000066">PREVIOUS MAINTAINED DATE</td>
	
	</tr>
	
	<tr> 	<td>  <input type="text" name="f6"    value="<?php echo $a[6] ?>" ></td>
			<td>  <input type="text" name="f7"    value="<?php echo $a[7] ?>" ></td>
			<td>  <input type="text" name="f8" class="in"   value="<?php echo $a[8] ?>"  ></td>
			<td>  <input type="text" name="f9"  class="in" value="<?php echo $a[9] ?>"  ></td>
			<td>  <input type="text" name="f10"  class="in" value="<?php echo $a[10] ?>"  ></td>
			<td>  <input type="text" name="f11"  class="in" value="<?php echo $a[11] ?>"  ></td>
			<td>  <input type="text" name="f12"  value="<?php echo $a[12] ?>"   ></td>
			<td>  <input type="date" name="f13"    class="in" value="<?php echo $a[13] ?>" ></td>
			 
			 </tr> 
	
	
	</table>
	<BR><BR>
	 <center>
	  <input type="submit" name="submit" value="SAVE" class="submit">  
	  
	 	</form>
		
	 
	  <br>	<br>	<br>
	   
	  
	  </div>
  
</div>
  
 <style>
 .in
 {
 width:98px;
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
 
}a
{text-decoration:none;
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

 
 include 'db.php';
  
 
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 
 $q=mysql_query("INSERT INTO `schedulemaster`(`id`, `unit`, `deptname`, `deptcode`, `machinename`, `machineno`, `slno`, `activity`, `years`, `months`, `days`, `hours`, `manhours`, `maintaineddate`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$dt')");
  
  
if($q)
echo "<script>alert('Data Inserted');window.location='schedulemaster.php';</script>";
 
 

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
