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
      </nav>
    </header>
    <div id="site_content" >
      
 <div  id="main-wrap">
  <h1 align="center">DAY WISE ACTIVITY</h1> <hr>
    <div  id="sidebar"> 
	 <form action="daywiseactivity.php" method="post" enctype="multipart/form-data">
	<table    >
	<tr>
	<td><font color="#000066">UNIT</td> 
	<td><font color="#000066">DEPARTMENT <br>NAME</td>
	<td><font color="#000066">DEPARTMENT <br>CODE</td>
	<td><font color="#000066">MACHINE NAME</td>
	<td><font color="#000066">MACHINE NO</td>
	<td><font color="#000066">PURPOSE</td>
	
	</tr>
	
	<tr><td><select name="f1">
		 <option>please select-----</option>
		 <option>UNIT-1</option>
		 <option>UNIT-2</option> 
		    </select></td>
			<td> <select name="f2">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `schedulemaster`  ");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[deptname]</option>";
	  }
	    
	   ?>
		 </select></td>
			 
			<td> <select name="f3">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `schedulemaster`  ");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[deptcode]</option>";
	  }
	    
	   ?>
		 </select></td>
			 
			
			<td> <select name="f4">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `schedulemaster`  ");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[machinename]</option>";
	  }
	    
	   ?>
		 </select></td>
		 
		  
			
			<td> <select name="f5">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `schedulemaster`  ");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[machineno]</option>";
	  }
	    
	   ?>
		 </select></td>
		 
		 
		 
			<td><select name="f6">
		 <option>please select-----</option>
		 <option>GENERAL</option>
		 <option></option> 
		    </select></td></td>
			 </tr> 
	
	
	</table>
	 

	 <br>	<br>	<br>
	<table    >
	<tr>
	<td><font color="#000066">SL NO</td> 
	<td><font color="#000066">ACTIVITY</td>
	<td><font color="#000066">OFF TIME</td>
	<td><font color="#000066">ON TIME</td>
	<td><font color="#000066">DURATION</td>
	<td><font color="#000066">FREQUENCY</td>
	<td><font color="#000066">DONE DATE</td>
 	
	</tr>
	
	<tr> 	<td>  <input type="text" name="f7"   ></td>
			<td> <select name="f8">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `schedulemaster`  ");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[activity]</option>";
	  }
	    
	   ?>
		 </select></td>
			<td>  <input type="time" name="f9" class="in"   ></td>
			<td>  <input type="time" name="f10"  class="in" ></td>
			<td>  <input type="text" name="f11"  class="in" ></td>
			<td>  <input type="text" name="f12"  class="in" ></td>
			<td>  <input type="DATE" name="f13"   ></td>
 			 
			 </tr> 
	
	
	</table>
	
	 <br>	<br>	<br>
	<table    >
	<tr>
	<td><font color="#000066">REMARKS</td> 
	<td><font color="#000066">SPARE/ITEM USED</td>
	<td><font color="#000066">RATE</td>
	<td><font color="#000066">QTY(NO'S)</td>
	<td><font color="#000066">AMOUNT</td>
 	
	</tr>
	
	<tr> 	<td>  <input type="text" name="f14"   ></td>
			<td>  <input type="text" name="f15"   ></td>
			<td>  <input type="text" name="f16" class="in"   ></td>
			<td>  <input type="text" name="f17"  class="in" ></td>
			<td>  <input type="text" name="f18"  class="in" ></td>
			  
			 </tr> 
	
	
	</table><br><br>
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
 
}
 th 
  {
  color:#0000FF;
 
 
  }
  td
  {
  color:#000066;
  text-align:center;
 
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
$a15=$_POST['f15']; 
$a16=$_POST['f16']; 
$a17=$_POST['f17']; 
$a18=$_POST['f18']; 
 

 
 include 'db.php';
  
 
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 
 $q=mysql_query("INSERT INTO `daywiseactivity`(`id`, `unit`, `deptname`, `deptcode`, `machinename`, `machineno`, `purpose`, `slno`, `activity`, `offtime`, `ontime`, `duration`, `frequency`, `donedate`, `remarks`, `spareitemused`, `rate`, `qty`, `amount`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$dt')");
   
  
if($q)
echo "<script>alert('Data Inserted');window.location='daywiseactivity.php';</script>";
 
 

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
