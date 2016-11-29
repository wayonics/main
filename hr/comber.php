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
  <h1 align="center">COMBER</h1> <hr>
    <div  id="sidebar"> 
	   
	   <form action="comber.php" method="post" enctype="multipart/form-data">
      <table>
	
			 <tr><td> <font color="#000066">DATE:</td><td><input type="date" name="f1"   > 
			  <tr><td>  <font color="#000066">UNIT TYPE:</td><td><select name="f2"  >
	 <option>select--------------</option>
	 <option>UNIT-1</option>
	 <option>UNIT-2</option>
 
	 </select>  </td></tr>
     
             
	 <tr><td>  <font color="#000066">SHIFT:</td><td><select name="f3"  >
	 <option>select--------------</option>
	 <option>Day Shift</option>
	 <option>Evening Shift</option>
	 <option>Night Shift</option>
	 
 
	 </select>   </td></tr>
	   
     	 
		
	   
	<tr><td>   <font color="#000066">LOT NO:</td><td><input type="text" name="f4"   >  </td></tr>
	<tr><td>  <font color="#000066">MACHINE NO:</td><td> <select name="f5">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `masters` WHERE  module='carding'");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[machineno]</option>";
	  }
	    
	   ?>
		 </select>    </td></tr>                            
		 
		 
		  
	 <tr><td> <font color="#000066"> MACHINE NAME:</td><td><select name="f6">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `masters` WHERE  module='carding'");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[machinename]</option>";
	  }
	    
	   ?>
		 </select>     </td></tr>         
	 
	 <tr><td><font color="#000066">COUNT :</td><td><input type="text" name="f7"   > </td></tr>
	<tr><td>  <font color="#000066">DELIVERY HANK:</td><td><input type="text" name="f8"   > </td></tr>
	<tr><td>  <font color="#000066">SPEED(MPM):</td><td><input type="text" name="f9"  > </td></tr>
	<tr><td>  <font color="#000066">STANDARD HANK:</td><td><input type="text" name="f10"   > </td></tr>
	<tr><td>  <font color="#000066">STA EFFICIENNCY:</td><td><input type="text" name="f11"   > </td></tr>
	<tr><td>  <font color="#000066">TOTAL STOP DURATION:</td><td><input type="text" name="f12"   ></td></tr>
	<tr><td>  <font color="#000066">SHIFT DURATION:</td><td><input type="text" name="f13"   > </td></tr>
	 
	  </table> </div>
	 
    <div id="content-wrap"> <table> 
	  
             <tr><td>   <font color="#000066">CARD NO:</td><td><input type="text" name="f14"   > </td></tr>
	 <tr><td> <font color="#000066">EMPLOYEE NAME:</td><td><select name="f15">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `masters` WHERE  module='carding'");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[empname]</option>";
	  }
	    
	   ?>
		 </select>  </td></tr>
	  
	<tr><td>  <font color="#000066">ACT HANKS:</td><td><input type="text" name="f16"   > </td></tr>
	<tr><td>  <font color="#000066">PNEU WASTE KGS:</td><td><input type="text" name="f17"   ></td></tr>
	<tr><td>  <font color="#000066">EFFICIENCY:</td><td><input type="text" name="f18"   ></td></tr>
	<tr><td>  <font color="#000066">PRODN CONST:</td><td><input type="text" name="f19"   ></td></tr>
	 <tr><td>  <font color="#000066">ACHIEVED(kgs):</td><td><input type="text" name="f20"   ></td></tr>
	<tr><td>  <font color="#000066">REMARKS:</td><td><input type="text" name="f21"   ></td></tr>
	 <tr><td> <font color="#000066">DURATION:</td><td><input type="text" name="f22"   ></td></tr>
 	  </table> 
	<table>
	<tr><th><font color="#000066">STOPAGE REASON</th><th><font color="#000066">DURATION</th></tr> 
	<tr><td><textarea rows="5" cols="44" name="f23"></textarea></td><td><input type="text" align="middle" name="f24" size="15"></td></tr>
 	 
	 <tr><td></td><td></td></tr>
	 <tr><td></td><td></td></tr>
	</table>  <input type="submit" name="submit" value="SAVE" class="submit"> 
		<br><br>
  
   
    <br>	<br>	<br>
	  </div>
 
	   
	
	  	</form>
		 
	  <br>	<br>	
</div>
  
 <style>
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
background:#FF6699;
 
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
$a22=$_POST['f22'];
$a23=$_POST['f23'];
$a24=$_POST['f24'];
 

 
 
 include 'db.php';
 
 
 
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 
 $q=mysql_query("INSERT INTO `comber`(`id`, `date`, `unit`, `shift`, `lotno`, `machineno`, `machinename`, `count`, `deliveryhank`, `speed`, `stdhank`, `staefficeincy`, `totalduration`, `shiftduration`, `cardno`, `employeename`, `acthanks`, `pneuwaste`, `efficiency`, `prodncosta`, `achieved`, `remarks`, `duartion`, `stopagereason`, `duration`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24','$dt')");
  
  
if($q)
echo "<script>alert('Data Inserted');window.location='comber.php';</script>";
 
 

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
