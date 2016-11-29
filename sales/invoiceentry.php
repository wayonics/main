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
  <h1 align="center">INVOICE ENTRY</h1> <hr>
    <div  id="sidebar"> 
	 <form action="invoiceentry.php" method="post" enctype="multipart/form-data">
    
          <table>
		  <tr><td> <font color="#000066">INVOICE NO:</td><td><input type="TEXT" name="f1"  > </td></tr>   
	
	<tr><td><font color="#000066">INVOICE TYPE:</td><td></font><select name="f2">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `salesinvoicemaster`  ");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[invoicetype]</option>";
	  }
	    
	   ?>
		 </select>  </td></tr>
		 
		 
		 <tr><td><font color="#000066">EXPORT INVOICE:</td><td></font> 
		 <select name="f3">
	 <option>select--------------</option>
	 <option></option>
	 <option></option>
	 
	 </select>  </td></tr>
		 
		 <tr><td><font color="#000066">EXPORT INVOICE TYPE:</td><td></font> <select name="f4">
	 <option>select--------------</option>
	 <option></option>
	 <option></option>
	 
	 </select>  </td></tr>
		 
		  
    	<tr><td> <font color="#000066">STATE:</td><td><select name="f5">
	 <option>select--------------</option>
	 <option>in state</option>
	 <option>out state</option>
	 
	 </select>  </td></tr>
	<tr><td> <font color="#000066">FINAL/PROVISIONAL:</td><td><select name="f6">
	 <option>select--------------</option>
	 <option></option>
	 <option></option>
	 
	 </select> </td></tr>
	    <tr><td> <font  color="#000066">DATE & TIME ISSUE OF INVOICE:</td><td><input type="DATE" name="f7" class="small" ><input type="TIME" name="f8"  class="small" > </td></tr>
	 <tr><td> <font  color="#000066">DATE & TIME REMOVAL OF GOODS:</td><td><input type="DATE" name="f9"  class="small" ><input type="TIME" name="f10"  class="small" > </td></tr>
	 <tr><td> <font  color="#000066">DUE DAYS:</td><td><input type="DATE" name="f11"  class="small" ><input type="TIME" name="f12"  class="small" > </td></tr>
	 
	<tr><td> <font color="#000066">BUYER NAME:</td><td><select name="f13">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `salesbuyers`  ");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[nameofac]</option>";
	  }
	    
	   ?>
		 </select> </td></tr>
	<tr><td> <font color="#000066">PARTY APVAT/CST NO:</td><td><input type="text" name="f14"  > </td></tr>
	<tr><td> <font color="#000066">OTHER THAN CONSIGNEE:</td><td><input type="text" name="f15"  > </td></tr>
	<tr><td> <font color="#000066">AGENT:</td><td><select name="f16">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `salesagents`  ");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[agentname]</option>";
	  }
	    
	   ?>
		 </select></td></tr>
	<tr><td> <font color="#000066">AGAINST PUR ORDER	:</td><td><input type="text" name="f17"  > </td></tr>
	<tr><td> <font color="#000066">MODE OF TRANSPORT:</td><td><input type="text" name="f18"  > </td></tr>
	<tr><td> <font color="#000066">VEHICLE REGISTARTION NO:</td><td><input type="text" name="f19"  > </td></tr>
	<tr><td> <font color="#000066"> CONTAINER NO:</td><td><input type="text" name="f20"  > </td></tr>
	 <tr><td> <font  color="#000066">SALE CONTACT NO/DATE:</td><td><input type="TEXT" name="f21"  class="small" ><input type="DATE" name="f22"  class="small" > </td></tr>
	    
       
	   </table> </div>
	 
    <div id="content-wrap">
	
	 <table> 
	
	 <tr><td> <font  color="#000066">PORT OF LOADING/DISCHARGE:</td><td><input type="TEXT" name="f23"  class="small" ><input type="TEXT" name="f24"   class="small"> </td></tr>
	 
	<tr><td>  <font color="#000066">SHIPPING MARK:</td><td><input type="text" name="f25"  > </td></tr>
	<tr><td>  <font color="#000066">DESPATCHED TO:</td><td><input type="text" name="f26"  > </td></tr>
	<tr><td>  <font color="#000066">FINAL DESTINATION</td><td><input type="text" name="f27"  ></td></tr>
	<tr><td>  <font color="#000066">TERMS OF DELIVERY& PAYMENT:</td><td><input type="text" name="f28"  ></td></tr>
	<tr><td> <font  color="#000066">CURRENCY TYPE:</td><td><select name="f29" class="small">
	 <option>select--------------</option>
	 <option>rupees</option>
	 <option>dollars</option>
	 
	 </select> <input type="TEXT" name="f30"  class="small" > </td></tr>
	 
	<tr><td>  <font color="#000066">OTL NO:</td><td><input type="text" name="f31"  ></td></tr>
	<tr><td>  <font color="#000066">C.EXRANGE NO:</td><td><input type="text" name="f32"  ></td></tr>
	<tr><td> <font  color="#000066">WAY BILLNO/EPCG NO:</td><td><input type="TEXT" name="f33"   class="small"><input type="TEXT" name="f34"  class="small" > </td></tr>
	<tr><td> <font  color="#000066">LR NO:</td><td><input type="TEXT" name="f35"   class="small"><input type="TEXT" name="f36"   class="small"> </td></tr>
	<tr><td> <font  color="#000066">AREA NO:</td><td><input type="TEXT" name="f37"   class="small"><input type="TEXT" name="f38"   class="small"> </td></tr>
	
	<tr><td>  <font color="#000066">YESSEL/FRIEGT NO:</td><td><input type="text" name="f39"  ></td></tr>
	<tr><td> <font  color="#000066">CONVERSION  RATE-TIME DATE:</td><td><input type="TEXT" name="f40"   class="small"><input type="DATE" name="f41"  class="small" > </td></tr>
	
	  </table>  
	

	 <br>	 </div>
  
	   
 		 
 </div>

  
  
  
 <div  id="main-wrap">
   
    <div  id="sidebar"> 
	 
          <table>
		   
	<tr><td><font color="#000066">ITEM NAME:</td><td></font><select name="f42">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `salesitemmaster`  ");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[itemname]</option>";
	  }
	    
	   ?>
		 </select> </td></tr>
		 
		 
		 <tr><td><font color="#000066">VERITY:</td><td></font><select name="f43">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `salesverity`  ");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[verity]</option>";
	  }
	    
	   ?>
		 </select> </td></tr>
		 
		 <tr><td><font color="#000066">SIZE/COUNT:</td><td></font><select name="f44">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `salessizecountmaster`  ");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[sizecount]</option>";
	  }
	    
	   ?>
		 </select> </td></tr>
		 
		  
    	<tr><td> <font color="#000066">ITEM DESC:</td><td><select name="f45">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `salesitemmaster`  ");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[itemcode]</option>";
	  }
	    
	   ?>
		 </select> </td></tr>
	<tr><td> <font color="#000066">A/C NAME:</td><td><input type="TEXT" name="f46"  > </td></tr>
		<tr><td> <font color="#000066">TYPE OF PACK:</td><td> <select name="f47">
	 <option>select--------------</option>
	 <option>cotton</option>
	 <option>bag</option>
	 
	 </select>  </td></tr>
	
	
	
	     
	<tr><td> <font color="#000066">LOT NO COMM:</td><td><input type="text" name="f48"  > </td></tr>
	 <tr><td> <font  color="#000066">BAG SLNO FROM:</td><td><input type="TEXT" name="f49"  class="small" ><font  color="#000066">TO<input type="TEXT" name="f50"   class="small"> </td></tr>
	  <tr><td> <font  color="#000066">BAG TYPE/SIZE:</td><td><select name="f51" class="small">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `salesbagtypes`  ");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[bagtype]</option>";
	  }
	    
	   ?>
		 </select> <input type="TEXT" name="f52"   class="small"> </td></tr>
	  
       
	   </table> </div>
	 
    <div id="content-wrap">
	
	 <table> 
	
	 <tr><td> <font  color="#000066">UNITS:</td><td><select name="f53">
	 <option>select--------------</option>
	 <option>kgs</option>
	 <option>grms</option>
	 
	 </select>  </td></tr>
	 
	<tr><td>  <font color="#000066">UNIT TO BE CONVERTED:</td><td><input type="text" name="f54"   class="small"><input type="TEXT" name="f55"   class="small"> </td></tr>
	<tr><td>  <font color="#000066">NO'S:</td><td><input type="text" name="f56"  > </td></tr>
	<tr><td>  <font color="#000066">GROSS WEIGHT</td><td><input type="text" name="f57"  ></td></tr>
	<tr><td>  <font color="#000066">TARE WEIGHT:</td><td><input type="text" name="f58"  ></td></tr>
	  
	<tr><td>  <font color="#000066">NET WT:</td><td><input type="text" name="f59"  ></td></tr>
	<tr><td>  <font color="#000066">EXMILL/NET:</td><td><select name="60">
	 <option>select--------------</option>
	 <option>EX-MILL</option>
	 <option></option>
	 
	 </select> </td></tr>
	 
	<tr><td>  <font color="#000066">RATE:</td><td><input type="text" name="f61"  ></td></tr>
	 <tr><td>  <font color="#000066">TOT UNIT VALUE:</td><td><input type="text" name="f62"  ></td></tr>
	 <tr><td>  <font color="#000066">AMOUNT:</td><td><input type="text" name="f63"  ></td></tr>
	 
	  </table>  
	

	 <br>	<br>	<br>
	  </div>
  
  
  
   <div id="content-wrap">
	
	 <table> 
	
	 <tr><td> <font  color="#000066"><input type="checkbox" name="c1"  value="checked" > DISCOUNT:</td><td><input type="TEXT" name="d1" class="small" placeholder="%"><input type="TEXT" name="e1" class="small" placeholder="value"  ></td> </tr>
	 
	 <tr><td> <font  color="#000066"><input type="checkbox" name="c2" value="checked" > INSURANCE:</td><td><input type="TEXT" name="d2" class="small" placeholder="%"><input type="TEXT" name="e2" class="small" placeholder="value"  ></td> </tr>
	 <tr><td> <font  color="#000066"><input type="checkbox" name="c3" value="checked" > P AND F:</td><td><input type="TEXT" name="d3" class="small" placeholder="%"><input type="TEXT" name="e3" class="small" placeholder="value"  ></td> </tr>
	 <tr><td> <font  color="#000066"><input type="checkbox" name="c4" value="checked" > FRIGHT:</td><td><input type="TEXT" name="d4" class="small" placeholder="%"><input type="TEXT" name="e4" class="small" placeholder="value"  ></td> </tr>
	 <tr><td> <font  color="#000066"><input type="checkbox" name="c5" value="checked" > COURIER:</td><td><input type="TEXT" name="d5" class="small" placeholder="%"><input type="TEXT" name="e5" class="small" placeholder="value"  ></td> </tr>
	 <tr><td> <font  color="#000066"><input type="checkbox" name="c6"  value="checked"> B.E.D:</td><td><input type="TEXT" name="d6" class="small" placeholder="%"><input type="TEXT" name="e6" class="small" placeholder="value"  ></td> </tr>
	 <tr><td> <font  color="#000066"><input type="checkbox" name="c7"  value="checked"> A.E.D:</td><td><input type="TEXT" name="d7" class="small" placeholder="%"><input type="TEXT" name="e7" class="small" placeholder="value"  ></td> </tr>
	 <tr><td> <font  color="#000066"><input type="checkbox" name="c8" value="checked" > CESS:</td><td><input type="TEXT" name="d8" class="small" placeholder="%"><input type="TEXT" name="e8" class="small" placeholder="value"  ></td> </tr>
	 <tr><td> <font  color="#000066"><input type="checkbox" name="c9" value="checked" > AP VAT:</td><td><input type="TEXT" name="d9" class="small" placeholder="%"><input type="TEXT" name="e9" class="small" placeholder="value"  ></td> </tr>
	 <tr><td> <font  color="#000066"><input type="checkbox" name="c10" value="checked" > CST:</td><td><input type="TEXT" name="d10" class="small" placeholder="%"><input type="TEXT" name="e10" class="small" placeholder="value"  ></td> </tr>
	 <tr><td> <font  color="#000066"><input type="checkbox" name="c11"  value="checked"> EPCG:</td><td><input type="TEXT" name="d11" class="small" placeholder="%"><input type="TEXT" name="e11" class="small" placeholder="value"  ></td> </tr>
	 <tr><td> <font  color="#000066"><input type="checkbox" name="c12"  value="checked"> OTHERS:</td><td><input type="TEXT" name="d12" class="small" placeholder="%"><input type="TEXT" name="e12" class="small" placeholder="value"  ></td> </tr>
	 <tr><td> <font  color="#000066"><input type="checkbox" name="c13" value="checked" > MISLANIOUS:</td><td><input type="TEXT" name="d13" class="small" placeholder="%"><input type="TEXT" name="e13" class="small" placeholder="value"  ></td> </tr> 
	  
	  </table>  
	 
	 <br>	<br>	<br>
	  </div>
  
   
     <center><input type="submit" name="submit" value="SAVE" class="submit">
	 <br>	<br>	<br>
	  </div>
 
	   
	  <div align="right"></div> 
	  	</form>
		 
	  <br>	<br>	
</div>
  
 <style>
 .small
 {
 width:80px;
 }
 #main-wrap {
    /* overflow to handle inner floating block */
    overflow: hidden;
	background:#FFFFFF;
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
input,select,option{
padding:5px 2px 5px 2px;
}
select
{
width:178px;
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
  
 </div> 
	<br>	 
	 
	<?php
	session_start();
 if(isset($_POST['submit']))
{
$a1=$_POST['f1'];
$_SESSION['invno']=$a1;


$a2=$_POST['f2'];
$a3=$_POST['f3'];
$a4=$_POST['f4'];
$a5=$_POST['f5'];
$a6=$_POST['f6'];
$a7=$_POST['f7'];
$_SESSION['invissuedate']=$a7;

$a8=$_POST['f8'];
$_SESSION['invissuetime']=$a8;

$a9=$_POST['f9'];
$_SESSION['goodsreomvedate']=$a9;


$a10=$_POST['f10'];
$_SESSION['goodsreomvetime']=$a10;



$a11=$_POST['f11'];
$a12=$_POST['f12'];
$a13=$_POST['f13'];
$_SESSION['buyer']=$a13;

$a14=$_POST['f14'];
$_SESSION['partyno']=$a14;


$a15=$_POST['f15'];
$a16=$_POST['f16'];
$_SESSION['agent']=$a16;

$a17=$_POST['f17'];
$a18=$_POST['f18'];
$_SESSION['transport']=$a18;


$a19=$_POST['f19'];
$_SESSION['vehicleregno']=$a19;



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
$_SESSION['waybillno']=$a33;


$a34=$_POST['f34'];
$a35=$_POST['f35'];  
$_SESSION['lrno']=$a35;

$a36=$_POST['f36'];
$a37=$_POST['f37'];
$a38=$_POST['f38'];
$a39=$_POST['f39'];
$a40=$_POST['f40'];
$a41=$_POST['f41'];
$a42=$_POST['f42'];
$a43=$_POST['f43'];
$a44=$_POST['f44'];
$a45=$_POST['f45'];
$a46=$_POST['f46'];
$a47=$_POST['f47'];
$a48=$_POST['f48'];
$a49=$_POST['f49'];
$a50=$_POST['f50'];
$_SESSION['bags']=$a50;

$a51=$_POST['f51'];
$a52=$_POST['f52'];
$a53=$_POST['f53'];
$a54=$_POST['f54'];
$a55=$_POST['f55'];
$a56=$_POST['f56'];
$a57=$_POST['f57'];
$_SESSION['gross']=$a57;


$a58=$_POST['f58'];
$a59=$_POST['f59'];
$_SESSION['netwt']=$a59;

$a60=$_POST['f60'];
$a61=$_POST['f61'];
$_SESSION['rate']=$a61;

$a62=$_POST['f62'];
$a63=$_POST['f63'];
$_SESSION['amount']=$a63;
   
   
    $c1=$_POST['c1'];
  $c2=$_POST['c2'];
  $c3=$_POST['c3'];
  $c4=$_POST['c4'];
  $c5=$_POST['c5'];
  $c6=$_POST['c6'];
  $c7=$_POST['c7'];
  $c8=$_POST['c8'];
  $c9=$_POST['c9'];
  $c10=$_POST['c10'];
  $c11=$_POST['c11'];
  $c12=$_POST['c12'];
  $c13=$_POST['c13'];
   
   
  $d1=$_POST['d1'];
  $d2=$_POST['d2'];
  $d3=$_POST['d3'];
  $d4=$_POST['d4'];
  $d5=$_POST['d5'];
  $d6=$_POST['d6'];
  $d7=$_POST['d7'];
  $d8=$_POST['d8'];
  $d9=$_POST['d9'];
  $d10=$_POST['d10'];
  $d11=$_POST['d11'];
  $d12=$_POST['d12'];
  $d13=$_POST['d13'];
  
  $e1=$_POST['e1'];
  $e2=$_POST['e2'];
  $e3=$_POST['e3'];
  $e4=$_POST['e4'];
  $e5=$_POST['e5'];
  $e6=$_POST['e6'];
  $e7=$_POST['e7'];
  $e8=$_POST['e8'];
  $e9=$_POST['e9'];
  $e10=$_POST['e10'];
  $e11=$_POST['e11'];
  $e12=$_POST['e12'];
  $e13=$_POST['e13'];
    
 include 'db.php';
  
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 
 $q=mysql_query("INSERT INTO `salesinvoicentry`(`id`, `invno`, `invtype`, `exportinv`, `exportinvtype`, `state`, `finalprovosional`, `invissuedate`, `invissuetime`, `goodsdate`, `goodstime`, `duedaysdate`, `duedaystime`, `buyername`, `vatno`, `otherthanconsignee`, `agent`, `purorder`, `modeoftransport`, `vehicleregno`, `containerno`, `salecontactno`, `salecontactdate`, `loading`, `loadingg`, `shippingmark`, `despatchedto`, `finaldestination`, `termsofdelivery`, `currency`, `currencyy`, `otlno`, `exrangeno`, `waybillno`, `waybillnoo`, `lrno`, `lrnoo`, `areano`, `areanoo`, `frightno`, `conversionrate`, `conversionratedate`, `itemname`, `verity`, `sizecount`, `itemdesc`, `acname`, `typeofpack`, `lotnocomm`, `bagfrom`, `bagto`, `bagtype`, `bagsize`, `units`, `unittobeconverted`, `unittobeconvertedd`, `nos`, `grosswt`, `tarewt`, `netwt`, `exmill`, `rate`, `totunitval`, `amount`, `discountchecked`, `discountper`, `discountval`, `insurancechecked`, `insuranceper`, `insuranceval`, `pfchecked`, `pfper`, `pfval`, `frightchecked`, `frightper`, `frightval`, `courierchecked`, `courierper`, `courierval`, `bedchecked`, `bedper`, `bedval`, `aedchecked`, `aedper`, `aedval`, `cesschecked`, `cessper`, `cessval`, `vatchecked`, `vatper`, `vatval`, `cstchecked`, `cstper`, `cstval`, `epcgchecked`, `epcgper`, `epcgval`, `otherschecked`, `othersper`, `othersval`, `mislaniuschecked`, `mislaniusper`, `mislaniusval`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24','$a25','$a26','$a27','$a28','$a29','$a30','$a31','$a32','$a33','$a34','$a35','$a36','$a37','$a38','$a39','$a40','$a41','$a42','$a43','$a44','$a45','$a46','$a47','$a48','$a49','$a50','$a51','$a52','$a53','$a54','$a55','$a56','$a57','$a58','$a59','$a60','$a61','$a62','$a63','$c1','$d1','$e1','$c2','$d2','$e3','$c3','$d3','$e3','$c4','$d4','$e4','$c5','$d5','$e5','$c6','$d6','$e6','$c7','$d7','$e7','$c8','$d8','$e8','$c9','$d9','$e9','$c10','$d10','$e10','$c11','$d11','$e11','$c12','$d12','$e12','$c13','$d13','$e13','$dt')");
 
   
if($q)
echo "<script>alert('Data Inserted');window.location='invoiceform.php';</script>";
  

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
