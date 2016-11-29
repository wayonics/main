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
 
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text"> 
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><b><a href="#">Jyotirmaye<span class="logo_colour">Textiles Pvt.Ltd</span></a></b></h1>
         
        </div>
      </div>
      <nav>
          <?php include 'menu.php'; ?>
      </nav>
    </header>
    <div id="site_content" >
      
 <div  id="main-wrap"  >
 <h1 align="center">PACKING REPORT</h1>
    <div  id="sidebar1"> 
   <form action="viewpacking1.php" method="post" enctype="multipart/form-data">
    
  
			  <font color="#000066"> DATE(from):<input type="date" name="f1"  class="r"/>  
			  <font color="#000066"> DATE(To):<input type="date" name="f2"  class="r"/>  
			  
       <font color="#000066">UNIT:<input list="browsers" name="f3">
  <datalist id="browsers">
 
  
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `packing`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option value=$a[unit]> $a[unit]</option>";
	  }
	    
	   ?>
		 
   
  </datalist>
			       
			     <font color="#000066">COUNT:<input list="browsers" name="f4">
  <datalist id="browsers">
 
  
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `packing`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option value=$a[count]> $a[count]</option>";
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
table,th
{
color:red;text-align:center;
    border: 1px solid black;
}
td
{
color:purple;text-align:center;
 border: 1px solid black;
}
table
{
margin-left:7px;
  width: 100%; border-collapse: collapse;
 
}
 </style>
  
 </div> </div>  
 
 
 <?php
 if(isset($_POST['submit']))
{
 $s=$_POST['f1'];
$s1=$_POST['f2'];
$s2=$_POST['f3'];
$s3=$_POST['f4'];
 
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a"); 

include 'db.php';
 
   
	 
	 $query_string1 = "SELECT * FROM `packing` WHERE  unit='$s2'"; 
	   $query1 = mysql_query($query_string1)or die(mysql_error()); 
     $r1=mysql_num_rows($query1);
	 
	   	
	 if($r1==true)
	 {  
	   $body = ""; 
        $display =  "<caption><b align=center class=s><font color=puple>	
 Jyotirmaye Textiles Pvt. Ltd.</font></b><br><b align=center class=s1><font color=puple>	
packing Report  on $dt</font></b></caption><table  border = \"1\"  bgcolor = \"FFFFCC\" cellspacing= \"15\" cellpadding = \"7\">";
   
       echo $display;
       $body .= $display; 
	     
        $display  =  "<thead style =\" font-weight:bold; color:green; \"><tr> <td>UNIT</td> <td>COUNT</td> <td>CUSTOMER NAME</td><td> CONES PRODUCTION</td>   <td>CONES STOCK</td> <td>LOT SIZE</td> <td>BAGS STOCK</td> <td>DISPATCH DATE</td> <td>DISPATCHES)</td> <td> SHIFT</td> <td>BAGS PACKED</td> <td>DISPATCHED TO</td>     </tr></thead>";
        echo $display;
       $body .= $display; 
        while($result = mysql_fetch_array($query1))
              {
               $display = "<tr>"; 
			 
               $display .=  "<td>" .$result[1]  .  "</td>";
			   $display .=  "<td>" .$result[2]  .  "</td>";
			   $display .=  "<td>" .$result[3]  .  "</td>"; 
               $display .=  "<td>" .$result[4]  .  "</td>"; 
               $display .=  "<td>" .$result['conesstock']  .   "</td>";
               $display .=  "<td>" .$result['lotsize']  .  "</td>";
			   $display .=  "<td>" .$result['bagsstock']  .  "</td>";
			   $display .=  "<td>" .$result['despdate']  .  "</td>";
			   $display .=  "<td>" .$result['despatches']  .  "</td>";
			   $display .=  "<td>" .$result['shift']  .  "</td>";
			   $display .=  "<td>" .$result['bagspacked']  .  "</td>";
			   $display .=  "<td>" .$result['dispatchedto']  .  "</td>";
		   
               $display .=  "</tr>";
	       echo $display;
               $body .= $display;      
              } 
      $display =  "</table>";
      echo $display;
      $body .= $display;
      $body = htmlspecialchars($body);
	 }
	 
	 
	 
	 $query_string2 = "SELECT * FROM `packing` WHERE  count='$s3'"; 
	   $query2 = mysql_query($query_string2)or die(mysql_error()); 
     $r2=mysql_num_rows($query2);
	 
	 if($r2==true)
	 {  
	   $body = ""; 
        $display =  "<caption><b align=center class=s><font color=puple>	
 Jyotirmaye Textiles Pvt. Ltd.</font></b><br><b align=center class=s1><font color=puple>	
packing Report  on $dt</font></b></caption><table  border = \"1\"  bgcolor = \"FFFFCC\" cellspacing= \"15\" cellpadding = \"7\">";
   
       echo $display;
       $body .= $display; 
	     
        $display  =  "<thead style =\" font-weight:bold; color:green; \"><tr> <td>UNIT</td> <td>COUNT</td> <td>CUSTOMER NAME</td><td> CONES PRODUCTION</td>   <td>CONES STOCK</td> <td>LOT SIZE</td> <td>BAGS STOCK</td> <td>DISPATCH DATE</td> <td>DISPATCHES)</td> <td> SHIFT</td> <td>BAGS PACKED</td> <td>DISPATCHED TO</td>     </tr></thead>";
        echo $display;
       $body .= $display; 
        while($result = mysql_fetch_array($query2))
              {
               $display = "<tr>"; 
			 
               $display .=  "<td>" .$result[1]  .  "</td>";
			   $display .=  "<td>" .$result[2]  .  "</td>";
			   $display .=  "<td>" .$result[3]  .  "</td>"; 
               $display .=  "<td>" .$result[4]  .  "</td>"; 
               $display .=  "<td>" .$result['conesstock']  .   "</td>";
               $display .=  "<td>" .$result['lotsize']  .  "</td>";
			   $display .=  "<td>" .$result['bagsstock']  .  "</td>";
			   $display .=  "<td>" .$result['despdate']  .  "</td>";
			   $display .=  "<td>" .$result['despatches']  .  "</td>";
			   $display .=  "<td>" .$result['shift']  .  "</td>";
			   $display .=  "<td>" .$result['bagspacked']  .  "</td>";
			   $display .=  "<td>" .$result['dispatchedto']  .  "</td>";
		   
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
