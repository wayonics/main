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
  <h1 align="center">stock reports</h1>
  
  <form action="stockreports.php" method="post" enctype="multipart/form-data"> 
	 <font color="#000066" >ITEM NAME:</font><input list="browsers" name="f1">
  <datalist id="browsers">
 
  
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `purchaseentry1`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option value=$a[itemname]> $a[itemname]</option>";
	  }
	    
	   ?>
		  
  </datalist>
  	 <font color="#000066" >DEPARTMENT</font><input list="browsers1" name="f2">
  <datalist id="browsers1">
  
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `purchaseentry1`");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option value=$a[finhead]> $a[finhead]</option>";
	  }
	    
	   ?>
    </datalist>
  
	 <input type="submit" name="submit" value="SHOW" class="submit">
	 
	   
    <div id="content-wrap">  

	 <br>	<br>	<br>
	  </div>
 
	   
	  <div align="right"></div> 
	  	</form>
  
   
   <br><br>
	 <center>
    <div  id="sidebar"> 
	
	
	 <?php 
	 if(isset($_POST['submit']))
	 {
	 
	  $a1=$_POST['f1'];
 $a2=$_POST['f2'];
 include 'db.php';
   
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a"); 
   echo "<center>"; 
include 'db.php';
       $query_string = "select * from purchaseentry1 where itemname='$a1' or  finhead='$a2'"; 
       $query = mysql_query($query_string); 
       $body = ""; 
       $display =  "<caption><b align=center class=s><font color=red>	
Jyotirmaye Textiles Pvt. Ltd.</font></b></caption><br><caption><b align=center class=s><font color=puple>	
stock report on:$dt</font></b></caption><table  border = \"1\"  bgcolor = \"FFFFCC\" cellspacing= \"15\" cellpadding = \"7\">";
       echo $display;
       $body .= $display; 
	     
        $display  =  "<thead style =\" font-weight:bold; color:green; \"><tr> <td>ITEM NAME </td> <td>ITEM CODE</td> <td>QTY</td><td> RATE </td>   <td>AMOUNT</td> <td>DEPARTMENT</td> <td>INDENT REFERENCE NO</td>   </tr></thead>";
        echo $display;
       $body .= $display; 
        while($result = mysql_fetch_array($query))
              {
               $display = "<tr>"; 
               $display .=  "<td>" .$result['itemname']  .  "</td>";
			   $display .=  "<td>" .$result['itemcode']  .  "</td>";
			   $display .=  "<td>" .$result['qty']  .  "</td>"; 
               $display .=  "<td>" .$result['rate']  .  "</td>";
               $display .=  "<td>" .$result['amount']  .  "</td>";
               $display .=  "<td>" .$result['finhead']  .   "</td>";
               $display .=  "<td>" .$result['indentreferenceno']  .  "</td>";
               $display .=  "</tr>";
	       echo $display;
               $body .= $display;      
              } 
      $display =  "</table>";
      echo $display;
      $body .= $display;
      $body = htmlspecialchars($body);
    
  }
  else
   {  
 echo "<center>"; 
include 'db.php';

 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a"); 
       $query_string = "select * from purchaseentry1"; 
       $query = mysql_query($query_string); 
       $body = ""; 
       $display =  "<caption><b align=center class=s><font color=red>	
Jyotirmaye Textiles Pvt. Ltd.</font></b></caption><br><caption><b align=center class=s><font color=puple>	
stock report on:$dt</font></b></caption><table  border = \"1\"  bgcolor = \"FFFFCC\" cellspacing= \"15\" cellpadding = \"7\">";
       echo $display;
       $body .= $display; 
        $display  =  "<thead style =\" font-weight:bold; color:red; \"><tr> <td>ITEM NAME </td> <td>ITEM CODE</td> <td>QTY</td><td> RATE </td>   <td>AMOUNT</td> <td>DEPARTMENT</td> <td>INDENT REFERENCE NO</td>   </tr></thead>";
        echo $display;
       $body .= $display; 
        while($result = mysql_fetch_array($query))
              {
               $display = "<tr >"; 
               $display .=  "<td>" .$result['itemname']  .  "</td>";
			   $display .=  "<td>" .$result['itemcode']  .  "</td>";
			   $display .=  "<td>" .$result['qty']  .  "</td>"; 
               $display .=  "<td>" .$result['rate']  .  "</td>";
               $display .=  "<td>" .$result['amount']  .  "</td>";
               $display .=  "<td>" .$result['finhead']  .   "</td>";
               $display .=  "<td>" .$result['indentreferenceno']  .  "</td>";
               $display .=  "</tr>";
	       echo $display;
               $body .= $display;      
              } 
      $display =  "</table>";
      echo $display;
      $body .= $display;
      $body = htmlspecialchars($body);
      }
      ?> 
  
</tr>
</table>

    <form action = "exp_to_excel.php" method = "post">
       <input type = "hidden" name = "body" value = "<?php echo $body ; ?>">
       <input type = "submit" name = "submit" Value = "Export to excel">
    </form>   
	  <br>	<br>	
</div>
  
 <style>
 .s
 {margin-left:199px;
 }
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
margin-left:177px;
  width: 100%; border-collapse: collapse;
 
}
.p{
margin-left:199px;
}
 </style>
  
 </div> 
	<br>	 
	 
	 
	
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
