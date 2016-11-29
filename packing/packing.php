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
 <h1 align="center">PACKING READING DETAILS</h1>
    <div  id="sidebar1"> 
	 <form action="packing.php" method="post" enctype="multipart/form-data">
	 <fieldset>
	 
	 <legend><B><font color="#000099">MACHINE READING</B></legend>
	 
	 
			 <table>
			 <tr><td> <font color="#000066">UNIT:   <select name="f1">
		 <option>please select-----</option>
		 <option>UNIT-1</option>
		 <option>UNIT-2</option>
		 
		    </select></font></td>
			  <td>  <font color="#000066">COUNT: <input type="text" name="f2"   ></td>
			  <td>  <font color="#000066">DATE: <input type="date" name="f3"   ></td>
	
			   <td>   <font color="#000066">SHIFT:<select name="f4"  >
	 <option>select--------------</option>
	 <option>Day Shift</option>
	 <option>Evening Shift</option>
	 <option>Night Shift</option>
	  
	 </select> </td>  
			   <td> <font color="#000066">Total Weight: <input type="text" name="f5"   ></td><tr>
<br><br>	</table>	<br><br>
       <center><input type="submit"  name="submit" value="Submit"  class="submit">

       </div>
          </form> <BR></fieldset>
		  
		 
		 <br><br>
		 
		 
		 
	 
	   <form action="packing.php" method="post" enctype="multipart/form-data">
    	  
		 <fieldset>
	 
	 <legend><B><font color="#000066">GROUND READING</B></legend>
	  <table>
	 
			 <tr><td>
			  <font color="#000066">UNIT:   <select name="f6">
		 <option>please select-----</option>
		 <option>UNIT-1</option>
		 <option>UNIT-2</option>
		 
		    </select></td>
			  <td> <font color="#000066">COUNT: <input type="text" name="f7"   ></td>
			   <td><font color="#000066">DATE: <input type="date" name="f8"   ></td>
	
			    <td> <font color="#000066">SHIFT:<select name="f9"  > 
	 <option>select--------------</option>
	 <option>Day Shift</option>
	 <option>Evening Shift</option>
	 <option>Night Shift</option>
	  
	 </select>   </td>
			  <td> <font color="#000066">Total Weight: <input type="text" name="f10"   ></td>
<br><br>	</table><br><br>
       <center><input type="submit"  name="submit1" value="Submit"  class="submit">	

       
	  
	  </fieldset>
		  
		 
	  
	  	</form>
		 
 
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
 </style>
  
 </div> 
 	 
	 
  

<br><br>
<?php
 if(isset($_POST['submit']))
{
$a1=$_POST['f1'];
$a2=$_POST['f2'];
$a3=$_POST['f3'];
$a4=$_POST['f4'];
$a5=$_POST['f5'];
 
 include 'db.php';
  
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
  
  
  $q=mysql_query("INSERT INTO `machinereading`(`id`, `unit`, `count`, `date`, `shift`, `tweight`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$dt')");
    
if($q)
echo "<script>alert('Data Inserted');window.location='packing.php';</script>";
  
}
?>

  

<br><br>


<?php
 if(isset($_POST['submit1']))
{
$a1=$_POST['f6'];
$a2=$_POST['f7'];
$a3=$_POST['f8'];
$a4=$_POST['f9'];
$a5=$_POST['f10'];
 
 include 'db.php';
  
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
  
  
 $q= mysql_query("INSERT INTO `groundreading`(`id`, `unit`, `count`, `date`, `shift`, `tweight`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$dt')");
    
if($q)
echo "<script>alert('Data Inserted');window.location='packing.php';</script>";
  
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
