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
  <h1 align="center">SERVICE BILL</h1> <hr>
    <div  id="sidebar"> 
	 <form action="servicebill.php" method="post" enctype="multipart/form-data">
	<table    >
	<tr>
	<td><font color="#000066">ENTRY DATE:</font></td><td><input type="date"   class="responsive-table" name="f1"> </td></tr>
	<tr><td><font color="#000066">REFERENCE NO:</font></td><td><input type="text" name="f2"   > </td></tr>
	<tr><td><font color="#000066">PUR.ORDER NO:</font></td><td><input type="text" name="f3"   > </td></tr>
	<tr><td><font color="#000066">DEPT NAME:</font></td><td><select name="f4" class="small">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `storesmainheads`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[deptname]</option>";
	  }
	    
	   ?>
		 </select>   </td></tr>
	<tr><td><font color="#000066">DEPT CODE:</font></td><td><select name="f5"class="small">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `storesmainheads`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[deptcode]</option>";
	  }
	    
	   ?>
		 </select>   </td></tr>
	<tr><td><font color="#000066">SUPPLIER NAME:</font></td><td><select name="f6"class="small">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `storessupplier`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[accountname]</option>";
	  }
	    
	   ?>
		 </select>  </td></tr>
	<tr><td><font color="#000066">PURPOSE:</font></td><td><input type="text" name="f7"   > </td></tr>
	<tr><td><font color="#000066">TRANSPORT TYPE:</font></td><td><select name="f8"class="small">
	<option>type1</option>
	<option>type2</option>
	</select></td></tr>
	<tr><td><font color="#000066">REPAIR CHARGES:</font></td><td><input type="text" name="f9"   > </td></tr>
	  
	</table> </div>
	 
    <div id="content-wrap"> <table>
	<tr>
	 <td><font color="#000066">SLNO:</font></td><td><input type="text" name="f10"   > </td></tr>
	<tr><td><font color="#000066">REFERENCE DATE:</font></td><td><input type="date" name="f11"   > </td></tr>
	<tr><td><font color="#000066">PUR ORDER DATE:</font></td><td><input type="date" name="f12"   > </td></tr>
	<tr><td><font color="#000066">MACHINE NAME:</font></td><td><select name="f13"class="small">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `storesmachinarymaster`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[machinename]</option>";
	  }
	    
	   ?>
		 </select>> </td></tr>
	<tr><td><font color="#000066">MACHINE NO:</font></td><td><select name="f14"class="small">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `storesmachinarymaster`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[machinecode]</option>";
	  }
	    
	   ?>
		 </select> </td></tr>
	<tr><td><font color="#000066">LR NO/DOCKET NO:</font></td><td><input type="text" name="f15"   > </td></tr>
	<tr><td><font color="#000066">GATEPASS NO:</font></td><td><select name="f16"class="small">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `gatepass`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[gatepassno]</option>";
	  }
	    
	   ?>
		 </select>  </td></tr> 
	<tr><td></td></tr><tr><td></td></tr>
	</table>  
	
	  </div>
 
	   
 <BR><BR><BR><BR> <BR><BR><BR><BR> <BR><BR><BR><BR>  
	 
	  <div  id="sidebar1"> 
	  <fieldset> 
	 <legend></legend>
	<table>
  
	<tr><td><font color="#000066">ITEM NAME:</font></td><td><select name="f17"class="small">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `storesitemcreation`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[itemname]</option>";
	  }
	    
	   ?>
		 </select>  </td> 
	 <td><font color="#000066">QUANTITY:</font></td><td><input type="text" name="f18"   class="s"> </td> 
	 <td><font color="#000066">RATE:</font></td><td><input type="text" name="f19"  class="s" > </td> 
	 <td><font color="#000066">VALUE:</font></td><td><input type="text" name="f20"   class="s"> </td>
	  </tr> 
	</table> 
	
	</fieldset>
	</div>
 <BR><BR> 
	 
	  
	 <div  id="sidebar1"> 
	  <fieldset> 
	 <legend></legend>
	<table>
  
	<tr><td><font color="#000066">SERVICE BILL:</font></td><td><input type="text" name="f21" class="s"  > </td> 
	 <td><font color="#000066">FREIGHT:</font></td><td><input type="text" name="f22"   class="s"> </td> 
	 <td><font color="#000066">COURIER:</font></td><td><input type="text" name="f23"  class="s" > </td> 
	 <td><font color="#000066">BED:</font></td><td><input type="text" name="f24"   class="s"> </td>
	 <td><font color="#000066">AED:</font></td><td><input type="text" name="f25"   class="s"> </td></tr>
	 <tr><td><font color="#000066">CESS:</font></td><td><input type="text" name="f26"   class="s"> </td>
	 <td><font color="#000066">VAT:</font></td><td><input type="text" name="f27"   class="s"> </td>
	 <td><font color="#000066">CST:</font></td><td><input type="text" name="f28"   class="s"> </td>
	  <td><font color="#000066">OTHERS:</font></td><td><input type="text" name="f29"   class="s"> </td>
	 </tr> 
	</table> 
	
	</fieldset>
	</div>
	  <BR><BR> <BR><BR>
	  <div align="center"><input type="submit" name="submit" value="SAVE" class="submit"></div> 
	  	</form>
		 
	  <br>	<br>	
</div>
  
 <style>
 .small
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
$a20=$_POST['f20'];
$a21=$_POST['f21'];
$a22=$_POST['f22'];
$a23=$_POST['f23'];
$a24=$_POST['f24'];
$a25=$_POST['f25'];
$a26=$_POST['f26'];
$a27=$_POST['f27'];
$a28=$_POST['f28'];
$a29=$_POST['f29'];
 
 include 'db.php';
  
 
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 $q=mysql_query("INSERT INTO `storesservicebill`(`id`, `entrydate`, `referenceno`, `purorderno`, `deptname`, `deptcode`, `supplier`, `purpose`, `transporttype`, `repaircharges`, `slno`, `referencedate`, `purorderdate`, `machinename`, `machineno`, `lrno`, `gatepassno`, `itemname`, `quantity`, `rate`, `value`, `servicebill`, `frieght`, `courier`, `bed`, `aed`, `cess`, `vat`, `cst`, `others`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24','$a25','$a26','$a27','$a28','$a29','$dt')");
  
if($q)
echo "<script>alert('Data Inserted');window.location='servicebill.php';</script>";
 
 

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
