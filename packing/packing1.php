<?php
session_start();
	 
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
 
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text"> 
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><b><a href="#">Jyotirmaye<span class="logo_colour">Textiles Pvt.Ltd</span></a></b></h1>
         
        </div>
      </div>
      <nav>
         <?php include 'menu.php'; ?>
      </nav>
    </header>
    <div id="site_content" >
      
 <div  id="main-wrap"  >
 <h1 align="center">PACKING DETAILS</h1>
    <div  id="sidebar1"> 
	 <form action="packing1.php" method="post" enctype="multipart/form-data">
	 <fieldset>
	 
	 <legend></legend>
	 
	 <table>
	 
	 <tr><td><font color="#000066">UNIT:   <select name="f1">
		 <option>please select-----</option>
		 <option>UNIT-1</option>
		 <option>UNIT-2</option>
		 
		    </select></td> 
			  <td> <font color="#000066">COUNT: <input type="text" name="f2"   ></td> 
			   <td><font color="#000066"> CUSTOMER NAME: <input type="text" name="f3"   ></td> 
			     <td><font color="#000066">CONES PRODUCTION: <input type="text" name="f4"   ></td> 
			  <td> <font color="#000066"> TAPE CONE TIP: <input type="text" name="f5"   ></td> </tr>
			   
			    
			   
			  <tr><td> <font color="#000066"> BAG NO.FROM: <input type="text" name="f6"   ></td> 
			    <td><font color="#000066"> CONES STOCK: <input type="text" name="f7"   ></td> 
			   <td>  <font color="#000066"> STOCK IN NOT ALL: <input type="text" name="f8"   ></td> 
			    <td> <font color="#000066"> OP BAGS: <input type="text" name="f9"   ></td>  
				<td> <font color="#000066"> OP CONES: <input type="text" name="f10"   ></td>  </tr>
				
				
			   <tr> <td> <font color="#000066">VARIETY:<input type="text" name="f11"   ></td> 
		<td><font color="#000066">LOT SIZE:<input type="text" name="f12"   ></td> 
		 <td><font color="#000066">DES STATUS:<input type="text" name="f13"   ></td>   
		<td><font color="#000066">STRAP COLOR:<input type="text" name="f14"   ></td>
		 <td><font color="#000066">BAG NO. TO:<input type="text" name="f15"   ></td></tr>
		 
		 
	<tr><td><font color="#000066">BAGS STOCK:<input type="text" name="f16"   ></td>
		<td><font color="#000066">PENDING LOT SI:<input type="text" name="f17"   ></td>   
		<td><font color="#000066">CL BAGS:<input type="text" name="f18"   ></td> 
		<td><font color="#000066">CL CONES:<input type="text" name="f19"   ></td>  
	<td><font color="#000066">DATE:</font><input type="date" name="f20"   > </td> </tr>
	
	
	<tr><td> <font color="#000066"> DESP DATE:<input type="date" name="f21"    > </td> 
	   
	<td> <font color="#000066" >DISPATCHES:<input type="text" name="f22"   > </td> 
	  <td><font color="#000066">SHIFT:<select name="f23"  >
	 <option>select--------------</option>
	 <option>Day Shift</option>
	 <option>Evening Shift</option>
	 <option>Night Shift</option>
	  
	 </select>   </td> 
	<td> <font color="#000066">BAGS PACKED:<input type="text" name="f24"   > </td> 
	<td> <font color="#000066">DESPATCHED TO:<input type="text" name="f25"  > </td> 
	<td> <font color="#000066">CONES IN NOT ALLOT:<input type="text" name="f26"  ></td>  </tr> 
	
	</fieldset>
	  
	</table>
	<BR><BR>
 
  
	   
	  <div align="center"><input type="submit" name="submit" value="SAVE" class="submit"></div> 
	  	</form>
		 
 
</div>
  
 <style>
 .s
 {
 width:76%;
 }
 #main-wrap {
    /* overflow to handle inner floating block */
    overflow: hidden;
	background:#C1FFE0;
	 
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
 
}
 </style>
  
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
 
 
 
 include '../db.php';
  
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
  
  
  
$q= mysql_query(" INSERT INTO `packing`(`id`, `unit`, `count`, `customername`, `conesproduction`, `tapeconetip`, `bagnofrom`, `conesstock`, `stockinnotall`, `opbags`, `opcones`, `variety`, `lotsize`, `desstatus`, `strapcolour`, `bagnoto`, `bagsstock`, `pendinglot`, `clbags`, `clcones`, `date`, `despdate`, `despatches`, `shift`, `bagspacked`, `dispatchedto`, `conesinnotallot`, `datetime`) VALUES ( '','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24','$a25','$a26','$dt')")or die(mysql_error());
  
    
if($q)
echo "<script>alert('Data Inserted');window.location='packing1.php';</script>";
  
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
