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
   <?php 
		 //session_start();
	   $id=$_GET['id'];
	  $_SESSION['id1']=$id;
	   include 'db.php'; 
	   
	  $q1=mysql_query(" SELECT * FROM `storessupplier` WHERE  id='$id'");
	  $a=mysql_fetch_array($q1);
	    
	   ?>
      </nav>
    </header>
    <div id="site_content" >
      
 <div  id="main-wrap">
  <h1 align="center">SUPPLIERS</h1> <hr>
    <div  id="sidebar"> 
	 <form action="supplieredit1.php" method="post" enctype="multipart/form-data">
	<table>
	<tr>
	<td><font color="#000066">NAME OF THE ACCOUNT:</font></td><td><input type="text"   class="responsive-table" name="f1" value="<?php echo $a[1] ?>" > </td></tr>
	<tr><td><font color="#000066">ACCOUNT ALIAS:</font></td><td><input type="text" name="f2"  value="<?php echo $a[2] ?>"  > </td></tr>
	<tr><td><font color="#000066">GROUP:</font></td><td><input type="text" name="f3"   value="<?php echo $a[3] ?>" > </td></tr>
	<tr><td><font color="#000066">TRANSACTION TYPE:</font></td><td><input type="text" name="f4"  value="<?php echo $a[4] ?>"  > </td></tr>
	<tr><td><font color="#000066">OPENING BALANCE:</font></td><td><input type="text" name="f5"  value="<?php echo $a[5] ?>"  > </td></tr>
	<tr><td><font color="#000066">PLACE:</font></td><td><input type="text" name="f6" value="<?php echo $a[6] ?>"   > </td></tr>
	<tr><td><font color="#000066">REGISTER OFFICE ADDRESS:</font></td><td><textarea rows="5" cols="22" name="f7"  value="<?php echo $a[7] ?>"  > </textarea></td></tr>
	<tr><td><font color="#000066">PINCODE:</font></td><td><input type="text" name="f8"   value="<?php echo $a[8] ?>" > </td></tr>
	<tr><td><font color="#000066">COUNTRY:</font></td><td><input type="text" name="f9"  value="<?php echo $a[9] ?>"  > </td></tr>
	<tr><td><font color="#000066">STATE:</font></td><td><input type="text" name="f10"  value="<?php echo $a[10] ?>"  > </td></tr>
	<tr><td><font color="#000066">DISTRICT:</font></td><td><input type="text" name="f11"  value="<?php echo $a[11] ?>"  > </td></tr>
	 
	</table> </div>
	 
    <div id="content-wrap"> <table>
	
	<tr><td><font color="#000066">PHONE NO:</font></td><td><input type="text" name="f12"  value="<?php echo $a[12] ?>"  > </td></tr>
	<tr><td><font color="#000066">FAX NO:</font></td><td><input type="text" name="f13"  value="<?php echo $a[13] ?>"  > </td></tr>
	<tr><td><font color="#000066">EMAIL ID:</font></td><td><input type="text" name="f14"   value="<?php echo $a[14] ?>" > </td></tr>
	<tr><td><font color="#000066">TIN NO:</font></td><td><input type="text" name="f15" value="<?php echo $a[15] ?>"   > </td></tr>
	
	<tr>
	 <td><font color="#000066">BRANCH OFFICE ADDRESS:</font></td><td><textarea rows="5" cols="22" name="f16"  value="<?php echo $a[16] ?>"  > </textarea> </td></tr>
	<tr><td><font color="#000066">RC NO:</font></td><td><input type="text" name="f17"  value="<?php echo $a[17] ?>"  > </td></tr>
	<tr><td><font color="#000066">CST NO:</font></td><td><input type="text" name="f18" value="<?php echo $a[18] ?>"   > </td></tr>
	<tr><td><font color="#000066">TOT NO:</font></td><td><input type="text" name="f19"  value="<?php echo $a[19] ?>"  > </td></tr>
	<tr><td><font color="#000066">PAN NO:</font></td><td><input type="text" name="f20"  value="<?php echo $a[20] ?>"  > </td></tr>
	<tr><td><font color="#000066">QTY FIGURES:</font></td><td><input type="text" name="f21"  value="<?php echo $a[21] ?>"  > </td></tr>
	 <tr><td></td></tr>
	</table>  
	

	 <br>	<br>	<br>
	  </div>
  <br>	<br>	<br>
	   
	  <div align="center"><input type="submit" name="submit" value="SAVE" class="submit"></div> 
	  	</form>
		 
	  <br>	<br> 
	
	  </div>
  
		  </div>
	
 <style>
 .small
 {
 width:178px;
 }
 a
 {text-decoration:none;
 }
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
input,select,option{
padding:5px 2px 5px 2px;
}
.submit
{
width:99px;
height:29px;
color:#000000;
font-size:19px;
background:#FF6699;
text-align:center;
 
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
color:red;text-align:center;
   
}
td
{
color:purple;text-align:center;

}
table
{

   border-collapse: collapse;
 
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


 
 include 'db.php';
  
 
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 $q=mysql_query("INSERT INTO `storessupplier`(`id`, `accountname`, `accountalias`, `group`, `transactiontype`, `openingbalance`, `place`, `registerofficeaddress`, `pincode`, `country`, `state`, `district`, `phoneno`, `faxno`, `emailid`, `tinno`, `branchofficeaddress`, `rcno`, `cstno`, `totno`, `panno`, `qtyfigures`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$dt')");
 
  
  
if($q)
echo "<script>alert('Data Inserted');window.location='supplier.php';</script>";
 
 

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
