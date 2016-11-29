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
  <h1 align="center">MAINTENANCE REPORTS</h1> <hr>
    <div  id="sidebar"> 
 
	 <form action="" method="post" enctype="multipart/form-data">
 
	 <font color="#000066" >DATE(FROM):</font><input type="date" name="f1" class="date">  
	 <font color="#000066" >DATE(TO):</font><input type="date" name="f2" class="date">  
	
	
 <font color="#000066" >DEPARTMENT:</font><input list="browsers" name="f3">
  <datalist id="browsers"> 
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `schedulemaster`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option value=$a[deptname]> $a[deptname]</option>";
	  }
	    
	   ?>
		  
  </datalist> 
  
  <font color="#000066" >MACHINE NAME:</font><input list="browsers" name="f4">
  <datalist id="browsers"> 
		   <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `schedulemaster`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option value=$a[machinename]> $a[machinename]</option>";
	  }
	    
	   ?>
		  
  </datalist> 
  <BR><BR>
  
   <font color="#000066" >UNIT TYPE:</font><select name="f5">
		 <option>please select-----</option>
		 <option>UNIT-1</option>
		 <option>UNIT-2</option> 
		    </select>
  
    <font color="#000066" >PURPOSE:</font><select name="f6">
		 <option>please select-----</option>
		 <option>GENERAL</option>
		 <option></option> 
		    </select>
  
  
	 <input type="submit" name="submit" value="SHOW" class="submit">
	 
	   
    <div id="content-wrap">  

	 <br>	<br>	<br>
	  </div>
 
	   
	  <div align="right"></div> 
	  	</form>
		 
	  <br>	<br><p align="right">
  <form action="purchaseexport.php" method="post">
	<input type="submit" name="submit1" value="EXPORT">
	</form></p>	
</div>
  
 <style>
 .date
 {
 
 width:128px; }
 #main-wrap {
    /* overflow to handle inner floating block */
    overflow: hidden;
	background:#C1FFE0;
	 
    box-shadow: 10px 10px 5px #888888;
}

#sidebar {
    float: left;
    width: 100%;
}

#content-wrap {
    float: right;
    width: 50%;
}   
input{
border-radius:8px;
height:20px;
}
.submit
{
width:99px;
height:29px;
color:#000000;
font-size:19px;
 
}.t
{border:0px;
}
table,th,td
{
color:#0000FF;text-align:center;   border: 1px solid black;
   
}
td
{
color:#FF00FF;text-align:center;
}
table
{
 
  width: 100%; border-collapse: collapse;
 
}
 </style>
  
 </div> 
	<br>	 
 
 
	 <?php
 if(isset($_POST['submit']))
{
  $s=$_POST['f1'];
 $s1=$_POST['f2'];
$s2=$_POST['f3'];
$s3=$_POST['f4'];
$s4=$_POST['f5'];
$s5=$_POST['f6'];


  
 include 'db.php';
  
 
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 
  echo "<table >";
			 echo " <tr>"; 
  echo " <th>DATE</th>";
  echo " <th>DEPARTMENT NAME</th>";
  
			 echo " <th>MACHINE NAME</th>";
			 echo " <th>MACHINE NO</th>";
			  echo "<th>ACTIVITY</th>";
			  echo "<th>OFF TIME</th>";
		 	  echo "<th>ON TIME</th>";
		 	  echo "<th>DURATION</th>"; 
			  echo "<th>SPARE/ITEM ISSUED</th>";
			  echo "<th>RATE</th>";
			  echo "<th>QTY</th>";
			  echo "<th>REMARKS</th>";
			   
			 echo " </tr>";
  
   $w=mysql_query("SELECT * FROM `daywiseactivity` WHERE donedate  BETWEEN '$s' AND '$s1'")or die(mysql_error());
   $w1=mysql_num_rows($w);
    
   
   $p =mysql_query("select * from daywiseactivity where deptname='$s2'")or die(mysql_error());
  $p1=mysql_num_rows($p); 
  
 
   $d =mysql_query("select * from daywiseactivity where machinename='$s3'")or die(mysql_error());
  $d1=mysql_num_rows($d); 
  
   $e =mysql_query("select * from daywiseactivity where unit='$s4'")or die(mysql_error());
  $e1=mysql_num_rows($e); 
  
   $f=mysql_query("select * from daywiseactivity where purpose='$s5'")or die(mysql_error());
  $f1=mysql_num_rows($f);  
 
  if($w1==true)
  {
  
  while($a=mysql_fetch_array($w))
			  {
			  echo "<tr> <td>$a[donedate]<td>$a[deptname]<td>$a[machinename]<td>$a[machineno]<td>$a[activity]<td>$a[offtime]<td>$a[ontime]<td>$a[duration]<td>$a[spareitemused]<td>$a[rate]<td>$a[qty]<td>$a[remarks] ";
			  
			  }
  
  }
  
  
	 
}
?>
</tr>
</table>
	  
	
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
