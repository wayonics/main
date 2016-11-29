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
  <h1 align="center">TODAYS ACTIVITY REPORT</h1> <hr>
    <div  id="sidebar"> 
 
	 <form action="" method="post" enctype="multipart/form-data">
 
	 <font color="#000066" >DATE(FROM):</font><input type="date" name="f1" class="date">  
	  
 <font color="#000066" >DEPARTMENT:</font><input list="browsers" name="f2">
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
   <font color="#000066">UNIT TYPE:<select name="f3"  >
	 <option>select--------------</option>
	 <option>UNIT-1</option>
	 <option>UNIT-2</option>
 
	 </select>    
   
  
	 <input type="submit" name="submit" value="SHOW" class="submit">
	 
	   
    <div id="content-wrap">  

	 <br>	<br>	<br>
	  </div>
 
	   
	  <div align="right"></div> 
	  	</form>
		 
	  <br>	<br> 
</div>
  
 <style>
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
	 session_start();
 if(isset($_POST['submit']))
{
  $s=$_POST['f1'];
  $_SESSION['date']=$s;
  
 $s1=$_POST['f2'];
 $_SESSION['dept']=$s1;
  

$s2=$_POST['f3'];
$_SESSION['unit']=$s2;
   
   
   
 include 'db.php';
  
 
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a"); 
   $w=mysql_query("SELECT * FROM `schedulemaster` WHERE maintaineddate='$s' and deptname='$s1' and unit='$s2'")or die(mysql_error());
    $w1=mysql_num_rows($w);
	
   if($w1==true)
   {
  
  echo "<script>window.location='todaysactivity1.php'</script>";
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

<?php
}
else
{
    header('location:../index.php');
}
?>
