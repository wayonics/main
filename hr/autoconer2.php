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
  <h1 align="center">AUTO CONER</h1> <hr>
    <div  id="sidebar"> 
	   
    <form action="autoconer1.php" method="post" enctype="multipart/form-data">
     
          <table>

			 	<tr><td> <font color="#000066">DATE:</td><td><input type="date" name="f1"  > 
			  	 <tr><td> <font color="#000066">SHIFT:</td><td><select name="f2"  >
	 <option>select--------------</option>
	 <option>Day Shift</option>
	 <option>Evening Shift</option>
	 <option>Night Shift</option> 
	 </select> </td></tr>  
			    
 <tr><td><font color="#000066">UNIT :</td><td><select name="f3" >
	 <option>select--------------</option>
	 <option>UNIT-1</option>
	 <option>UNIT-2</option>
	 
	 </select>   </td></tr>
	   
	<tr><td><font color="#000066">SUPERVISOR:</td><td></font><select name="f4">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `productionsupervisor`  ");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[supervisorname]</option>";
	  }
	    
	   ?>
		 </select> </td></tr>
	<tr><td> <font color="#000066"> TNO:</td><td><input type="text" name="f5"   > 
	    
     	<tr><td> <font color="#000066">MACHINE NO:</td><td><select name="f6">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `productionmachines`  ");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[machinecode]</option>";
	  }
	    
	   ?>
		 </select></td></tr>
		 
	 <tr><td><font color="#000066"> MACHINE NAME:</td><td><select name="f7">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `productionmachines` ");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[machinename]</option>";
	  }
	    
	   ?>
		 </select> </td></tr>
	 
	 
	<tr><td> <font color="#000066">DRUMS:</td><td><input type="text" name="f8" placeholder="from" > <input type="text" name="f9" placeholder="to"  >  </td></tr>
	 <tr><td> <font color="#000066">COUNT:</td><td><select name="f10">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `productioncountmaster` ");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[count]   $a[code]</option>";
	  }
	    
	   ?>
		 </select> </td></tr>
	<tr><td> <font color="#000066">DRUM SPEED IN MPM:</td><td><input type="text" name="f11"  > </td></tr>
	<tr><td> <font color="#000066"> PRODUCTION IN KGS:</td><td><input type="text" name="f12"  ></td></tr>
	<tr><td> <font color="#000066">PACKAGES DOFFED:</td><td><input type="text" name="f13"  ></td></tr>
	<tr><td><font color="#000066"> EFF%:</td><td><input type="text" name="f14" ></td></tr>
	<tr><td><font color="#000066"> RED LEIGHT %:</td><td><input type="text" name="f15" >  </td></tr>
	
	  
	    </table> </div>
	 
    <div id="content-wrap"> <table> 
	   <tr><td><font color="#000066">AVG TIME:</td><td><input type="text" name="f16"  > </td></tr>
             <tr><td>  <font color="#000066">YARN SREAKS/100KM:</td><td><input type="text" name="f17"  ></td></tr> 
	<tr><td> <font color="#000066">CUTS/100KM:</td><td><input type="text" name="f18"  > </td></tr>
	<tr><td> <font color="#000066">YARN JOINTS/100KM:</td><td><input type="text" name="f19"  > </td></tr>
	<tr><td> <font color="#000066">PRODUCTION TIME:</td><td><input type="text" name="f20"  ></td></tr>
	 
	<tr><td> <font color="#000066">REMARKS:</td><td><input type="text" name="f21"  ></td></tr>
 	  </table> 
	<table>
 	 
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
  
 include 'db.php';
 
  
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 
 $q=mysql_query("INSERT INTO `autoconer1`(`id`, `date`, `shift`, `unit`, `supervisor`, `tno`, `mno`, `mname`, `drumsfrom`, `drumsto`, `count`, `drumspeed`, `production`, `packages`, `eff`, `redleight`, `avgtime`, `yarnsreaks`, `cuts`, `yarnjoints`, `productiontime`, `remarks`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$dt')");
  
  
  
if($q)
echo "<script>alert('Data Inserted');window.location='autoconer1.php';</script>";
 
 

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
