<?php
session_start();
if($_SESSION['user'])
{
?><!DOCTYPE HTML>
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
  <h1 align="center">VERITY MASTER</h1> <hr>
    <div  id="sidebar"> 
	 <form  action="veriety.php" method="post" enctype="multipart/form-data">
    
          <table>
	  <tr><td> <font  color="#000066">ITEM NAME:</td><td><input type="text" name="f1"  > </td></tr>
	<tr><td> <font color="#000066">ITEM CODE:</td><td><input type="text" name="f2"  > </td></tr>
	    
       
	   </table> </div>
	 
    <div id="content-wrap"> <table> 
	<tr><td> <font color="#000066">VERITY :</td><td><input type="text" name="f3"  > </td></tr>
	<tr><td> <font color="#000066">VERITY CODE:</td><td><input type="text" name="f4"  > </td></tr>
	<tr><td> <font color="#000066">SL NO:</td><td><input type="text" name="f5"  > </td></tr>

	 </table>  
	

	 <br>	<br>	<br>
	  </div>
	  <center><P align="right">
      <input type="submit" name="submit" value="SAVE" class="submit">
	 <br>	<br>	<br>
	
	  	</form>
		 
		  
   <?php 
$num_rec_per_page=10;
   include 'db.php';
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }
$start_from = ($page-1) * $num_rec_per_page; 
$sql = "SELECT * FROM salesverity LIMIT $start_from, $num_rec_per_page"; 
$rs_result = mysql_query ($sql); //run the query
?> 
<table border="1"   >
<tr>
<th>ACTION</td>

<th>ITEM NAME</td>
    <th>ITEM CODE</td>
    <th>VERITY</td>
    <th>VERITY CODE</td>
	<th>SL NO</td>
	
</tr>
<?php 
while ($a = mysql_fetch_assoc($rs_result)) 
{ 
 
   
			  echo "<tr> <td><a href='verityeedit.php?id=$a[id]'><img src=edit.PNG>&nbsp;&nbsp;&nbsp;&nbsp;<a href='veritydelete.php?id=$a[id]'><img src=delete.PNG> <td>$a[itemname]<td>$a[itemcode]<td>$a[verity]<td>$a[veritycode]<td>$a[slno] ";
			  
 
 }
?> 
</tr>
</table> 
<?php 
$sql = "SELECT * FROM salesverity"; 
$rs_result = mysql_query($sql); //run the query
$total_records = mysql_num_rows($rs_result);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); 
echo "<font color=red>";
echo "<a href='veriety.php?page=1'>".'<font color=#211452>'.'|<'."</a> "; // Goto 1st page  
echo "</font>";
for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a href='veriety.php?page=".$i."'>".'<font color=#211452 size=+2>'.$i.'</font>'."</a> "; 
}
echo "<a href='veriety.php?page=$total_pages'>".'<font color=#211452>'.'>|'."</a> "; // Goto last page
?>

 <br>	<br>	
 	   </div>
  
		 
	  <br>	<br>	
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
td,tr,th
{margin:15px; padding:6px;
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
$a5=$_POST['f5'];  
 
 include 'db.php';
 
 
 
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 $q=mysql_query("INSERT INTO `salesverity`(`id`, `itemname`, `itemcode`, `verity`, `veritycode`, `slno`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$dt')");
  
if($q)
echo "<script> window.location='veriety.php';</script>";
 
 

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
