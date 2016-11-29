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
  <h1 align="center">EXPENSE MASTER</h1> <hr>
    <div  id="sidebar"> 
	<center>
	 <form action="expensemaster.php" method="post" enctype="multipart/form-data">
	<table    >
	
	<tr><td><font color="#000066">MAIN ITEM:</font></td><td><select name="f1" class="small">
	                                                          <option>PURCHASE</option>
															   </select> </td></tr>
	<tr><td><font color="#000066">TARNSACTION TYPE:</font></td><td><select name="f2" class="small">
	                                                          <option>PF</option>
															  <option>FRIEGHT</option>
															  <option>COURIER</option>
															  <option>AED</option>
															  <option>BED</option>
															  <option>CESS</option>
															  <option>VAT</option>
															  <option>CST</option>
															  <option>EPCG</option>
															  <option>OTHERS</option>
															  <option>TDS</option>
															  <option>AMC</option>
															  
															  </select> </td></tr>
	
	<tr>
	<td><font color="#000066">PERCENTAGE:</font></td><td><input type="text"   class="responsive-table" name="f3"> </td></tr>
	<tr><td><font color="#000066">ACCOUNT  NAME:</font></td><td><input type="text" name="f4"   >  </td></tr>
  <TR><TD rowspan="2"><input type="submit" name="submit" value="SAVE" class="submit"></TD></TR>
  
  
	</table> </div>
	  
	 <br>	<br>	<br>
	  </div>
 
	    
	  	</form>
		 
	  <br>	<br>	
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
 
 
 $q=mysql_query("INSERT INTO `expensemaster`(`id`, `mainitem`, `transactiontype`, `percentage`, `accountname`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$dt')");
  
if($q)
echo "<script>alert('Data Inserted');window.location='expensemaster.php';</script>";
 
 

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
