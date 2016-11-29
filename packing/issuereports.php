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
        <ul class="sf-menu" id="nav">
          <li class="selected"><a href="index.php">Home</a></li>
         
           <li><a href="#">MASTERS</a>
            <ul>
              <li><a href="itemcreation.php">ITEM CREATION</a></li>
               
              <li><a href="supplier.php">SUPPLIER</a></li>
              <li><a href="mainheads.php">DEPARTMENTS</a></li>
              <li><a href="purchaserequsation.php">INDENT REQUEST </a></li>
            </ul>
          </li>
		  
		  
		  
		   <li><a href="#">TRANSACTIONS</a>
            <ul>
              <li><a href="purchaseentry.php">PURCHASE ENTRY</a></li> 
            
              <li><a href="issues.php">ISSUES</a></li>
               </ul>
          </li>
		  
		  
		  
		   <li><a href="#">REPORTS</a>
            <ul>
              <li><a href="purchasereport.php">PURCHASE REPORTS</a></li>
               
              <li><a href="issuereports.php">ISSUE REPORTS</a></li>
              <li><a href="stockreports.php">STOCK REPORTS</a></li>
              <li><a href="ccreports.php">CONSUMPTION COMPARISION REPORTS</a></li>
            </ul>
          </li>
		   
        </ul>
      </nav>
    </header>
    <div id="site_content" >
      
 <div  id="main-wrap">
  <h1 align="center">ITEM CREATION</h1> <hr>
    <div  id="sidebar"> 
	 <form action="" method="post" enctype="multipart/form-data">
	<table    >
	<tr> 
	<td><font color="#000066" >DATE:</font><input type="date" name="f1" class="date"></div> </td>
	<td><font color="#000066" >ITEM NAME:</font><input type="text" name="f2" class="date"  ></div></td>
	<td><input type="submit" name="submit" value="SHOW" class="submit"></td>
	</tr>
	 
	</table> </div>
	 
    <div id="content-wrap">  

	 <br>	<br>	<br>
	  </div>
 
	   
	  <div align="right"></div> 
	  	</form>
		 
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
color:#0000FF;
   
}
td
{
color:#FF00FF;
}
 </style>
  
 </div> 
	<br>	 
	 
	 <?php
	 session_start();
	 
 if(isset($_POST['submit']))
{
  $s=$_POST['f1'];
 $s1=$_POST['f2'];
 
 include 'db.php';
  
 
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
   
   $r =mysql_query("select * from purchaseentry1 where entrydate='$s' or itemname='$s1'")or die(mysql_error());
  
   
   
  $q =mysql_query("select * from issues where date='$s' or product='$s1'")or die(mysql_error());
  $q11=mysql_num_rows($q);
   echo "<table border=1>";
			 echo " <tr>";
		  
			 echo " <th>DATE</th>";
			 echo " <th>SHIFT</th>";
			 echo " <th>DEPARTMENT</th>";
			  echo "<th>EMPLOYEE NAME</th>";
			  echo "<th>ITEM NAME</th>";
			  echo "<th>QTY</th>";   
			  echo "<th>DATE & TIME</th>";
			  
			 echo " </tr>";
  while($a=mysql_fetch_array($q) and $b=mysql_fetch_array($r))
			  {
			  echo "<tr> <td>$a[1]<td>$a[2]<td>$a[3]<td>$a[4]<td>$a[5]<td>$b[qty]<td>$a[7] ";
			  
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
