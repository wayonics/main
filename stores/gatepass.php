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
  <h1 align="center">GATE PASS</h1> <hr>
    <div  id="sidebar"> 
	 <form action="gatepass.php" method="post" enctype="multipart/form-data">
	<table    >
	<tr>
	<td><font color="#000066"> DATE:</font></td><td><input type="date"   class="responsive-table" name="f1"> </td></tr>
	<tr><td><font color="#000066">SL NO:</font></td><td><input type="text" name="f2"   > </td></tr>
	<tr><td><font color="#000066">COMPANY NAME:</font></td><td><input type="text" name="f3"   > </td></tr>
	<tr><td><font color="#000066">ADDRESS:</font></td><td><textarea rows="4" cols="35" name="f4"></textarea> </td></tr>
	<tr><td><font color="#000066">PARTY GATEPASS NO:</font></td><td><input type="text" name="f5"   > </td>
	<td><font color="#000066">ISSUE DATE:</font></td><td><input type="date" name="f6"   > </td></tr>
	 
	</table> </div>
	 
    <div id="content-wrap"> <table>
	<tr>
	 <td><font color="#000066">TYPE:</font></td><td><select name="f7" class="small">
	<option>GATEPASS</option>
	 
	</select> </td></tr>
	<tr><td><font color="#000066">PERSON NAME:</font></td><td><input type="text" name="f8"   > </td></tr>
	<tr><td><font color="#000066">TRANSACTION TYPE:</font></td><td><select name="f9" class="small">
	<option>RETURNABLE</option>
	<option>NON RETURNABLE</option>
	</select>  </td></tr>
	<tr><td><font color="#000066">REMARKS:</font></td><td><input type="text" name="f10" class="s1"    > </td></tr>
	<tr><td><font color="#000066">ISSUED PERSON NAME:</font></td><td><input type="text" name="f11"   > </td></tr>
	 
	</table>  
	
	  </div>
 
	   
 <BR><BR><BR><BR> <BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>
	 
	  <div  id="sidebar1"> 
	  <fieldset> 
	 <legend></legend>
	<table>
  
	<tr><td><font color="#000066">ITEM NAME:</font></td><td><input type="text" name="f12" class="s"  > </td> 
	 <td><font color="#000066">QUANTITY:</font></td><td><input type="text" name="f13"   class="s"> </td> 
	 <td><font color="#000066">RATE:</font></td><td><input type="text" name="f14"  class="s" > </td> </tr>
	<tr> <td><font color="#000066">DRWAING NO:</font></td><td><input type="text" name="f15"  class="s" > </td> 
	 <td><font color="#000066">CATALOG NO:</font></td><td><input type="text" name="f16"  class="s" > </td> 
	 <td><font color="#000066">MAKE:</font></td><td><input type="text" name="f17"  class="s" > </td> </tr>
	<tr> <td><font color="#000066">PURPOSE:</font></td><td><input type="text" name="f18"  class="s1" > </td> </tr>
	 <tr><td><font color="#000066">INSTRUCTIONS:</font></td><td><input type="text" name="f19"  class="s1" > </td> 
	 
	 
	  </tr> 
	</table> 
	
	</fieldset>
	</div>
 <BR><BR> 
	 
	   
	 
	  <div align="center"><input type="submit" name="submit" value="SAVE" class="submit"></div> 
	  	</form>
		 
	  <br>	<br>	
</div>
   
 <style>.small
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
 
 include 'db.php';
  
 
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 $q=mysql_query("INSERT INTO `storesgatepass`(`id`, `date`, `slno`, `companyname`, `address`, `gatepassno`, `issuedate`, `type`, `personname`, `transactiontype`, `remarks`, `issuedpersonname`, `itemname`, `quantity`, `rate`, `drwaingno`, `catalogno`, `make`, `purpose`, `instruction`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$dt')");
  
if($q)
echo "<script>alert('Data Inserted');window.location='gatepass.php';</script>";
 
 

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
