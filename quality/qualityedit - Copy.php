<!DOCTYPE html>
<html lang="en">
  <head>
  
  
<?php
session_start();
	 
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
     

    <script>
 function sum() {
            var txtFirstNumberValue = document.getElementById('txt1').value;
            var txtSecondNumberValue = document.getElementById('txt2').value;
            var txtThirdNumberValue = document.getElementById('txt3').value;
            var result = eval(txtFirstNumberValue) + eval(txtSecondNumberValue) + 
            eval(txtThirdNumberValue);
            if (!isNaN(result)) {
                document.getElementById('txt4').value = result;
            }
        }</script>  
        <script>
 function sum1() {
            var txtFirstNumberValue = document.getElementById('txt5').value;
            var txtSecondNumberValue = document.getElementById('txt6').value;
            var txtThirdNumberValue = document.getElementById('txt7').value;
            var txtFourthNumberValue = document.getElementById('txt8').value;
            var result = eval(txtFirstNumberValue) + eval(txtSecondNumberValue) + 
            eval(txtThirdNumberValue) + eval(txtFourthNumberValue);
            if (!isNaN(result)) {
                document.getElementById('txt9').value = result;
            }
        }</script>  
</head>

<body>
  
         <?php include 'menu.php'; ?>
      </nav>
    </header>
    <div id="site_content" >
      
 <div  id="main-wrap"  >
 <h1 align="center">QUALITY ENTRY</h1>
    <div  id="sidebar1"> 
  
   <?php 
	  echo  $id=$_GET['id'];
	  $_SESSION['id1']=$id;
	   include 'db.php'; 
	   
	  $q1=mysql_query(" SELECT * FROM `quality` WHERE  id='$id'")or die(mysql_error());
	  $a=mysql_fetch_array($q1);
	    
	   ?>
 
    <center>
<form action="qualityedit1.php" method="post">
     <table  >
  <tr><td><font color="#000066">Date</font></td><td><input  type="date" name="f1" value="<?php echo $a[1] ?>"> </td> 

  <td><font color="#000066">Count</font></td><td><input type="text" name="f2"  value="<?php echo $a[2] ?>" > </td> 

  <td><font color="#000066">Count CV%</font></td><td><input type="text" name="f3"  value="<?php echo $a[3] ?>" > </td> </tr>
  
 <tr><td><font color="#000066">Strength</font></td><td><input type="text" name="f4"  value="<?php echo $a[4] ?>" > </td> 
  
 <td><font color="#000066">Strength CV%</font></td><td><input type="text" name="f5"  value="<?php echo $a[5] ?>" > </td>
  
  <td><font color="#000066">CSP</font></td><td><input type="text" name="f6"  value="<?php echo $a[6] ?>" > </td> </tr>
  
   <tr><td><font color="#000066">UT5 Results</font></td><td><input type="text" name="f8" value="<?php echo $a[7] ?>"  > </td> 
  <td><font color="#000066">U%</font></td><td><input type="text" name="f9"  value="<?php echo $a[8] ?>" > </td> 
  
  <td><font color="#000066">CVM</font></td><td><input type="text" name="f10"  value="<?php echo $a[9] ?>" > </td>  
  
  <tr><td><font color="#000066">CV(b)</font></td><td><input type="text" name="f11"  value="<?php echo $a[10] ?>" > </td> 
   <td><font color="#000066">H</font></td><td><input type="text" name="f16"  value="<?php echo $a['H'] ?>" > </td></tr></table>
  
  <br><br>
  <table>
  <tr>
    <td><font color="#000066">Thin(-50) </font></td><td><input type="text" name="f12"  id="txt1" onKeyUp="sum();" value="<?php echo $a[11] ?>"> </td> 
  
  <td><font color="#000066">Thick(+50)</font></td><td><input type="text" name="f13"  id="txt2"  onkeyup="sum();" value="<?php echo $a[12] ?>"> </td> 
  
  <td><font color="#000066">Neps(+200)</font></td><td><input type="text" name="f14"  id="txt3" onKeyUp="sum();" value="<?php echo $a[13] ?>" > </td> </tr></table>
  
 <font color="#000066"><b> Total 1 </b></font></td><td><input  type="text"    name="f15"  id="txt4" value="<?php echo $a[14] ?>" readonly>  
  
  
  <br>  <br>  <br>
  
 <table>
  
 <tr> <td><font color="#000066">Thin(-30)</font></td><td><input type="text" name="f17" id="txt5" onKeyUp="sum1();" value="<?php echo $a[16] ?>"> </td> 
  
   <td><font color="#000066">Thin(-40)</font></td><td><input type="text" name="f18"  id="txt6" onKeyUp="sum1();"value="<?php echo $a[17] ?>"> </td> 
  
   <td><font color="#000066">Thick(+35)</font></td><td><input type="text" name="f19" id="txt7" onKeyUp="sum1(); "value="<?php echo $a[18] ?>"> </td> 
  
   <td><font color="#000066">Neps(+140)</font></td><td><input type="text" name="f20" id="txt8" onKeyUp="sum1();" value="<?php echo $a[19] ?>"> </td> </tr>
  
  <tr> <td><font color="#000066"><b> Total 2 </b></font></td><td><input type="text" name="f21"  id="txt9" readonly value="<?php echo $a[20] ?>"> </td></tr>
  
    <tr><td></td></tr>
  </table> 

  <br>
<div align="center"><input type="submit" name="submit" value="UPDATE" class="submit"></div> </form>
  <?php
 if(isset($_POST['submit']))
{
$a1=$_POST['f1'];
$a2=$_POST['f2'];
$a3=$_POST['f3'];
$a4=$_POST['f4'];
$a5=$_POST['f5'];
$a6=$_POST['f6'];
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
 
$q=mysql_query("insert into quality values ('','$a1','$a2','$a3','$a4','$a5','$a6','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21')")or die(mysql_error());
if($q)
echo "<script>alert('data inserted');window.location='quality.php';</script>";


}
?> 
		 
 
</div>
  
 <style>
 .s
 {
 width:76%;
 }
 #main-wrap {
    /* overflow to handle inner floating block */
    overflow: hidden;
	background:#FFFFFF;
	 
   
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
 
 </style>
 </div> 
 	 
	  

	   
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
