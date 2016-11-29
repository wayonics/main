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
 <h1 align="center">PURCHASE ENTRY</h1>
    <div  id="sidebar1"> 
	 <form action="purchaseentry.php" method="post" enctype="multipart/form-data">
	 <fieldset>
	 <legend></legend>
	<table>
  
	<tr><td><font color="#000066">ENTRY DATE:</font></td><td><input type="date" name="f1"   > </td> 
	 <td><font color="#000066">TYPE OF ENTRY:</font></td><td><select name="f2"  >
	 <option>select--------------</option>
	 <option>PURCHASE</option>
	 
 
	 </select>  </td> 
	 <td><font color="#000066">INWARD NO:</font></td><td><input type="text" name="f3"   > </td> 
	 <td><font color="#000066">SUPPLIER NAME:</font></td><td><input type="text" name="f4" class="small"   > </td></tr>
	 
	 
	<tr><td><font color="#000066">BILL NO:</font></td><td><input type="text" name="f5"   > </td> 
	 <td><font color="#000066">BILL DATE:</font></td><td><input type="date" name="f6"   > </td> 
	 <td><font color="#000066">PUR. ORDER NO:</font></td><td><input type="text" name="f7"   > </td> 
	 <td><font color="#000066">PUR. ORDER DATE:</font></td><td><input type="date" name="f8"  class="small" > </td></tr>
	 
	 
	<tr><td><font color="#000066">DC LIST:</font></td><td><input type="text" name="f9"   > </td> 
	 <td><font color="#000066">FORM TYPE:</font></td><td><input type="text" name="f10"   > </td> 
 <td><font color="#000066">BILL TYPE:</font></td><td><input type="text" name="f11"   > </td> 
	 <td><font color="#000066">STATE:</font></td><td><input type="text" name="f12"  class="small" > </td></tr>
	 
	 
	<tr><td><font color="#000066">TRANS MODE:</font></td><td><select name="f13"  >
	 <option value="none">select--------------</option>
	 <option>consumable</option>
	 
 
	 </select>  </td> 
	 <td><font color="#000066">RECEIPT NO:</font></td><td><input type="text" name="f14"   > </td> 
	 <td><font color="#000066">DC INWARD NO:</font></td><td><input type="text" name="f15"   > </td> 
	 <td><font color="#000066">DEBIT INWARD NO:</font></td><td><input type="text" name="f16"   class="small"> </td></tr>
	 <tr><td><font color="#000066">INDENT REFERENCE NO:</td><td><input type="text" name="f35"></td></tr>
	</table> 
	
	</fieldset>
	 
     
  <br> 
  <div  id="sidebar1">  
	 <legend></legend>
	<table>
  
	<tr><td><font color="#000066"> ITEM NAME:</font></td><td><select name="f17">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `storesitemcreation`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[itemname]</option>";
	  }
	    
	   ?>
		 </select>                         </td> 
	 <td><font color="#000066">ITEM CODE:</font></td><td><select name="f18">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `storesitemcreation`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[itemcode]</option>";
	  }
	    
	   ?>
		 </select>                          </td> 
	 <td><font color="#000066">QTY:</font></td><td><input type="text" name="f19"  class="s" > </td> 
	 <td><font color="#000066">RATE:</font></td><td><input type="text" name="f20"  class="s" > </td></tr>
	 
 
	<tr><td><font color="#000066">AMOUNT:</font></td><td><input type="text" name="f21"class="s"   > </td> 
	 <td><font color="#000066">FIN HEAD/BIN LOCATION:</font></td><td><select name="f22">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `storesfinheads`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[finname]</option>";
	  }
	    
	   ?>
		 </select>  </td> 
	 <td><font color="#000066">NARRATION:</font></td><td><input type="text" name="f23"  class="s" > </td> 
	 <td><font color="#000066">MAKE :</font></td><td><input type="text" name="f24"  class="s" > </td>
	 <td><font color="#000066">BILL AMOUNT :</font></td><td><input type="text" name="f25"class="s"   > </td></tr>
	  
	</table> 
	
	<BR><BR>
	  <div  id="sidebar1"> 
	  <fieldset> 
	 <legend></legend>
	<table>
  
	<tr><td><font color="#000066">DISCOUNT%:</font></td><td><input type="text" name="f26" class="s"  > </td> 
	 <td><font color="#000066">INSURANCE:</font></td><td><input type="text" name="f27"   class="s"> </td> 
	 <td><font color="#000066">P AND F:</font></td><td><input type="text" name="f28"  class="s" > </td> 
	 <td><font color="#000066">FRIEGHT:</font></td><td><input type="text" name="f29"   class="s"> </td>
	 <td><font color="#000066">COURIER:</font></td><td><input type="text" name="f30" class="s"  > </td></tr>
	 <tr>
	 <td><font color="#000066">VAT%:</font></td><td><input type="text" name="f31"   class="s"> </td>
	 <td><font color="#000066">CST%:</font></td><td><input type="text" name="f32"  class="s" > </td> 
<td><font color="#000066">SERVICE TAX:</font></td><td><input type="text" name="f33"  class="s" > </td>
	 <td><font color="#000066">OTHER CHARGES:</font></td><td><input type="text" name="f34"  class="s" > </td>
	 
	 
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
$a30=$_POST['f30'];
$a31=$_POST['f31'];
$a32=$_POST['f32'];
$a33=$_POST['f33'];
$a34=$_POST['f34']; 
$a35=$_POST['f35']; 

 
 include 'db.php'; 
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 $q=mysql_query("INSERT INTO `storespurchaseentry`(`id`, `entrydate`, `typeofentry`, `inwardno`, `suppliername`, `billno`, `billdate`, `purorderno`, `purorderdate`, `dclist`, `formtype`, `billtype`, `state`, `transmode`, `receiptno`, `dcinwardno`, `debitinwardno`, `itemname`, `itemcode`, `qty`, `rate`, `amount`, `finhead`, `narration`, `make`, `billamout`, `discount`, `insurance`, `pandf`, `frieght`, `courier`, `vat`, `cat`, `servicetax`, `othercharges`,`indentreferenceno`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24','$a25','$a26','$a27','$a28','$a29','$a30','$a31','$a32','$a33','$a34','$a35', '$dt')")or die(mysql_error());
 
  $q1=mysql_query("INSERT INTO `storespurchaseentry1`(`id`, `entrydate`, `typeofentry`, `inwardno`, `suppliername`, `billno`, `billdate`, `purorderno`, `purorderdate`, `dclist`, `formtype`, `billtype`, `state`, `transmode`, `receiptno`, `dcinwardno`, `debitinwardno`, `itemname`, `itemcode`, `qty`, `rate`, `amount`, `finhead`, `narration`, `make`, `billamout`, `discount`, `insurance`, `pandf`, `frieght`, `courier`, `vat`, `cat`, `servicetax`, `othercharges`,`indentreferenceno`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24','$a25','$a26','$a27','$a28','$a29','$a30','$a31','$a32','$a33','$a34','$a35', '$dt')")or die(mysql_error());
 
    
if($q==true and $q1==true)
echo "<script>alert('Data Inserted');window.location='purchaseentry.php';</script>";
  
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
