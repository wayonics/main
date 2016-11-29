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
     
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 
<script>
$(document).ready(function() {
    $('#head').change(function(){
        $.ajax({
            type: "GET",
            url: "get-icode.php",
            data: 'itemcode=' + $('#head').val(),
            success: function(responseText){
                 $('#itemcode').val(responseText);
            }

        });  
    }); //event handler

}); //document.ready
</script>


</head>

<body>
  
        <?php include "menu.php"; ?>
      </nav>
    </header>
    <div id="site_content" >
      
 <div  id="main-wrap">
  <h1 align="center">ITEM CREATION</h1> <hr>
    <div  id="sidebar"> 
	 <form action="itemcreation.php" method="post" enctype="multipart/form-data">
	<table    >
	<tr><td><font color="#000066">DATE:</font></td><td><input type="DATE" name="date"   > </td></tr>
	<tr>
	
	<td><font color="#000066">FINANCIAL HEAD:</font></td><td><select name="f1"  class="small" id="head">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `storesfinheads`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[fincode]</option>";
	  }
	    
	   ?>
		 </select>   </td></tr>
	<tr><td><font color="#000066">ITEM CODE:</font></td><td><input type="text" name="f2" id="itemcode"   > </td></tr>
	<tr><td><font color="#000066">ITEM NAME:</font></td><td><input type="text" name="f3"   > </td></tr>
	<tr><td><font color="#000066">DESCRIPTION:</font></td><td><input type="text" name="f4"   > </td></tr>
	<tr><td><font color="#000066">UNIT:</font></td><td><select name="f5"  class="small" >
	 <option>select--------------</option>
	 <option>UNIT-1</option>
	 <option>UNIT-2</option>
 
	 </select>  </td></tr>
	<tr><td><font color="#000066">ITEM ID:</font></td><td><input type="text" name="f6"   > </td></tr>
	<tr><td><font color="#000066">DRAWING NO:</font></td><td><input type="text" name="f7"   > </td></tr>
	<tr><td><font color="#000066">CATALOG NO:</font></td><td><input type="text" name="f8"   > </td></tr>
	<tr><td><font color="#000066">LOCATION:</font></td><td><input type="text" name="f9"   > </td></tr>
	<tr><td><font color="#000066">GROUP:</font></td><td><input type="text" name="f10"   > </td></tr>
	 
	</table> </div>
	 
    <div id="content-wrap"> <table>
	<tr>
	 <td><font color="#000066">OPENING STOCK:</font></td><td><input type="text" name="f11"   > </td></tr>
	<tr><td><font color="#000066">RATE:</font></td><td><input type="text" name="f12"   > </td></tr>
	<tr><td><font color="#000066">VALUE:</font></td><td><input type="text" name="f13"   > </td></tr>
	<tr><td><font color="#000066">CST:</font></td><td><input type="text" name="f14"   > </td></tr>
	<tr><td><font color="#000066">VAT:</font></td><td><input type="text" name="f15"   > </td></tr>
	<tr><td><font color="#000066">EXCISE DUTY:</font></td><td><input type="text" name="f16"   > </td></tr>
	<tr><td><font color="#000066">ABC ANALYSIS:</font></td><td><input type="text" name="f17"   > </td></tr>
	<tr><td><font color="#000066">MIN LEVEL:</font></td><td><input type="text" name="f18"   > </td></tr>
	<tr><td><font color="#000066">MAX LEVEL:</font></td><td><input type="text" name="f19"   > </td></tr>
	<tr><td><font color="#000066">LAG DAYS:</font></td><td><input type="text" name="f20"   > </td></tr>
	<tr><td><font color="#000066">ALERT QUANTITY:</font></td><td><input type="text" name="f21"   > </td></tr>
	
	<tr><td></td></tr><tr><td></td></tr>
	</table>  
	

	 <br>	<br>	<br>
	  </div>
 
	   
	  <div align="right"><input type="submit" name="submit" value="SAVE" class="submit"></div> 
	  	</form>
		 
	  <br>	<br>	 <?php
  echo "<table border=1 width=1000px>";
			 echo " <tr>";
		  
			 echo " <th>ACTION</th>";
			 echo " <th>ITEM CODE</th>";
			 echo " <th>ITEM NAME</th>";
			 echo " <th>OPENING STOCK</th>";
			 echo " <th>RATE</th>";
			 echo " <th>VALUE</th>";
			 echo " <th>ALERT QUANTITY</th>";
			  
			 echo " </tr>";
			   
  include 'db.php';
    
   $p =mysql_query("select * from storesitemcreation")or die(mysql_error());
     
  while(  $a=mysql_fetch_array($p) )
			  {
			   
   
			  echo "<tr> <td><a href='itemedit.php?id=$a[id]'><img src=edit.png>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='itemdelete.php?id=$a[id]'><img src=delete.png> <td>$a[itemcode]<td>$a[itemname]<td>$a[openingstock]<td>$a[rate]<td>$a[value]<td>$a[alertquantity] ";
			  
			  }
   
   
?>
</tr>
</table> 	

  
	
	  </div>
  
		  </div>
	
 <style>
 .small
 {
 width:150px;
 }
 a
 {text-decoration:none;
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

   border-collapse: collapse;
   border:#CCCCCC;
 
}
 </style>
 </div> 
	<br>	 
	 
	 <?php
 if(isset($_POST['submit']))
{
$date=$_POST['date'];
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


 
 include 'db.php';
  
 
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 $q=mysql_query("INSERT INTO `storesitemcreation`(`id`,`date`, `finanacialhead`, `itemcode`, `itemname`, `description`, `unit`, `itemid`, `drwaingno`, `catalogno`, `location`, `group`, `openingstock`, `rate`, `value`, `cst`, `vat`, `exciseduty`, `abcanalysis`, `minlevel`, `maxlevel`, `labdays`,`alertquantity`,`datetime`) VALUES ('','$date','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$dt')")or die(mysql_error());
  
  
if($q)
echo "<script>alert('Data Inserted');window.location='itemcreation.php';</script>";
 
 

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
