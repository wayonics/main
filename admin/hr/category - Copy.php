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
  <h1 align="center"> </h1> <hr>
    <div  id="sidebar"> 
	 <form action="category.php" method="post" enctype="multipart/form-data">
 
	<table>
	<tr>
	<td><font color="#000066">Category code:</font></td><td><input type="text"   class="responsive-table" name="f1"> </td></tr>
	<tr><td><font color="#000066">Category name:</font></td><td><input type="text" name="f2"   > </td></tr>
	</table><br> 
	<fieldset>
	<legend> </legend>
	<table>
	
 	<tr><td ><font color="#000066">OVER TIME</font></td><td><input type="checkbox" name="f3"></td></tr>
	<tr><td><font color="#000066">Min OT limit:</font></td><td><input type="text" name="f4"   >  </td></tr> 
	<tr><td><font color="#000066">OT after shift time:</font></td><td><input type="checkbox" name="f5" value="OT after shift time" > </td></tr>
	<tr><td><font color="#000066">OT Starts after hours:</font></td><td><input type="TEXT" name="f6"   > </td></tr>
 	 </TABLE></fieldset><br> 
	 
	 
	 <table>
	<tr><td><font color="#000066">Grace Late:</font></td><td><input type="text" name="f7"   > </td></tr>
	<tr><td><font color="#000066">Grace early:</font></td><td><input type="text" name="f8"   > </td></tr>
	</table><BR>
	<fieldset>
	<legend><font color="RED">LATE COUNT DEDUCTION </legend>
	<table>
		<tr><td><font color="#000066">LATE COUNT:</font></td><td><input type="text" name="f9"   >  
			 <font color="#000066">after every interval:</font> <input type="CHECKBOX" name="f10" value="after every interval"   > </td></tr>
		<tr><td><font color="#000066">DEDUCT FORM LEAVE:</font></td><td><input type="radio" name="f11" value="DEDUCT FORM LEAVE"   >  
		 <font color="#000066">no.of days:</font> <input type="text" name="f12"   > </td></tr>
		<tr><td><font color="#000066">DEDUCT FORM ATD:</font></td><td><input type="radio" name="f13" value="DEDUCT FORM ATD"   >  
		 <font color="#000066"> LEAVE:</font> <input type="text" name="f14"   > </td></tr>
		 </TABLE></fieldset>
	 
     <BR><BR><BR><BR> 



<fieldset>
	<legend><font color="RED">Leave wizard</legend>
	<table>
		<tr><td><font color="#000066">Category_code:</font> </td><td><input type="text" name="f15"   > </td></tr> 
			<tr><td> <font color="#000066">Leave code:</font>  </td><td><input type="text" name="f16"   > </td></tr>
		<tr><td><font color="#000066">leave name:</font> </td><td> <input type="text" name="f17"   >   </td></tr> 
		<tr><td> <font color="#000066">leave description:</font> </td><td> <input type="text" name="f18"   > </td></tr>
		<tr><td><font color="#000066">Maximum no of days allowed in a year:</font>  </td><td><input type="text" name="f19"   ></td></tr>  
		 <tr><td><font color="#000066"> Maximum no of times allowed in a year:</font>  </td><td><input type="text" name="f20"   > </td></tr>
		  <tr><td><font color="#000066">Maximum days of leave allowed at a time:</font>  </td><td><input type="text" name="f21"   > </td></tr>
		  
		  <tr><td><font color="#000066">Accumulation allowed:</font></td><td><input type="checkbox" name="f22" value="Accumulation allowed"   >  
		 <font color="#000066">Max days of accumulation allowed:</font> <input type="text" name="f23"   > </td></tr>
		  
		  
		    <tr><td><font color="#000066">Encashment allowed:</font></td><td><input type="checkbox" name="f24"  value="Encashment allowed"  >  
		 <font color="#000066"> 	Negative balance allowed:</font> <input type="checkbox" name="f25"  value="Negative balance allowed"  > </td></tr>
		  
		  
		  <tr><td><font color="#000066">Half day allowed:</font></td><td><input type="checkbox" name="f26"  value="Half day allowed"  >  
		 </td></tr>
		  
		  <tr><td><font color="#000066">If weakoff falls in leave, treat as leave:</font></td><td><input type="checkbox" name="f27" value="If weakoff falls in leave, treat as leave"  >  </td></tr>
		  
		 <tr><td><font color="#000066"> If holiday falls in leave, treat as leave 	:</font></td><td> <input type="checkbox" name="f28"  value=" If holiday falls in leave, treat as leave "> </td></tr>
		  
		  
		  
		 </TABLE></fieldset>

	    
	
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
table
{
width:555px;
 
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
$a19=$_POST['f19'];
$a20=$_POST['f20'];
$a21=$_POST['f21'];
$a22=$_POST['f22'];
$a23=$_POST['f23'];
$a24=$_POST['f24'];
$a25=$_POST['f25'];
$a26=$_POST['f26'];
$a27=$_POST['f27'];
$a28=$_POST['f28'];
  
 include 'db.php';
  
 
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 $q=mysql_query("INSERT INTO `category`(`id`, `category_code`, `categoryname`, `overtime`, `minotlimit`, `otaftershifttime`, `otstartsafterhours`, `gracelate`, `graceearly`, `latecount`, `aftereveryinterval`, `deductfromleave`, `noofdays`, `deductfromatd`, `leave`, `categorycode`, `leavecode`, `leavename`, `leavedescription`, `Maximum no of days allowed in a year`, `Maximum no of times allowed in a year`, `Maximum days of leave allowed at a time`, `Accumulation allowed`, `Max days of accumulation allowed`, `Encashment allowed`, `Negative balance allowed`, `Half day allowed`, `If weakoff falls in leave, treat as leave`, `If holiday falls in leave, treat as leave`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24','$a25','$a26','$a27','$a28','$dt')");
  
  
if($q)
echo "<script>alert('Data Inserted');window.location='category.php';</script>";
 
 

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
