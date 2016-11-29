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
     
<head>
	<title>Preparatory Production</title>
</head>
<body>
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
 
height:20px;
}
.submit
{
width:99px;
height:29px;
color:#000000;
font-size:19px;
background:#FF6699;
text-align:center;
  
}
table,th
{
color:red;text-align:center;
font-weight:bold;
    border: 1px solid black;
 
}
td
{
color:purple;text-align:center;
 border: 1px solid black; 
 font-weight:bold;
}
 
 .rem1
 {
 height:69px;
 }
 .rem2
 {
 height:49px;
 }
  .rem3
 {
 height:109px;
 }
  .rem4
 {
 height:99px;
 }
  .rem5
 {
 height:109px;
 }
 body
 {
 background:#DEF9FA;
 }
   
 </style>
 	   
    <form action="autoconer1.php" method="post" enctype="multipart/form-data">
  <h1 align="center">AUTO CONER PRODUCTION ENTRY</h1> <hr>  <BR>  <BR>
  <font color="#000066"><B>SUPERVISOR:<input type="TEXT" name="f1"> 
<font color="#000066"><B> SHIFT:<select name="f2"  >
	 <option>select--------------</option>
	 <option>Day Shift</option>
	 <option>Evening Shift</option>
	 <option>Night Shift</option> 
	 </select>  
<font color="#000066"><B> DATE:<input type="DATE" name="f3"> 
<font color="#000066"> <B>JOBBER:<input type="TEXT" name="f4"> 
  
 
  <BR>  <BR>
<body>
<table border=10>
	<tr>
		
	 
		<td>TNO</td>
		<td>Machine No</td>
		<td colspan="2"  >Drums </td>
	 
		<td>Count</td>
		<td>Speed</td>
		<td>production KGS</td>
		<td>packages doffed</td>
		
		<td>Efficiency</td>
		<td>Red Light %</td>
		<td>Any Time/RED Light</td>
		<td>Yarn Breaks/100Km</td>
		<td>Cuts/100Km</td>
		<td>Yarn joints/100Km</td>
		
		<td>Prod Time</td>
		<td>Remarks</td>

	</tr>
	
	<tr>
	<td class="no"></td>
	<td class="no"></td>
	  
	<td  >FROM</td> 
	<td  >TO</td>
	
	<td class="no"></td>
	<td class="no"></td>
	<td class="no"></td>
 <td class="no"></td>
 <td class="no"></td>
 <td class="no"></td>
 <td class="no"></td>
 <td class="no"></td>
 <td class="no"></td>
 <td class="no"></td>
 <td class="no"></td>
 <td class="no"></td>
 
	</tr>	 
	
	
	
	<tr>
		<td>
      <input  type="text" name="f5" maxlength="50" size="10">
 		</td>
 		<td>
      <input  type="text" name="f6" maxlength="50" size="10">
 		</td>
 		<td>
      <input  type="text" name="f7" class="t1" size="10"> 
 		</td>
 		<td>
      <input  type="text" name="f8" maxlength="50" size="10">
 		</td>
 		<td>
      <input  type="text" name="f9" maxlength="50" size="10">
 		</td>
 		<td>
      <input  type="text" name="f10" maxlength="50" size="10">
 		</td>
 		<td>
      <input  type="text" name="f11" maxlength="50" size="10">
 		</td>
 		<td>
      <input  type="text" name="f12" maxlength="50" size="10">
 		</td>
 		<td>
      <input  type="text" name="f13" maxlength="50" size="10">
 		</td>
 		<td>
      <input  type="text" name="f14" maxlength="50" size="10">
 		</td>
 		<td>
      <input  type="text" name="f15" maxlength="50" size="10">
 		</td>
 		<td>
      <input  type="text" name="f16" maxlength="50" size="10">
 		</td>
 		<td>
      <input  type="text" name="f17" maxlength="50" size="10">
 		</td>
 		<td>
      <input  type="text" name="f18" maxlength="50" size="10">
 		</td>
		<td>
      <input  type="text" name="f19" maxlength="50" size="10">
 		</td><td>
      <input  type="text" name="f20" maxlength="50" size="10">
 		</td> 
	</tr>
	 
</table>
	  
 <input type="submit" name="submit" value="SAVE" class="submit">  
</div>
  	</form>
	 
		<br><br>
  
   
    <br>	<br>	<br>
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
 
  
 include 'db.php';
 
  
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 
 
 $q=mysql_query("INSERT INTO `autoconer1`(`id`, `supervisor`, `shift`, `date`, `jobber`, `tno`, `mno`, `drumsfrom`, `drumsto`, `count`, `speed`, `production`, `packagesdoffed`, `eff`, `redleight`, `anytimeredlieght`, `yarnbreaks`, `cuts`, `yarnjoints`, `prodtime`, `remarks`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$dt')");
    
  
if($q)
echo "<script>alert('Data Inserted');window.location='autoconer1.php';</script>";
  
}
?>

