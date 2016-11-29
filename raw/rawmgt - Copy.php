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
  <h1 align="center">RAW MATERIAL MANAGEMENT</h1> <hr>
    <div  id="sidebar"> 	   
	    
		
	   <form action="rawmgt.php" method="post" enctype="multipart/form-data">
     <table>
	 
			
	<tr><td><font color="#000066">DATE:</td><td><input type="date" name="f1"   > </font></td></tr>
			<tr><td>   <font color="#000066">SUPPLIER:</td><td> <input type="text" name="f2"   ></font></td></tr>
			  <tr><td> <font color="#000066"> AGENT:</td><td><select name="f3" class="small">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `agententry`  ");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[agengtname]</option>";
	  }
	    
	   ?>
		 </select></font></td></tr>
			    <tr><td><font color="#000066">MILL LOT NO:</td><td> <input type="text" name="f4"   ></font></td></tr>
			   <tr><td><font color="#000066"> COTTON VARIETY:</td><td> <select name="f5"class="small">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `veriertymaster`  ");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[veriety]</option>";
	  }
	    
	   ?>
		 </select></font></td></tr>
			    
			   	<tr><td>  <font color="#000066">STOCKING AT: </td><td><input type="text" name="f6"   > </font></td></tr>
			   <tr><td><font color="#000066"> BIN LOCATION: </td><td><input type="text" name="f7"   ></font></td></tr>
			   <tr><td><font color="#000066"> FRIEGHT:</td><td> <input type="text" name="f8"   ></font></td></tr>
			     
			  <tr><td><font color="#000066">ITEM NAME: </td><td> <select name="f9"class="small">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `itemmaster`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[itemname]</option>";
	  }
	    
	   ?>
	   </select></font></td></tr>
			 
	 
	   <tr><td> <font color="#000066">AREA:</td><td><input type="text" name="f10"   ></font></td></tr>
		<tr><td><font color="#000066">BALES:</td><td><input type="text" name="f11"   ></font></td></tr>
		<tr><td><font color="#000066">BORAS:</td><td><input type="text" name="f12"   ></font></td></tr>
		<tr><td><font color="#000066">CONV BALES:</td><td><input type="text" name="f13"   ></font></td></tr>
			</table> </div>
	 
    <div id="content-wrap">
	<table>
	  	<tr><td><font color="#000066">BALE NO'S:</td><td><input type="text" name="f14"   ></font></td></tr>
		<tr><td><font color="#000066">RATE/CANDY:</td><td><input type="text" name="f15"   ></font></td></tr>
		<tr><td><font color="#000066">HANDLING CHARGES:</td><td><input type="text" name="f16"   ></font></td></tr>
		<tr><td><font color="#000066">SIZE COUNT:</td><td><select name="f9"class="small">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `sizecountmaster`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[sizecount]</option>";
	  }
	    
	   ?>
	   </select></font></td></tr>
		 
      	 
     <tr><td>	<font color="#000066">SERIAL NO:</font></td><td><input type="text" name="f18"   > </font></td></tr>
	 <tr><td><font color="#000066"> SUPPLIER LOT NO:</td><td><input type="text" name="f19"    > </font></td></tr>
	    
     
		 	  <tr><td><font color="#000066">COUNT/VARIETY:</td><td> <select name="f20"class="small">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `veriertymaster`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[veriety]</option>";
	  }
	    
	   ?>
		 
		    </select>  </font></td></tr>    
	  
	 <tr><td><font color="#000066" >RATE/KG:</font></td><td><input type="text" name="f21"   >  </font></td></tr>
	<tr><td> <font color="#000066">BALE WT :</td><td><input type="text" name="f22"   > </font></td></tr>
	<tr><td> <font color="#000066">PHY WT:</td><td><input type="text" name="f23"   > </font></td></tr>
	<tr><td> <font color="#000066">ASSBLE VALUE:</td><td><input type="text" name="f24"  > </font></td></tr>
	    
	   </table> </div> 
   <br><br><br><br><br><br><br>  <br><br><br><br><br><br><br><br> <br><br><br> 
	<table>
	 
      <tr><td><font color="#000066">BALE NO:</td><td><input type="text" name="f25" class="r"  > </font></td> 
	 <td> <font color="#000066">2.5% SL:</td><td><input type="text" name="f26" class="r" > </font></td> 
	 <td> <font color="#000066">50% SL:</td><td><input type="text" name="f27" class="r" > </font></td> 
	 <td>  <font color="#000066">UR %</td><td>:<input type="text" name="f28"class="r"  > </font></td>
	  <td>  <font color="#000066">MICRONIAR:</td><td><input type="text" name="f29" class="r" >  </font></td></tr>
	   
	<tr><td> <font color="#000066">STRENGTH:</td><td><input type="text" name="f30"class="r"  >  </font></td> 
	  <td> <font color="#000066">MR %:</td><td><input type="text" name="f31"class="r"  >  </font></td>
	    <td> <font color="#000066">RD:</td><td><input type="text" name="f32"class="r"  >  </font></td> 
	   <td>  <font color="#000066">+B:</td><td><input type="text" name="f33" class="r" >  </font></td>   
	   <td> <font color="#000066">TRASH %:</td><td><input type="text" name="f34"class="r"  >  </font></td></tr>
	   
	   
	  <tr><td> <font color="#000066">MOIST %:</td><td><input type="text" name="f35" class="r" > </font></td> 
	  <td> <font color="#000066">FQI:</td><td><input type="text" name="f36" class="r" >  </font></td> 
	  <td> <font color="#000066">ELONG:</td><td><input type="text" name="f37" class="r" >  </font></td> 
	    <td><font color="#000066">SFC:</td><td><input type="text" name="f38"class="r"  >  </font></td> 
	   <td> <font color="#000066">BALE WT:</td><td><input type="text" name="f39" class="r" >  </font></td> 
	   <td> <font color="#000066">PHY WT:</td><td><input type="text" name="f40"class="r"  >  </font></td> </tr>
	 
	  
	</table><br><br>
	<center>
	 <input type="submit"  name="submit" value="Submit" class="submit"> 
	<br><br><br><br> 
</div>

	 
       </div>
	   
    
	</form>
   
	  <br>	<br>	
</div>
  
 <style>
 .r
 {width:78px;
 }
 .small
 {width:150px;
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
 
input,select,option
{
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
 </style>
  
 </div> 
	<br>	 

<br><br>
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
$a26=$_POST['f25'];
$a27=$_POST['f26'];
$a28=$_POST['f27'];
$a29=$_POST['f28'];
$a30=$_POST['f30'];
$a31=$_POST['f31'];
$a32=$_POST['f32'];
$a33=$_POST['f33'];
$a34=$_POST['f34'];
$a35=$_POST['f35'];
$a36=$_POST['f36'];
$a37=$_POST['f37'];
$a38=$_POST['f38'];
$a39=$_POST['f39'];
$a40=$_POST['f40'];
    
 
 include 'db.php';
  
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 $q=mysql_query("INSERT INTO `rawmgt`(`id`, `date`, `supplier`, `agent`, `milllotno`, `cottonvariety`, `stockingat`, `binlocation`, `frieght`, `itemname`, `area`, `bales`, `boras`, `convbales`, `balenos`, `rate`, `handling`, `size`, `serialno`, `supplierlotno`, `count`, `rate/kg`, `balewt`, `phywt`, `assblevalue`, `baleno`, `sl1`, `sl2`, `ur`, `microniar`, `strength`, `mr`, `rd`, `+b`, `trash%`, `moist%`, `fqi`, `elong`, `sfc`, `balewtt`, `phywtt`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24','$a25','$a26','$a27','$a28','$a29','$a30','$a31','$a32','$a33','$a34','$a35','$a36','$a37','$a38','$a39','$a40','$dt')");
 
$q=mysql_query("INSERT INTO `rawmgt1`(`id`, `date`, `supplier`, `agent`, `milllotno`, `cottonvariety`, `stockingat`, `binlocation`, `frieght`, `itemname`, `area`, `bales`, `boras`, `convbales`, `balenos`, `rate`, `handling`, `size`, `serialno`, `supplierlotno`, `count`, `rate/kg`, `balewt`, `phywt`, `assblevalue`, `baleno`, `sl1`, `sl2`, `ur`, `microniar`, `strength`, `mr`, `rd`, `+b`, `trash%`, `moist%`, `fqi`, `elong`, `sfc`, `balewtt`, `phywtt`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24','$a25','$a26','$a27','$a28','$a29','$a30','$a31','$a32','$a33','$a34','$a35','$a36','$a37','$a38','$a39','$a40','$dt')");
 
  
  
if($q==true and $q1==true)
echo "<script>alert('Data Inserted');window.location='rawmgt.php';</script>";
  
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
