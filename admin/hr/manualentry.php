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
  <h1 align="center"> MANUAL ENTRY </h1> <hr>
    <div  id="sidebar"> 
	<center> 	
	 <form action="manualentry.php" method="post" enctype="multipart/form-data">
	<table    >
	<tr><td><font color="#000066">DATE:</font></td><td><input type="DATE" name="f1"   > </td></tr>
	
	<tr>
	<td><font color="#000066">EMPLOYEE  CODE:</font></td><td><select name="f2">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `employeeregister`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[empcode]</option>";
	  }
	    
	   ?>
		 </select>      </td></tr>
	<tr><td><font color="#000066">EMPLOYEE NAME:</font></td><td><select name="f3">
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
	<tr> <td><font color="#000066">  SHIFT:</font></td><td><select    name="f4">
		<option value="none">select----</option> 
		<option>day shift</option>
		<option>evening  shift</option>
		<option>night shift</option>
		</select>
		 </td> </tr>
	<tr><td><font color="#000066">LOGIN TIME:</font></td><td><input type="time" name="f5" / > 
	 
	 </td></tr>
	
	<tr><td><font color="#000066">LOGOUT TIME:</font></td> <td> <input type="time" name="f6" /> </td></tr>
	<tr><td><font color="#000066">LATE:</font></td><td>  <input type="time" name="f7" / ></td></tr>
	<tr><td><font color="#000066">EARLY:</font></td> <td> <input type="time" name="f8" / ></td></tr>
	<tr><td><font color="#000066">WORK HOURS:</font></td> <td><input type="TEXT" name="f9" value="8 HRS" /> </td></tr>
	<tr><td><font color="#000066">REMARKS:</font></td> <td><input type="text"  name="f10"   > </td></tr>
	
	
	
	<TR><TD><input type="submit" name="submit"  value="SAVE" class="submit" ></TD></TR>
	  </table>
	 
 
	   
	  <div ></div> 
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
$a10=$_POST['f10'];
 
 include 'db.php';
  
 
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
$q=mysql_query("INSERT INTO `manualentry`(`id`, `date`, `emppcode`, `empname`, `shift`, `logintime`, `logouttime`, `late`, `early`, `workhours`, `remarks`, `datetime`,`status`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$dt','Not-Approve')");
  
  
if($q)
echo "<script>alert('Data Inserted');window.location='manualentry.php';</script>";
  

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
