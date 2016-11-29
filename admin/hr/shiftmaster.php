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
 
  <div  id="main">
    <header>
      <div id="logo">
        <div id="logo_text"> 
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><b><a href="#">Jyotirmaye<span class="logo_colour">Textiles Pvt.Ltd</span></a></b></h1>
         
        </div>
      </div>
      <nav>
        <?php include "menu.php"; ?>
      </nav>
    </header>
    <div id="site_content" >
      
 <div  id="main-wrap">
  <h1 align="center"> SHIFT MASTER</h1> <hr>
    <div  id="sidebar"> 
	<center> 	
	   <form action="shiftmaster.php" method="post" enctype="multipart/form-data">
             <table>
                <tr>
                    <td>
                        <label for="shift_code"><font color="#000066">Shift Code</label>
                    </td>
                    <td>
                        <input type="text" name="f1" id="shift_code">
                    </td>
                    <td>
                        <label for="shift_name"><font color="#000066">Shift name</label>
                    </td>
                    <td>
                        <input type="text" name="f2" id="shift_name">
                    </td>
                </tr>
                <tr>
                     <td>
                        <label for="start_time_one"><font color="#000066">Start time 1</label>
                    </td>
                    <td>
                        <input type="text" name="f3" id="start_time_one">
                    </td>
                    <td>
                        <label for="end_time_one"><font color="#000066">End time 1</label>
                    </td>
                    <td>
                        <input type="text" name="f4" id="end_time_one">
                    </td>
                </tr>
                
                <tr>
                     <td>
                        <label for="start_time_two"><font color="#000066">Start time 2</label>
                    </td>
                    <td>
                        <input type="text" name="f5" id="start_time_two">
                    </td>
                    <td>
                        <label for="end_time_two"><font color="#000066">Lunch deduction </label>
                    </td>
                    <td>
                        <input type="text" name="f6" id="end_time_two">
                    </td>
                </tr>
                <tr>
                     <td>
                        <label for="lunch_deduction"><font color="#000066">End time 2</label>
                    </td>
                    <td>
                        <input type="text" name="f7" id="lunch_deduction">
                    </td>
                    <td>
                        <label for="working_hour"><font color="#000066">working_hours</label>
                    </td>
                    <td>
                        <input type="text" name="f8" id="working_hour">
                    </td>
                </tr>
                
                <tr>
                     <td>
                        <label for="grace_late"><font color="#000066">Grace late</label>
                    </td>
                    <td>
                        <input type="text" name="f9" id="grace_late">
                    </td>
                    <td>
                        <label for="grace_early"><font color="#000066" >Grace Early</label>
                    </td>
                    <td>
                        <input type="text" name="f10" id="grace_early">
                    </td>
                </tr>
             <tr><td><input type="submit" name="submit" value="SAVE" class="submit"></td></tr>
	   
                
            </table>
       
	   
	  <div ></div> 
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
float:right;
}
table
{
width:999px;
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
  
 include 'db.php';
   
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 $q=mysql_query("INSERT INTO `shiftmaster`(`id`, `shiftcode`, `shiftname`, `stime1`, `etime1`, `stime2`, `lunch`, `etime2`, `workhours`, `gracelate`, `graceearly`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$dt')");
   
if($q)
echo "<script>alert('Data Inserted');window.location='shiftmaster.php';</script>";
 
 

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
