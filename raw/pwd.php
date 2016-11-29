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
  
   <?php //session_start();
    include "menu.php"; ?>
      </nav>
    </header>
    <div id="site_content" >
      
 <div  id="main-wrap">
  <h1 align="center">PASSWORD CHANGE </h1> <hr>
    <div  id="sidebar"> 
	 <form action="pwd.php" method="post" enctype="multipart/form-data">
	 <center>
	<table>
	<tr>
	<td><font color="#000000">OLD PASSWORD:</font></td><td><input type="text"   class="responsive-table" name="f1" > </td>
	<td><font color="#000000">NEW PASSWORD:</font></td><td><input type="password" name="f2"   > </td>

	  <td><input type="submit" name="submit" value="UPDATE" class="submit"></td></tr></table>
      	 
	  	</form>
		 
	  <br>	<br>
      
       
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
echo $a1=$_POST['f1'];
echo $a2=$_POST['f2'];
  
 include 'db.php';
    
	echo $user=$_SESSION['user'];
	
	$q=mysql_query("UPDATE `register` SET  `password`='$a2'  WHERE firstname='$user' and moduletype='RAW MATERIALS'")or die(mysql_error());
	
// $q=mysql_query("UPDATE register SET password='$a2' WHERE firstname='$user' and password='$a1' and moduletype='RAW MATERIALS'")or die(mysql_error());
    
if($q==true)
{
echo "<script>alert('PASSWORD CHANGE SUCCESSFULLY');window.location='pwd.php';</script>";
}
else
{
echo "<script>alert('ENTER VALID OLD PASSWORD');window.location='pwd.php';</script>";
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
    header('location:index.php');
}
?>
