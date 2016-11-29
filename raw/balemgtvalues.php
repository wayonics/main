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
  <h1 align="center">BALE MANAGEMENT VALUES</h1> <hr>
    <div  id="sidebar"> 
	<center>
	 <form action="balemgtvalues.php" method="post" enctype="multipart/form-data">
	<table    >
	
 
	<tr>
	<td><font color="#000066">COUNT:</font></td><td><input type="text"  name="f1"> </td></tr>
	<tr><td><font color="#000066">VARIETY:</font></td><td><input type="text" name="f2"   >  </td></tr>
  <tr><td><font color="#000066">SPECIFICATION:</font></td><td> <select name="f3" class="small">
    														<option>2.5% SL</option>
															  <option>50% SL</option>
															  <option>UR</option>
															  <option>MICRONIAR</option>
															  <option>STRENGTH</option>
															  <option>MR</option>
															  <option>RD</option>
															  <option>+B</option>
															  <option>TRASH</option>
															  <option>MOIST</option>
															  <option>FQI</option>
															  <option>BALE_WEIGHT</option>
															  <option>ELONG</option>
															  <option>SFC</option>
															  
															    </td></tr>
  <tr><td><font color="#000066">AREA:</font></td><td><input type="text" name="area"   >  </td></tr>
  
  <tr><td><font color="#000066">MIN VAL:</font></td><td><input type="text" name="f4"  class="in"  ><input type="text" name="f5" class="in"  ><input type="text" name="f6"  class="in" >  </td></tr>
  <tr><td><font color="#000066">MAX VAL:</font></td><td><input type="text" name="f7"    class="in"><input type="text" name="f8"   class="in" ><input type="text" name="f9"    class="in">  </td></tr>
  
	<TR><TD><input type="submit" name="submit" value="SAVE" class="submit"></TD></TR>
  
  
	</table> </div>
	  
	 <br>	<br>	<br>
	  </div>
 
	    
	  	</form>
		 
	  <br>	<br>	
</div>
   
 <style>
 .in
 {
 width:42px;
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
margin-left:288px;

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
 
$area=$_POST['area'];
 
 
 
 include 'db.php';
  
 
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 $q=mysql_query("INSERT INTO `balemgtvalues`(`id`, `count`, `variety`, `specification`, `minval1`, `minval2`, `minval3`, `maxval1`, `maxval2`, `maxval3`, `datetime`,`area`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$dt','$area')");
  
if($q)
echo "<script>alert('Data Inserted');window.location='balemgtvalues.php';</script>";
 
 

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
