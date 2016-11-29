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
 
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text"> 
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><b><a href="#">Jyotirmaye<span class="logo_colour">Textiles Pvt.Ltd</span></a></b></h1>
         
        </div>
      </div>
      <nav>
        <?php include "menu.php"; ?>
      </nav>
    </header>
    <div id="site_content" >
      
 <div  id="main-wrap">
  <h1 align="center">LEAVE ENTRY </h1> <hr>
    <div  id="sidebar"> 
	 <form action="leaveentry.php" method="post" enctype="multipart/form-data">
	<table >
	<tr>
	<td><font color="#000066">EMPLOYEE CODE:</font></td><td><select name="f1">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `employeeregister`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[empcode]</option>";
	  }
	    
	   ?>
		 </select>  </td></tr>
	<tr><td><font color="#000066">EMPLOYEE NAME:</font></td><td><select name="f2">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `employeeregister`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[empname]</option>";
	  }
	    
	   ?>
		 </select>  </td></tr>
		 
		 
		 
	<tr><td><font color="#000066">LEAVE CODE:</font></td><td><select name="f3">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `category`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[leavecode]</option>";
	  }
	    
	   ?>
		 </select>  </td></tr>
	<tr><td><font color="#000066">FROM DATE:</font></td><td><input type="DATE" name="f4"   > </td></tr>
	<tr><td><font color="#000066">TO DATE:</font></td><td><input type="DATE" name="f5"   > </td></tr>
	<tr><td><font color="#000066">LEAVE DURATION(days):</font></td><td><input type="text" name="f6"   > </td></tr>
	<tr><td><font color="#000066">DAYS ACCOUNTABLE FOR LEAVE:</font></td><td><input type="text" name="f7"   > </td></tr> 
 <tr><td><font  color="#000066"> SELECT LEAVE TYPE: </font></td>
  
 <td><font color="#000066"><input type="RADIO" name="f8" value="Half Day">Half Day  
  <font color="#000066"><input type="RADIO" name="f8" value="1/4 Day">Full Day</td> 
 </tr> 
 	<tr><td><font color="#000066">GROUP NAME:</font></td><td><input type="text" name="f9"   > </td></tr> 
 	<tr><td><font color="#000066">PHOTO UPLOAD:</font></td><td> <font color="#000066"><input type="file" name="f10"   > </td></tr> 
 
 </table>
 
<tr><td><font color="#000066">REASON:</font></td><td><textarea rows="5" cols="44" name="f11"></textarea> </td></tr>
	 </font>
	   
	   	</table>  

	 
	   <tr><td><input type="submit" name="submit" value="SAVE" class="submit"></td></tr>
	   
	   	</table>   
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
    width: 50%;
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
float:right;
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


$a10=$_FILES['f10']['name'];
$temp=$_FILES['f10']['tmp_name'];
$path="pic/".$a10;
copy($temp,$path);
 
$a11=$_POST['f11'];
 
 


 
 include 'db.php';
  
 
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 
$q=mysql_query("INSERT INTO `leaveentry`(`id`, `empcode`, `empname`, `leavecode`, `fromdate`, `todate`, `leavedays`, `daysaccounatbleforleave`, `leavetype`, `groupname`, `photo`, `reason`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$path','$a11','$dt')");
  
  
if($q)
echo "<script>alert('Data Inserted');window.location='leaveentry.php';</script>";
 
 

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
