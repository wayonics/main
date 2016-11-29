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
      
 <div  id="main-wrap"  >
 <h1 align="center">INDENT ENTRY</h1>
    <div  id="sidebar1"> 
	 <form action="indententry.php" method="post" enctype="multipart/form-data">
	 <fieldset>
	 <legend><font color="RED">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ISSUE THE ITEMS</legend>
	<table>
  
	<tr><td><font color="#000066">INDENT SLNO:</font></td><td><input type="TEXT" name="f1"   > </td> 
	 <td><font color="#000066">INDENT DATE:</font></td><td><input type="DATE" name="f2"   > </td> 
	 <td><font color="#000066">INDENT NO:</font></td><td><input type="text" name="f3"   > </td> 
	 <td><font color="#000066">NARRATION:</font></td><td><input type="text" name="f4"  class="small"  > </td></tr>
	 
	 
	<tr><td><font color="#000066">UNIT:</font></td><td><select name="f5"  >
	 <option>select--------------</option>
	 <option>UNIT-1</option>
	 <option>UNIT-2</option>
 
	 </select> 
	</td> 
	 <td><font color="#000066">DEPT NAME:</font></td><td><select name="f6">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `storesmainheads`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[deptname]</option>";
	  }
	    
	   ?>
		 </select>  </td> 
	 <td><font color="#000066">DEPT CODE:</font></td><td><select name="f7">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `storesmainheads`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[deptcode]</option>";
	  }
	    
	   ?>
		 </select>  </td> 
	 <td><font color="#000066">PURPOSE:</font></td><td><input type="text" name="f8" class="small" > </td></tr>
	 
	 
	<tr><td><font color="#000066">MACHINE NAME:</font></td><td><select name="f9">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `storesmachinarymaster`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[machinename]</option>";
	  }
	    
	   ?>
		 </select>  </td> 
	 <td><font color="#000066">MACHINE NO:</font></td><td><select name="f10">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `storesmachinarymaster`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[machinecode]</option>";
	  }
	    
	   ?>
		 </select> </td> 
 <td><font color="#000066">TRANS MODE:</font></td><td><select name="f11">
	<option>consumable</option>
	<option>consumable</option> 
	</select></td> 
	  </tr>
	 
	  
	</table> 
	
	</fieldset>
	 
     
  <br> 
  
	<BR><BR>
	  <div  id="sidebar1"> 
	  <fieldset> 
	 <legend><font color="red">ITEM DETAILS</legend>
	<table> 
	<tr><td><font color="#000066">ITEM NAME:</font></td><td><select name="f12">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `storesitemcreation`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[itemname]</option>";
	  }
	    
	   ?>
		 </select> </td> 
	 <td><font color="#000066">ITEM CODE:</font></td><td><select name="f13">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `storesitemcreation`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[itemcode]</option>";
	  }
	    
	   ?>
		 </select> </td> 
	 <td><font color="#000066">CATALOG NO:</font></td><td><input type="text" name="f14"  class="s" > </td> 
	 <td><font color="#000066">FIN HEAD:</font></td><td><select name="f15" class="small">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `storesfinheads`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[finname]</option>";
	  }
	    
	   ?>
		 </select> </td>
	 <td><font color="#000066">DRAWING NO:</font></td><td><input type="text" name="f16"  > </td></tr>
	 <tr>
	 <td><font color="#000066">UNIT:</font></td><td><select name="f17"  >
	 <option>select--------------</option>
	 <option>UNIT-1</option>
	 <option>UNIT-2</option>
 
	 </select>  </td>
	 <td><font color="#000066">LOCATION:</font></td><td><input type="text" name="f18"  class="s" > </td>  
	 </tr> 
	</table>  
	</fieldset> 
	<BR><BR>
 
 <div  id="sidebar1"> 
	  <fieldset> 
	 <legend><font color="red">STOCK AVAILABLE</legend>
	<table> 
	<tr><td><font color="#000066">INWARD:</font></td><td><input type="text" name="f19" class="s"  > </td> 
	 <td><font color="#000066">AVAILABLE:</font></td><td><input type="text" name="f20"   class="s"> </td> 
	 <td><font color="#000066">TOTAL:</font></td><td><input type="text" name="f21"  class="s" > </td>  
	 </tr> 
	</table>  
	</fieldset> 
  
  <BR><BR>
	  <div  id="sidebar1"> 
	  <fieldset> 
	 <legend><font color="red">ISSUED QUANTITY</legend>
	<table> 
	<tr><td><font color="#000066">INDENT QTY:</font></td><td><input type="text" name="f22" class="s"  > </td> 
	 <td><font color="#000066">ISSUED QTY:</font></td><td><input type="text" name="f23"   class="s"> </td> 
	 <td><font color="#000066">RATE:</font></td><td><input type="text" name="f24"  class="s" > </td> 
	 <td><font color="#000066">AVG RATE:</font></td><td><input type="text" name="f25"   class="s"> </td>
	 <td><font color="#000066">VALUE :</font></td><td><input type="text" name="f26" class="s"  > </td></tr>
	 <tr>
	 <td><font color="#000066">AVG VALUE:</font></td><td><input type="text" name="f27"   class="s"> </td>
	 
	 </tr> 
	</table>  
	</fieldset> 
	<BR><BR>
 
  
	   
	  <div align="center"><input type="submit" name="submit" value="SAVE" class="submit"></div> 
	  	</form>
		 
 
</div>
  
 <style>
 .small
 {
 
 width:140px;}
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
 
 include 'db.php'; 
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
  
  
  $q=mysql_query("INSERT INTO `storesindententry`(`id`, `indentslno`, `indentdate`, `indentno`, `narration`, `unit`, `deptname`, `deptcode`, `purpose`, `machinename`, `machineno`, `transmode`, `itemname`, `itemcode`, `catalogno`, `finhead`, `drawingno`, `unit1`, `location`, `inward`, `avaialble`, `total`, `indentqty`, `issuedqty`, `rate`, `avgrate`, `value`, `avgvalue`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24','$a25','$a26','$a27','$dt')");
  
  
    
if($q)
echo "<script>alert('Data Inserted');window.location='indententry.php';</script>";
  
}
?>

	   
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
