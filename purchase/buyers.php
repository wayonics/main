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
  <h1 align="center">BUYERS ENTRY</h1> <hr>
    <div  id="sidebar"> 
	 <form action="buyers.php" method="post" enctype="multipart/form-data">
    
          <table>
	 <tr><td> <font  color="#000066">NAME OF ACCOUNT:</td><td><input type="text" name="f1"  > </td></tr>
	<tr><td> <font color="#000066">ACCOUNT ALIAS:</td><td><input type="text" name="f2"  > </td></tr>
	<tr><td> <font color="#000066">GROUP:</td><td><input type="text" name="f3"  > </td></tr>
	<tr><td> <font color="#000066">TRANSACTION TYPE:</td><td><input type="text" name="f4"  > </td></tr>
	<tr><td> <font color="#000066">OPENING BALANCE:</td><td><input type="text" name="f5"  > </td></tr>
	<tr><td> <font color="#000066">PLACE:</td><td><input type="text" name="f6"  > </td></tr>
	<tr><td> <font color="#000066">REGISTER OFFICE ADDRESS:</td><td><textarea rows="4" cols="44" name="f7"></textarea> </td></tr>
	<tr><td> <font color="#000066">PINCODE:</td><td><input type="text" name="f8"  > </td></tr>
	<tr><td> <font color="#000066"> COUNTRY:</td><td><input type="text" name="f9"  > </td></tr>
	<tr><td> <font color="#000066">STATE:</td><td><input type="text" name="f10"  > </td></tr> 
	 <tr><td> <font color="#000066">DISTRICT:</td><td><input type="text" name="f11"  > </td></tr>
	   
	   </table> </div>
	 
    <div id="content-wrap"> <table> 
                	<tr><td>  <font color="#000066">PHONE NO'S:</td><td><input type="text" name="f12"  > </td></tr>
	<tr><td>  <font color="#000066">FAX NO:</td><td><input type="text" name="f13"  > </td></tr>
	<tr><td>  <font color="#000066">EMAIL ID:</td><td><input type="text" name="f14"  ></td></tr>
	<tr><td>  <font color="#000066">TIN NO:</td><td><input type="text" name="f15"  ></td></tr>
	<tr><td>  <font color="#000066">BRANCH OFFICE ADDRESS:</td><td><textarea rows="4" cols="44" name="f16"></textarea></td></tr>
	<tr><td>  <font color="#000066">RC NO:</td><td><input type="text" name="f17"  ></td></tr>
	<tr><td>  <font color="#000066">CST NO:</td><td><input type="text" name="f18"  ></td></tr>
	<tr><td>  <font color="#000066">TOT NO:</td><td><input type="text" name="f19"  ></td></tr>
	<tr><td>  <font color="#000066">PAN NO:</td><td><input type="text" name="f20"  ></td></tr>
	<tr><td>  <font color="#000066">QTY FIGUURE:</td><td><input type="text" name="f21"  ></td></tr>
	 </table>  
	

	 <br>	<br>	<br>
	  </div>
 
	 <center> <input type="submit" name="submit" value="SAVE" class="submit">
	 <br>	<br>	<br>
	 </form>
		
	 
	 
	 <?php
  echo "<table border=1 width=1000px>";
			 echo " <tr>";
		  
			 echo " <th>ACTION</th>";
			 echo " <th>ACCOUNT  NAME</th>";
			 echo " <th>OPENING BALANCE</th>";
			 echo " <th>ADDRESS</th>";
			 echo " <th>PHONE NUMBER</th>";
			 echo " <th>PAN NO</th>";
			 
			   
			 echo " </tr>";
			  
		 
  include 'db.php';
    
   $p =mysql_query("select * from salesbuyers")or die(mysql_error());
     
  while(  $a=mysql_fetch_array($p) )
			  {
			    
 
			  echo "<tr> <td><a href='buyeredit.php?id=$a[id]'><img src=edit.PNG>&nbsp;&nbsp;&nbsp;&nbsp;<a href='buyerdelete.php?id=$a[id]'><img src=delete.PNG> <td>$a[nameofac]<td>$a[openingbalance]<td>$a[regaddress]<td>$a[phoneno]<td>$a[panno] ";
			  
			  }
   
   
?>
</tr>
</table> 	
	  </div>
 
	   
	  <div align="right"></div> 
	  	 
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
 
 
 
 $q=mysql_query("INSERT INTO `salesbuyers`(`id`, `nameofac`, `acalias`, `group`, `transactiontype`, `openingbalance`, `palce`, `regaddress`, `pincode`, `country`, `state`, `district`, `phoneno`, `faxno`, `emailid`, `tinno`, `branchaddress`, `rcno`, `cstno`, `totno`, `panno`, `qty`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$dt')");
 
  
if($q)
echo "<script>alert('Data Inserted');window.location='buyers.php';</script>";
 
 

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
