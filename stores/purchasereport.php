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
  <h1 align="center">PURCHASE REPORTS</h1> <hr>
    <div  id="sidebar"> 
 
	 <form action="" method="post" enctype="multipart/form-data">
 
	 <font color="#000066" >DATE(FROM):</font><input type="date" name="f1" class="date">  
	 <font color="#000066" >DATE(TO):</font><input type="date" name="f2" class="date">  
	
	
 <font color="#000066" >ITEM CODE:</font><input list="browsers" name="f3">
  <datalist id="browsers"> 
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `purchaseentry`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option value=$a[itemcode]> $a[itemcode]</option>";
	  }
	    
	   ?>
		  
  </datalist> 
	 <input type="submit" name="submit" value="SHOW" class="submit">
	 
	   
    <div id="content-wrap">  

	 <br>	<br>	<br>
	  </div>
 
	   
	  <div align="right"></div> 
	  	</form>
		 
	  <br>	<br><p align="right">
  <form action="purchaseexport.php" method="post">
	<input type="submit" name="submit1" value="EXPORT">
	</form></p>	
</div>
  
 <style>
 #main-wrap {
    /* overflow to handle inner floating block */
    overflow: hidden;
	background:#C1FFE0;
	 
    box-shadow: 10px 10px 5px #888888;
}

#sidebar {
    float: left;
    width: 100%;
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
 
}.t
{border:0px;
}
table,th,td
{
color:#0000FF;text-align:center;   border: 1px solid black;
   
}
td
{
color:#FF00FF;text-align:center;
}
table
{
 
  width: 100%; border-collapse: collapse;
 
}
 </style>
  
 </div> 
	<br>	 
 
 
	 <?php
 if(isset($_POST['submit']))
{
  $s=$_POST['f1'];
 $s1=$_POST['f2'];
$s2=$_POST['f3'];
  
 include 'db.php';
  
 
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 
  echo "<table >";
			 echo " <tr>"; 
  echo " <th>DATE</th>";
			 echo " <th>TYPE OF ENTRY</th>";
			 echo " <th>INWARD NO</th>";
			  echo "<th>SUPPLIER NAME</th>";
			  echo "<th>BILL NO</th>";
			  echo "<th>BILL DATE</th>";
			  echo "<th>PURCHASE ORDER NO</th>";
			 echo " <th>PURCHASE ORDER DATE</th>";
			 echo " <th>RECEIPT NO</th>";
			 echo " <th>ITEM NAME</th>";
			 echo " <th>ITEM CODE</th>";
			 echo " <th>QTY</th>";
			 echo " <th>RATE </th>";
			 echo " <th>AMOUNT</th>";
			 echo " <th>FINA HAED</th>";
			 echo " <th>INDENT REFERENCE NO</th>";
			 
		 
			  echo "<th>DATE & TIME</th>";
			  
			 echo " </tr>";
  
   $w=mysql_query("SELECT * FROM `purchaseentry` WHERE entrydate  BETWEEN '$s' AND '$s1'")or die(mysql_error());
   
 $w1=mysql_query("SELECT * FROM `purchaseentry` WHERE entrydate='$s' or entrydate='$s1' ")or die(mysql_error());
   $w2=mysql_num_rows($w1);
   
   $p =mysql_query("select * from purchaseentry where itemcode='$s2'")or die(mysql_error());
  $p1=mysql_num_rows($p); 
  
 
  if($w==true or $w2==true or $p1==true )
  {
  
  while($a=mysql_fetch_array($w) or $a=mysql_fetch_array($w1) or $a=mysql_fetch_array($p) )
			  {
			  echo "<tr> <td>$a[1]<td>$a[2]<td>$a[3]<td>$a[4]<td>$a[5]<td>$a[6]<td>$a[7]<td>$a[8]<td>$a[receiptno]<td>$a[itemname]<td>$a[itemcode]<td>$a[qty]<td>$a[rate]<td>$a[amount]<td>$a[finhead]<td>$a[indentreferenceno]<td>$a[datetime]";
			  
			  }
  
  }
  
  
	 
}
?>
</tr>
</table>
	  
	
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
