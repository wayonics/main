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
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css1/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     


<script>
$(document).ready(function() {
    $('#search').change(function(){
        $.ajax({
            type: "GET",
            url: "get-spindles.php",
            data: 'result=' + $('#search').val(),
            success: function(responseText){
                 $('#result').val(responseText);
            }

        });  
    }); //event handler

}); //document.ready
</script>

</head>

<body>
  
        <?php include "menu.php"; ?>
      </nav>
    </header>
    <div id="site_content" >
      
	  
	  
	  
 <div  id="main-wrap">
  <h1 align="center">RING FRAME</h1> <hr>
    <div  id="sidebar"> 
	 <form action="ringframe.php" method="post" enctype="multipart/form-data">
    
          <table>
	<tr><td><font color="#000066">SUPERVISOR:</td><td></font><select name="f1" class="small">
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
	<tr><td><font color="#000066"> ASM:</td><td><input type="text" name="f2"   >  </td></tr>
	<tr><td> <font color="#000066">MAISTRY:</td><td><input type="text" name="f3"  >   </td></tr>   
       
               <tr><td> <font color="#000066">DATE:</td><td><input type="date" name="f4"  > </td></tr>   
	<tr><td> <font color="#000066">SHIFT:</td><td><select name="f5" class="small" >
	 <option>select--------------</option>
	 <option>Day Shift</option>
	 <option>Evening Shift</option>
	 <option>Night Shift</option>
	 
 
	 </select>   </td></tr>
			  
	<tr><td> <font color="#000066">UNIT:</td><td><select name="f6"class="small">
	 <option>select--------------</option>
	 <option>UNIT-1</option>
	 <option>UNIT-2</option>
	 
	 </select> </td></tr>
     
    	<tr><td> <font color="#000066">LOT NO:</td><td><select name="f7"class="small">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `productionlotnos`  ");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[lotnos]</option>";
	  }
	    
	   ?>
		 </select> </td></tr>
	<tr><td> <font color="#000066"> M/C NO:</td><td><select name="f8"class="small">
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
	  
	<tr><td> <font color="#000066">M/C NAME:</td><td><select name="f10" id="search"class="small">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `productionmachines` ");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[machinename]</option>";
	  }
	    
	   ?>
		 </select>  </td></tr>
	<tr><td> <font color="#000066">COUNT CODE:</td><td><select name="f10"class="small">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `productioncountmaster` ");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[count]</option>";
	  }
	    
	   ?>
		 </select>  
	</td></tr>
	<tr><td> <font  color="#000066">ALLOTED SPDLS:</td><td><input type="text" name="f11" id="result" > </td></tr>
	<tr><td> <font color="#000066">EXPECTED GRMS:</td><td><input type="text" name="f12"  > </td></tr>
	<tr><td> <font color="#000066">STD HANK:</td><td><input type="text" name="f13"  > </td></tr>
	<tr><td> <font color="#000066">STD CONSTANT:</td><td><input type="text" name="f14"  > </td></tr>
	<tr><td> <font color="#000066">EMP NO:</td><td><input type="text" name="f15"  > </td></tr>
	<tr><td> <font color="#000066">EMP NAME	:</td><td><input type="text" name="f16"  > </td></tr>
	<tr><td> <font color="#000066">EMP NO:</td><td><input type="text" name="f17"  > </td></tr>
	<tr><td> <font color="#000066">EMP NAME:</td><td><input type="text" name="f18"  > </td></tr>
	<tr><td> <font color="#000066"> EMP NO:</td><td><input type="text" name="f19"  > </td></tr>
	<tr><td> <font color="#000066">EMP NAME:</td><td><input type="text" name="f20"  > </td></tr> 
	<tr><td> <font color="#000066">EFFICIENCY:</td><td><input type="text" name="f21"  > </td></tr>
	   
       
	   </table> </div>
	 
    <div id="content-wrap"> <table> 
               <tr><td>  <font color="#000066">STOPAGE REASON:</td><td><select name="f22"class="small">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `productionstoapgereason`  ");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[sreason]</option>";
	  }
	    
	   ?>
		 </select> </td></tr>
	<tr><td>  <font color="#000066">DURATION:</td><td><input type="text" name="f23"  > </td></tr>
	<tr><td>  <font color="#000066">TOTAL STOP DURAION:</td><td><input type="text" name="f24"  > </td></tr>
	<tr><td>  <font color="#000066">WORKED SPDLS:</td><td><input type="text" name="f25"  ></td></tr>
	<tr><td>  <font color="#000066">ACTUAL HANKS:</td><td><input type="text" name="f26"  ></td></tr>
	<tr><td>  <font color="#000066">PNEU WASTE (kgs):</td><td><input type="text" name="f27"  ></td></tr>
	<tr><td>  <font color="#000066">DOFFTIME/NOOFDOFFS:</td><td><input type="text" name="f28"  ></td></tr>
	<tr><td>  <font color="#000066">PRDOUCTION(kgs):</td><td><input type="text" name="f29"  ></td></tr>
	<tr><td>  <font color="#000066">GPS:</td><td><input type="text" name="f30"  ></td></tr>
	<tr><td>  <font color="#000066">SHIFT DURATION PER MACHINE:</td><td><input type="text" name="f31"  ></td></tr>
	<tr><td>  <font color="#000066">ROVING WASTE:</td><td><input type="text" name="f32"  ></td></tr>
	<tr><td>  <font color="#000066">NO OF ID'S:</td><td><input type="text" name="f33"  > </td></tr>
</table>  
	

	 <br>	<br>	<br>
	  </div>
 
	<table>
	<tr><th><font color="#000066"><font color="#000066">STOPAGE REASON</th><th><font color="#000066"><font color="#000066">DURATION</th></tr> 
	<tr><td><textarea rows="5" cols="44" name="f34"></textarea></td><td><input type="text" align="middle" name="f35" size="15"></td></tr>
 	 
	 <tr><td></td><td></td></tr>
	 <tr><td></td><td></td></tr>
	</table>
     <input type="submit" name="submit" value="SAVE" class="submit">
	 <br>	<br>	<br>
	  </div>
 
	   
	  <div align="right"></div> 
	  	</form>
		 
	  <br>	<br>	
</div>
  
 <style>.small
 {
 width:178px;
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
$a25=$_POST['f25'];
$a26=$_POST['f26'];
$a27=$_POST['f27'];
$a28=$_POST['f28'];
$a29=$_POST['f29'];
$a30=$_POST['f30'];
$a31=$_POST['f31'];
$a32=$_POST['f32'];
$a33=$_POST['f33'];
$a34=$_POST['f34'];
$a35=$_POST['f35'];

 
 include 'db.php';
 
 
 
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 
$q=mysql_query(" INSERT INTO `ringframe`(`id`, `supervisor`, `asm`, `maistry`, `date`, `shift`, `unit`, `lotno`, `mcno`, `mcnname`, `countcode`, `spdls`, `grms`, `hank`, `connstannt`, `empno1`, `empname1`, `empno2`, `empname2`, `empno3`, `empname3`, `efficiency`, `reason`, `duration`, `totalduration`, `workedspdls`, `actualhanks`, `pneuwaste`, `dofftime`, `production`, `gps`, `shiftdurationm`, `roving waste`, `noofids`,`streason`,`stduration`, `datetime`,`module`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24','$a25','$a26','$a27','$a28','$a29','$a30','$a31','$a32','$a33','$a34','$a35','$dt','Ring frame')");
if($q)
echo "<script>alert('Data Inserted');window.location='ringframe.php';</script>";
 
 

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
