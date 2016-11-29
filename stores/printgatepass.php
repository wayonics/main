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
 
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text"> 
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><b><a href="#">Jyotirmaye<span class="logo_colour">Textiles Pvt.Ltd</span></a></b></h1>
         
        </div>
      </div>
      
    </header>
    <div id="site_content" >
      
 <div  id="main-wrap"  >
 <h1 align="center">Jyotirmaye<span class="logo_colour">Textiles Pvt.Ltd</h1>
    <div  id="sidebar1"> 
	
	
	 <?php 
	// session_start();
	 	$date=$_SESSION['date'];
	
	$repairs=$_SESSION['repairs']; 
	
	   include 'db.php'; 
	   
	  $q1=mysql_query(" SELECT * FROM `gatepassissue` WHERE  date='$date' and repair='$repairs'");
	  $a=mysql_fetch_array($q1);
	    
	   ?>

  <table>
  
	<tr><td><font color="#000066"> DATE:</font></td><td><input type="date" name="f1" value="<?php echo $a['date']; ?>"  > </td>  
 
	 <td><font color="#000066">MACHINE NAME :</font></td><td><input type="text" name="f2" value="<?php echo $a[ 2]; ?>"   > </td> 
	
	  </tr>
	  </table>
	  
	  <br><br>
	  <table>
	<tr><td><font color="#000066">REPAIRS:</font></td><td><input type="text" name="f4" value="<?php echo $a[3]; ?>"   > </td> 
	 <td><font color="#000066">ASSIGNED CLIENT:</font></td><td><input type="text" name="f5"  value="<?php echo $a[4]; ?>"  > </td> 
	 </tr></table>
	 <br><br>
	 <table>
	<tr><td><font color="#000066">REMARKS:</font></td><td><input type="text" name="f7" value="<?php echo $a[5]; ?>"   > </td></tr>
	
	  
	
	</table> 	 <br><br>	 <br><br>
	<center> <input type="submit" name="submit1" value="PRINT" class="submit" onClick="print()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <FONT color="BLUE" size="+2"><B>STAMP HERE</B></FONT>
	
		 
		 
		 
		 
  <br><br>	 <br><br>
</div>
  
  <script>
  function print()
  {
  window.print();
  </script>
  
 <style>
 .s
 {
 width:76%;
 }
 #main-wrap {
    /* overflow to handle inner floating block */
    overflow: hidden;
	background:#C1FFE0;
	 
    box-shadow: 12px 10px 5px #888888;
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
input{
border-radius:8px;
height:20px;
}
.submit
{
width:199px;
height:29px;
color:#000000;
font-size:19px;
 
}
 </style>
  
 </div> </div> </div> 
 <br><br>
 <?php
 if(isset($_POST['submit']))
{
 $count=$_POST['f1'];
$date=$_POST['f2'];
  echo "<CENTER><caption><font color=blue size=+4>Jyotirmaye Textiles</font></caption></center>";
	 echo "<table bgcolor=white   align=center   width=950px border=2>"; 
			  echo "<tr>";
			 echo " <th>ACTION</th>";
			  
			 echo " <th>DATE</th>";
			  echo "<th>COUNT</th>";
			  echo "<th>COUNT CV%</th>";
			  echo "<th>STRENGTH</th>";
			  echo "<th>CSP </th>";
			 echo " <th>UT5 RESULTS</th>";
			  echo "<th>THIN(-50)</th>";
			 echo "<th>THICK(+50)</th>";
			 echo "<th>NEPS(+200)</th>";
		     echo "<th>TOTAL SUM</th>";
			 
			  echo "<th>THIN(-30)</th>";
			 echo "<th>THIN(-40)</th>";
			 echo "<th>THICK(+35)</th>";
		     echo "<th>NEPS(+140)</th>";
			 echo "<th>TOTAL SUM</th>";
			  
			 echo " </tr>";
			  
			 include 'db.php';
				 
				 $p=mysql_query("select * from quality where Date='$date'")or die(mysql_error());
				   $p1=mysql_num_rows($p);
				   
				   $q=mysql_query("select * from quality where Count='$count'")or die(mysql_error());
				   $q1=mysql_num_rows($q);
				    
				   if($q1==true)
				   {
				    while($a=mysql_fetch_array($q) )
				 {
				 
				 echo "<tr> <td><a href='qualityedit.php?id=$a[id]'>EDIT&nbsp;&nbsp;&nbsp;&nbsp;<a href='qualitydelete.php?id=$a[id]'>DELETE <td>$a[1]<td>$a[2]<td>$a[3]<td>$a[4]<td>$a[6]<td>$a[UT5Results]<td>$a[Thin]<td>$a[Thick]<td>$a[Neps]<td>$a[Total1]<td>$a[Thin1]<td>$a[Thin2]<td>$a[Thick1]<td>$a[Neps1]<td>$a[Total2]";
				 }
				   }
				   
				   
				   else if($p1==true)
				   {
				    while($a=mysql_fetch_array($p) )
				 {
				 
				 echo "<tr><td>$a[1]<td>$a[2]<td>$a[3]<td>$a[4]<td>$a[6]<td>$a[UT5Results]<td>$a[Thin]<td>$a[Thick]<td>$a[Neps]<td>$a[Total1]<td>$a[Thin1]<td>$a[Thin2]<td>$a[Thick1]<td>$a[Neps1]<td>$a[Total2]";}
				   }
				    
            
	}			     
	?>   
   </table>

	 
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
