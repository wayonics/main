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
  <h1 align="center">DISPATCH</h1> <hr>
    <div  id="sidebar"> 
	 <form action="dispatch.php" method="post" enctype="multipart/form-data">
	<table    >
	<tr><td><font color="#000066">DATE</td> 
  
	<td><font color="#000066">DISPATCH(kg) </td>
	<td><font color="#000066">PARTY NAME</td>
	<td><font color="#000066">NOTE</td>
	 
	 </tr>
	
	<tr>
	<td><input type="date" name="f1" ></td>
  
			<td>  <input type="text" name="f2"   ></td>
			<td>  <input type="text" name="f3"   ></td>
			<td> <textarea rows="2" cols="24" name="f4"></textarea></td>
			
			  </tr> 
	
	
	</table>
	 

	 
	 <center>
	  <input type="submit" name="submit" value="SAVE" class="submit">  
	  
	 	</form>
		
	 
	  <br>	<br>	<br>
	   
	   
	  
	  
	  </div>
  
</div>
  
 <style>
 .small
 {
 width:80px;
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
$a1=$_POST['f1'];
$a2=$_POST['f2'];
$a3=$_POST['f3'];
$a4=$_POST['f4'];
 
 include 'db.php';
  
 
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 
 $q=mysql_query("INSERT INTO `wastedispatch`(`id`, `date`, `dispatch`, `partyname`, `note`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$dt')");
   
if($q)
$r=mysql_query("select * from wastecotton where date='$a1'");
$r1=mysql_num_rows($r);
$r2=mysql_fetch_array($r);
$d1=$r2['date'];
$qty1=$r2['qty'];



$s=mysql_query("select * from wastedispatch where date='$a1'");
$s1=mysql_num_rows($s);
$s2=mysql_fetch_array($s);
$d2=$s2['date'];
$qty2=$s2['dispatch'];


if($d1==$d2)
{
$qty=$qty1-$qty2;

$up=mysql_query("UPDATE `wastecotton` SET  `qty`='$qty'  WHERE date='$d2'");


echo "<script>alert('Data Inserted');window.location='dispatch.php';</script>";
 
}
else
{
echo "not match";
}
 
 
 
 

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
