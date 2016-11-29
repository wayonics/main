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
     
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>



<script>
$(document).ready(function() {
    $('#count').change(function(){
        $.ajax({
            type: "GET",
            url: "get-count2.php",
            data: 'conetip=' + $('#count').val(),
            success: function(responseText){
                 $('#conetip').val(responseText);
            }

        });  
    }); //event handler
}); //document.ready

 
 
 $(document).ready(function() {
    $('#count').change(function(){
        $.ajax({
            type: "GET",
            url: "get-count2.php",
            data: 'verity=' + $('#count').val(),
            success: function(responseText){
                 $('#verity').val(responseText);
            }

        });  
    }); //event handler
}); //document.ready


$(document).ready(function() {
    $('#count').change(function(){
        $.ajax({
            type: "GET",
            url: "get-count2.php",
            data: 'colour=' + $('#count').val(),
            success: function(responseText){
                 $('#colour').val(responseText);
            }

        });  
    }); //event handler
}); //document.ready

</script>

 
<body>
   
         <?php include 'menu.php'; ?>
      </nav>
    </header>
    <div id="site_content" >
      
 <div  id="main-wrap">
  <h1 align="center">PACKING ENTRY</h1> <hr>
    <div  id="sidebar"> 
	 <form action="packingentry.php" method="post" enctype="multipart/form-data">
  
	 
	 <table>
	 
	 <tr><td><font color="#000066">UNIT:  </td><td> <select name="f1"class="small">
		 <option>please select-----</option>
		 <option>UNIT-1</option>
		 <option>UNIT-2</option>
		 <option>TFO</option>
		 
		 
		    </select></td> </tr>
			 <tr> <td> <font color="#000066">COUNT: </td><td><select name="f2" class="small" id="count">
		 <option>please select-----</option>
		    <?php 
	   include 'db.php'; 
	  $q1=mysql_query(" SELECT * FROM `productionpackingmaster`  ");
	  while($a=mysql_fetch_array($q1))
	  {
	  echo "<option> $a[2]</option>";
	  }
	    
	   ?>
		 </select></td> </tr>
			  <tr> <td><font color="#000066"> CUSTOMER NAME: </td><td><input type="text" name="f3"   ></td> </tr>
			   <tr>  <td><font color="#000066">CONES PRODUCTION: </td><td><input type="text" name="f4"   ></td> </tr>
			 <tr> <td> <font color="#000066"> TAPE CONE TIP: </td><td><input type="text" name="f5"   id="conetip" > </td> </tr>
			   
			  <tr><td> <font color="#000066"> BAG NO.FROM: </td><td><input type="text" name="f6"   ></td> </tr> 
			   <tr> <td><font color="#000066"> CONES STOCK: </td><td><input type="text" name="f7"   > </td> </tr> 
			  <tr> <td>  <font color="#000066"> STOCK IN NOT ALL:</td><td> <input type="text" name="f8"   ></td> </tr> 
			  
			   <tr> <td> <font color="#000066">VARIETY: </td><td><input type="text" name="f11"   id="verity" > </td> </tr> 
		<tr><td><font color="#000066">LOT SIZE:</td><td><input type="text" name="f12"   ></td> </tr> 
		<tr> <td><font color="#000066">DES STATUS:</td><td><input type="text" name="f13"   ></td>  </tr> 
		
		 
	   </table> </div>
	 
    <div id="content-wrap"> <table> 
			  
		<tr><td><font color="#000066">STRAP COLOR:</td><td><input type="text" name="f14" id="colour"   ></td></tr> 
		<tr> <td><font color="#000066">BAG NO. TO:</td><td><input type="text" name="f15"   ></td></tr>
		 
	<tr><td><font color="#000066">BAGS STOCK:</td><td><input type="text" name="f16"   ></td></tr> 
		  
		<tr><td><font color="#000066">PENDING LOT SI:</td><td><input type="text" name="f17"   ></td>  </tr>  
		 
	<tr><td><font color="#000066">DATE:</td><td></font><input type="date" name="f20"   > </td> </tr>
	  
	
	<tr><td> <font color="#000066"> DESP DATE:</td><td><input type="date" name="f21"    > </td> </tr> 
	   
	<tr><td> <font color="#000066" >DISPATCHES:</td><td><input type="text" name="f22"   > </td> </tr> 
	<tr>  <td><font color="#000066">SHIFT:</td><td><select name="f23"  class="small">
	 <option>select--------------</option>
	 <option>Day Shift</option>
	 <option>Evening Shift</option>
	 <option>Night Shift</option>
	  
	 </select>   </td> </tr> 
	<tr><td> <font color="#000066">BAGS PACKED:</td><td><input type="text" name="f24"   > </td> </tr> 
	<tr><td> <font color="#000066">DESPATCHED TO:</td><td><input type="text" name="f25"  > </td> </tr> 
	<tr><td> <font color="#000066">CONES IN NOT ALLOT:</td><td><input type="text" name="f26"  ></td>  </tr> 
	 
	  
	</table>
	
	 </div>
	
	
	 <div  id="sidebar"> 
		 <table> 
			  <tr>  <td> <font color="#000066"> OP BAGS: </td><td><input type="text" name="f9"   ></td>  </tr> 
				<tr><td> <font color="#000066"> OP CONES: </td><td><input type="text" name="f10"   ></td>  </tr>
				 
				 
	   </table> </div>
	 
    <div id="content-wrap"> <table> 
			 
		 
		 
		   
		<tr><td><font color="#000066">CL BAGS:</td><td><input type="text" name="f18"   ></td> </tr> 
		<tr><td><font color="#000066">CL CONES:</td><td><input type="text" name="f19"   ></td>  </tr> 
	 
	  
	</table>
	
	
	
	
	    <center><p align="LEFT">

	 <input type="submit" name="submit" value="SAVE" class="submit">
	 	 <input type="reset"  value="CLEAR"  class="submit1">  </p>

	  	</form>
			<BR><BR>	<BR><BR>	 
 
</div>
  

 <style>
 .e1
 {
 width:78px;
 }
 .small
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

.submit1
{
width:79px;
height:29px;
color:#FFFFFF;
font-size:19px;
font-family:Verdana, Arial, Helvetica, sans-serif;
background:#000000;
padding:0 0 2px 0px;
text-align:center;
 
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
 
 
 
 include 'db.php';
  
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
  
  
  
$q= mysql_query(" INSERT INTO `packing`(`id`, `unit`, `count`, `customername`, `conesproduction`, `tapeconetip`, `bagnofrom`, `conesstock`, `stockinnotall`, `opbags`, `opcones`, `variety`, `lotsize`, `desstatus`, `strapcolour`, `bagnoto`, `bagsstock`, `pendinglot`, `clbags`, `clcones`, `date`, `despdate`, `despatches`, `shift`, `bagspacked`, `dispatchedto`, `conesinnotallot`, `datetime`) VALUES ( '','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24','$a25','$a26','$dt')")or die(mysql_error());
  
    
if($q)
echo "<script>alert('Data Inserted');window.location='packingentry.php';</script>";
  
}
?>


	   
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
