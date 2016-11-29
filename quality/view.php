<?php
session_start();
if($_SESSION['user'])
{
?>
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
 <h1 align="center">QUALITY REPORT</h1>
    <div  id="sidebar1"> 
   
</div>
  
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
width:99px;
height:29px;
color:#000000;
font-size:19px;
 
}
td,tr
{margin:15px; padding:2px;
}
table
{
margin:37px;
}
  
 
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
a
{text-decoration:none;
}
 </style>
  
 </div> </div>   
 
 <?php
  

  echo "<CENTER><caption><font color=blue size=+4>Jyotirmaye Textiles</font></caption></center>";
	 echo "<table bgcolor=white   align=center   width=1050px border=2>"; 
			  echo "<tr>";
			 echo " <th>ACTION</th>";
			  
			 echo " <th>DATE</th>";
			  echo "<th>COUNT</th>";
			  echo "<th>AVERAGE COUNT</th>";
			  
			  echo "<th>COUNT CV%</th>";
			  echo "<th>STRENGTH</th>";
			  echo "<th>STRENGTH CV%</th>";
			  
			  
			  
			  echo "<th>CSP </th>";
			  echo "<th>U%</th>";
			  echo "<th>CVM</th>";
			  echo "<th>CV(b)</th>";
			   
			  
			   echo "<th>THIN(-50)</th>";
			 echo "<th>THICK(+50)</th>";
			 echo "<th>NEPS(+200)</th>";
		     echo "<th>TOTAL SUM</th>";
			 echo "<th>H</th>";
			 
			  echo "<th>THIN(-30)</th>";
			 echo "<th>THIN(-40)</th>";
			 echo "<th>THICK(+35)</th>";
		     echo "<th>NEPS(+140)</th>";
			 echo "<th>TOTAL SUM</th>";
			  
			 echo " </tr>";
			  
			 include 'db.php';
				 
			 
   $p =mysql_query("select * from quality  ")or die(mysql_error());
  
  while(  $a=mysql_fetch_array($p))
			  {
				 echo "<tr> <td><a href='qualityedit.php?id=$a[id]'><img src=edit.png>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href='qualitydelete.php?id=$a[id]'><img src=delete.png>  <td>$a[1]<td>$a[2]<td>$a[3]<td>$a[4]<td>$a[5]<td>$a[6]<td>$a[7]<td>$a[8]<td>$a[9]<td>$a[10]<td>$a[11]<td>$a[12]<td>$a[13]<td>$a[14]<td>$a[15]<td>$a[16]<td>$a[17]<td>$a[18]<td>$a[19]<td>$a[20]";
			  }
    			     
	?>   
	</tr>
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