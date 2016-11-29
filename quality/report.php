<?php
session_start();
if($_SESSION['user'])
{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  
   

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
   <form action="report.php" method="post" enctype="multipart/form-data">
    
  
			  <font color="#000066"> DATE(from):<input type="date" name="f1"  class="r"/>  
			  <font color="#000066"> DATE(To):<input type="date" name="f2"  class="r"/>  
			  
       <font color="#000066">COUNT:<input list="browsers" name="f3">
  <datalist id="browsers">
 
  
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `quality`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option value=$a[Count]> $a[Count]</option>";
	  }
	    
	   ?>
		 
   
  </datalist>
			    
       <input type="submit"  name="submit" value="SEARCH"  class="submit">	
	   
		<br><br>

   
   </form>
		 
 
</div>
  
 <style>
 .s
 {
 width:76%;
 margin-left:399px;
 font-size:24px
 }.s1
 {
 width:76%;
 margin-left:359px;
 font-size:18px;
 color:#FF00FF
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
  
 </div> </div>  
 
 
 <?php
 if(isset($_POST['submit']))
{
 $s=$_POST['f1'];
$s1=$_POST['f2'];
$s2=$_POST['f3'];

 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a"); 

include 'db.php';

	  
	 
     $query_string = "SELECT * FROM `quality` WHERE Date  BETWEEN '$s' AND '$s'"; 
	   $query = mysql_query($query_string)or die(mysql_error()); 
     $r=mysql_num_rows($query);
     
	 if($r==true)
	 {
	 
	   $body = ""; 
        $display =  "<caption><b align=center class=s><font color=puple>	
 Jyotirmaye Textiles Pvt. Ltd.</font></b><br><b align=center class=s1><font color=puple>	
Qulaity Report  on $dt</font></b></caption><table  border = \"1\"  bgcolor = \"FFFFCC\" cellspacing= \"0\" cellpadding = \"0\">";
   
       echo $display;
       $body .= $display; 
	     
        $display  =  "<thead style =\" font-weight:bold; color:green; \"><tr> <td>DATE</td> <td>COUNT</td><td>AVREAGE COUNT</td> <td>COUNT CV%</td><td> STRENGTH</td> <td> STRENGTH CV%</td>   <td>CSP</td>  <td>U%</td> <td>CVM</td> <td>CV(b)</td>   <td>THIN(-50)</td> <td>THICK(+50)</td> <td>NEPS(+200)</td> <td>TOTAL SUM</td> <td>H</td> <td>THIN(-30)</td> <td>THIN(-40)</td> <td>THICK(+35</td> <td>NEPS(+140</td> <td>TOTAL SUM</td>    </tr></thead>";
        echo $display;
       $body .= $display; 
        while($result = mysql_fetch_array($query))
              {
               $display = "<tr>"; 
               $display .=  "<td>" .$result[1]  .  "</td>";
			   $display .=  "<td>" .$result[2]  .  "</td>";
			   $display .=  "<td>" .$result[3]  .  "</td>"; 
               $display .=  "<td>" .$result[4]  .  "</td>";
			   $display .=  "<td>" .$result[5]  .  "</td>";
			   
               $display .=  "<td>" .$result[6]  .  "</td>"; 
			   $display .=  "<td>" .$result[7]  .  "</td>"; 
			   $display .=  "<td>" .$result[8]  .  "</td>"; 
			   $display .=  "<td>" .$result[9]  .  "</td>"; 
			   $display .=  "<td>" .$result[10]  .  "</td>"; 
			   $display .=  "<td>" .$result[11]  .  "</td>"; 
			   $display .=  "<td>" .$result[12]  .  "</td>"; 
			   $display .=  "<td>" .$result[13]  .  "</td>"; 
			   $display .=  "<td>" .$result[14]  .  "</td>"; 
			   $display .=  "<td>" .$result[15]  .  "</td>"; 
			   $display .=  "<td>" .$result[16]  .  "</td>"; 
			   $display .=  "<td>" .$result[17]  .  "</td>"; 
			   $display .=  "<td>" .$result[18]  .  "</td>"; 
			   $display .=  "<td>" .$result[19]  .  "</td>"; 
			   $display .=  "<td>" .$result[20]  .  "</td>"; 
			   
			 
			   
			     $display .=  "</tr>";
	       echo $display;
               $body .= $display;      
              } 
      $display =  "</table>";
      echo $display;
      $body .= $display;
      $body = htmlspecialchars($body);
	 }
	 
	 $query_string = "SELECT * FROM `quality` WHERE  Count='$s2'"; 
	   $query = mysql_query($query_string)or die(mysql_error()); 
     $r1=mysql_num_rows($query);
     
	  if($r1==true)
	 {
 
	 $body = ""; 
        $display =  "<caption><b align=center class=s><font color=puple>	
 Jyotirmaye Textiles Pvt. Ltd.</font></b><br><b align=center class=s1><font color=puple>	
Qulaity Report  on $dt</font></b></caption><table  border = \"1\"  bgcolor = \"FFFFCC\" cellspacing= \"0\" cellpadding = \"0\">";
       echo $display;
       $body .= $display; 
	     
        $display  =  "<thead style =\" font-weight:bold; color:green; \"><tr> <td>DATE</td> <td>COUNT</td><td>AVREAGE COUNT</td> <td>COUNT CV%</td><td> STRENGTH</td> <td> STRENGTH CV%</td>   <td>CSP</td>  <td>U%</td> <td>CVM</td> <td>CV(b)</td>   <td>THIN(-50)</td> <td>THICK(+50)</td> <td>NEPS(+200)</td> <td>TOTAL SUM</td> <td>H</td> <td>THIN(-30)</td> <td>THIN(-40)</td> <td>THICK(+35</td> <td>NEPS(+140</td> <td>TOTAL SUM</td>    </tr></thead>";
        echo $display;
       $body .= $display; 
        while($result = mysql_fetch_array($query))
              {
               $display = "<tr>"; 
                $display .=  "<td>" .$result[1]  .  "</td>";
			   $display .=  "<td>" .$result[2]  .  "</td>";
			   $display .=  "<td>" .$result[3]  .  "</td>"; 
               $display .=  "<td>" .$result[4]  .  "</td>";
			   $display .=  "<td>" .$result[5]  .  "</td>";
			   
               $display .=  "<td>" .$result[6]  .  "</td>"; 
			   $display .=  "<td>" .$result[7]  .  "</td>"; 
			   $display .=  "<td>" .$result[8]  .  "</td>"; 
			   $display .=  "<td>" .$result[9]  .  "</td>"; 
			   $display .=  "<td>" .$result[10]  .  "</td>"; 
			   $display .=  "<td>" .$result[11]  .  "</td>"; 
			   $display .=  "<td>" .$result[12]  .  "</td>"; 
			   $display .=  "<td>" .$result[13]  .  "</td>"; 
			   $display .=  "<td>" .$result[14]  .  "</td>"; 
			   $display .=  "<td>" .$result[15]  .  "</td>"; 
			   $display .=  "<td>" .$result[16]  .  "</td>"; 
			   $display .=  "<td>" .$result[17]  .  "</td>"; 
			   $display .=  "<td>" .$result[18]  .  "</td>"; 
			   $display .=  "<td>" .$result[19]  .  "</td>"; 
			   $display .=  "<td>" .$result[20]  .  "</td>"; 
		 
			 
			   
               $display .=  "</tr>";
	       echo $display;
               $body .= $display;      
              } 
      $display =  "</table>";
      echo $display;
      $body .= $display;
      $body = htmlspecialchars($body);
	 
	 }
}
?>
   
   
</tr>
</table>

    <form action = "exp_to_excel.php" method = "post">
       <input type = "hidden" name = "body" value = "<?php echo $body ; ?>">
       <input type = "submit" name = "submit" Value = "Export to excel">
    </form>   
	  <br>	<br>	

	 
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