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
      
 <div  id="main-wrap" align="center"  >
 <h1 align="center	">ISSUES</h1>
    <div  id="sidebar"> 
	 <form action="issues.php" method="post" enctype="multipart/form-data">
	 
	<table>
  
	<tr><td><font color="#000066"> DATE:</font></td><td><input type="date" name="f1"   > </td> </tr>
	 <tr><td><font color="#000066">SHIFT:</font></td><td><select name="f2"  >
	 <option>select--------------</option>
	 <option>Day Shift</option>
	 <option>Evening Shift</option>
	 <option>Night Shift</option> 
	 </select>    </td> </tr>
	 <tr><td><font color="#000066">DEPARTMENT:</font></td><td><input type="text" name="f3"   > </td> </tr>
	 <tr><td><font color="#000066">EMPLOYEE NAME:</font></td><td><input type="text" name="f4"   > </td></tr>
	<tr><td><font color="#000066">PRODUCT/MATERIAL:</font></td><td><input type="text" name="f5"   > </td></tr>
	<tr><td><font color="#000066">QTY:</font></td><td><input type="text" name="f6"   > </td></tr>
	   
	</table> 
   
	 
	<BR><BR>
   
	   
	  <div align="center"><input type="submit" name="submit" value="ISSUE" class="submit"> 
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
	 
    box-shadow: 19px 10px 5px #888888;
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
input,select{
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
 	   	<BR><BR>	<BR><BR>
	 
	 <?php
	 session_start();
 if(isset($_POST['submit']))
{
$a1=$_POST['f1'];
$a2=$_POST['f2'];
$a3=$_POST['f3'];
$a4=$_POST['f4'];
$a5=$_POST['f5'];
$_SESSION['itemname']=$a5;

$a6=$_POST['f6'];
 

 include 'db.php'; 
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 $q=mysql_query("INSERT INTO `issues`(`id`, `date`, `shift`, `department`, `employeename`, `product`, `qty`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$dt')");
 
 
 $s=mysql_query("select * FROM purchaseentry");
 $s1=mysql_fetch_array($s); 
  $qty=$s1['qty'];
  
 $qty1=$qty-$a6;
 mysql_query("update purchaseentry1 set qty='$qty1' where itemname='$a5'");
  
    
if($q)
echo "<script>alert('Data Inserted');window.location='issues.php';</script>";
  
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
