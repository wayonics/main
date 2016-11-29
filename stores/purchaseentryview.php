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
  <h1 align="center">PURCHASE ENTRY</h1> <hr>
    <div  id="sidebar"> 
 
	 <?php
  echo "<table border=1>";
			 echo " <tr>"; 
			 
  echo " <th>ACTION</th>";
			 echo " <th>TYPE OF ENTRY</th>";
			 echo " <th>INWARD NO</th>";
			  echo "<th>SUPPLIER NAME</th>";
			  echo "<th>BILL NO</th>";
			  echo "<th>BILL DATE</th>";
			  echo "<th>PURCHASE ORDER NO</th>";
		 
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
  include 'db.php';
    
   $p =mysql_query("select * from purchaseentry")or die(mysql_error());
     
  while(  $a=mysql_fetch_array($p) )
			  {
			  echo "<tr>  <td><a href='purchaseentryedit.php?id=$a[id]'>EDIT&nbsp;&nbsp;&nbsp;&nbsp;<a href='purchaseentrydelete.php?id=$a[id]'>DELETE  <td>$a[2]<td>$a[3]<td>$a[4]<td>$a[5]<td>$a[6]<td>$a[7] <td>$a[receiptno]<td>$a[itemname]<td>$a[itemcode]<td>$a[qty]<td>$a[rate]<td>$a[amount]<td>$a[finhead]<td>$a[indentreferenceno]<td>$a[datetime]";
			  
			  }
   
   
?>
</tr>
</table>
	  
	 
	 
	 
	   
    <div id="content-wrap">  

	 <br>	<br>	<br>
	  </div>
 
	   
	  <div align="right"></div> 
	 
		 
	  <br>	<br> 
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
float:right;
}
table,th
{
color:#0000FF;text-align:center;
   
}
td
{
color:#FF00FF;text-align:center;
}
 </style>
  
 </div> 
	<br>	 
 
 
	 
	
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
