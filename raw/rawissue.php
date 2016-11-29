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
  <h1 align="center">RAW MATERIAL ISSUES</h1> <hr>
    <div  id="sidebar"> 	   
	    
	   <form action="rawissue.php" method="post" enctype="multipart/form-data">
     <html>

<head>

<title>RAW MATERIAL ISSUE</title>
<style>

td,tr
{margin:15px;
padding:4px;
}
td
{
color:#333333;
}

td,tr{

margin:15px;
padding:2px;
}

input,select,option
{
padding:5px 2px 5px 2px;
}
.space
{

	width:500px;

}
.font
{
	font-size:12px;
	font-family:verdana;
	width:10px;
	
}
td,tr{

margin:15px;
padding:2px;
}
.normal
{
width:100px;
}

.text1
{
width:80px;
}
.table
{
	border: 1px solid black;
    border-collapse: collapse;
	height:30px;


}
</style>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>

<script>   
    $(function() {
         $( "#calendar" ).datepicker();   
    }); 
</script>

<meta charset="UTF-8">
</head>
<body>

<table width="900" cellspacing="0" cellpadding="0"  align="center">


<tr>
	<table width="900" cellspacing="0" cellpadding="0"  align="center" style="margin-top:10px;">
	<tr>
	<td class="font"  cellspacing="0" cellpadding="0">IssueDate</td>
	<td class="font"  cellspacing="0" cellpadding="0">ItemName</td>
	<td class="font"  cellspacing="0" cellpadding="0" align="left">MillLot <br>NO</td>
	<td class="font"  cellspacing="0" cellpadding="0">    Cotton<br>Variety</td>
	<td class="font"  cellspacing="0" cellpadding="0">Supplier</td>
	<td class="font"  cellspacing="0" cellpadding="0"align="right">Bales</td>
	<td class="font"  cellspacing="0" cellpadding="0"align="right">Boras</td>
	<td class="font"  cellspacing="0" cellpadding="0" align="center">ConvBales</td>
	</tr>
	</table>
</tr>
<tr><td>
	<table width="900" cellspacing="0" cellpadding="0"  align="center" style="margin-top:10px;">
	<tr>
	<td   cellspacing="0" cellpadding="0">
	<input type="calendar" class="normal" name="f1">
	</td>
	<td   cellspacing="0" cellpadding="0">
	<select class="normal"name="f1"><option value="text">Cootonlint</option></select>
	
	</td>
	<td cellspacing="0" cellpadding="0"><select class="normal"><option>Cootonlint</option></select></td>
	<td cellspacing="0" cellpadding="0"><select class="normal"  ><option>Cootonlint</option></select></td>
	<td cellspacing="0" cellpadding="0"><input type="text"class="normal"  name="f1"></td>
	<td cellspacing="0" cellpadding="0"><input type="text" class="text1" name="f1"></td>
	<td cellspacing="0" cellpadding="0"><input type="text" class="text1"name="f1"></td>
	<td cellspacing="0" cellpadding="0"><input type="text" class="text1"name="f1"></td>
	</tr>
	</table></td>
	
</tr>
<tr>
	<td cellspacing="0" cellpadding="0">
	<table width="900" cellspacing="0" cellpadding="0"  align="center" style="margin-top:10px;">
	<td cellspacing="0" cellpadding="0">Processlot No</td>
	<td cellspacing="0" cellpadding="0"><input type="text"class="normal"  name="f1"></td>
	<td cellspacing="0" cellpadding="0">Count</td>
	<td   cellspacing="0" cellpadding="0">
	<select class="normal"name="f1"><option>10</option></select>
	</td>
	<td   cellspacing="0" cellpadding="0">
	<select class="normal"name="f1"><option>CH</option></select>
	</td>
	<td cellspacing="0" cellpadding="0"><input type="text"class="text1"  name="f1"></td>
	<td cellspacing="0" cellpadding="0"><input type="text"class="text1"  name="f1"></td>
	<td cellspacing="0" cellpadding="0">Unit</td>
	<td   cellspacing="0" cellpadding="0">
	<select class="normal"name="f1"><option>Unit-I</option></select></td>
	<td cellspacing="0" cellpadding="0">NO.of Bales Issues</td>
	<td cellspacing="0" cellpadding="0"><input type="text"class="text1"  name="f1"></td>
	</table>
	</td>
	
</tr>
<tr>
<td cellspacing="0" cellpadding="0">
	<table width="900" cellspacing="0" cellpadding="0"  align="center">
	   <tr>
		<td width="850"cellspacing="0" cellpadding="0"> 
		<table width="850" cellspacing="0" cellpadding="0"  align="center" class="table">
  		<tr>
    		<th class="table" >BaleNO</th>
    		<th  class="table">2.5%sl</th>
   			<th  class="table">50%Sl</th>
			<th  class="table">UR%</th>
			<th  class="table">Micro<br>niare</th>
			<th  class="table">Strength</th>
			<th  class="table">MR%</th>
			<th  class="table">RD</th>
			<th  class="table">+B</th>
			<th  class="table">Trash%</th>
			<th  class="table">Moist%</th>
			<th  class="table">FQL</th>
			<th  class="table">BaleWt</th>
			<th  class="table">PhyWt</th>
			<th  class="table">BaleWt<br>(avg)</th>
			<th  class="table">Elong</th>
			<th  class="table">S</th>
			
  		</tr>
		<tr>
			<td class="table">g</td>
			 <td class="table">g</td>
			 <td class="table">g</td>
			 <td class="table">g</td>
			 <td class="table">g</td>
			 <td class="table">g</td>
			 <td class="table">g</td>
			 <td class="table">g</td>
			 <td class="table">g</td>
			 <td class="table">g</td>
			 <td class="table">g</td>
			 <td class="table">g</td>
			 <td class="table">g</td>
			  <td class="table">g</td>
			  <td class="table">g</td>
			  <td class="table">g</td>
			  <td class="table">g</td>
			 
		</tr>
		<tr>
			<td class="table"></td>
			<td class="table"></td>
			<td class="table"></td>
			<td class="table"></td>
			<td class="table"></td>
			<td class="table"></td>
			<td class="table"></td>
			<td class="table"></td>
			<td class="table"></td>
			<td class="table"></td>
			<td class="table"></td>
			<td class="table"></td>
			<td class="table"></td>
			<td class="table"></td>
			<td class="table"></td>
			<td class="table"></td>
			<td class="table"></td>
		</tr>
		
		
	</table>
		
		
		</td>
		<td width="30"cellspacing="0" cellpadding="0">
			<table width="30" cellspacing="0" cellpadding="0"  align="center">
				
				
				<tr>
					<td width="30"cellspacing="0" cellpadding="0"><input type="button" value="CLEAR"></td>
				</tr>
				<tr>
					<td width="30"cellspacing="0" cellpadding="0"><input type="button" value="SAVE"></td>
				</tr>
				<tr>
					<td width="30"cellspacing="0" cellpadding="0"><input type="button" value="ADD"></td>
				</tr>
			</table>	
		</td>
		
		</tr>
	</table>
</td>
</tr>
</table>

</body>

 </div> 
	<br>	 

<br><br>
<?php
session_start();
 if(isset($_POST['submit']))
{
$a1=$_POST['f1'];
$a2=$_POST['f2'];
$_SESSION['item']=$a2;

$a3=$_POST['f3'];
$a4=$_POST['f4'];
$a5=$_POST['f5'];
$_SESSION['supplier']=$a5;

$a6=$_POST['f6'];
$a7=$_POST['f7'];
$a8=$_POST['f8'];
$a9=$_POST['f9'];
$a10=$_POST['f10'];
$a11=$_POST['f11'];
$a12=$_POST['f12']; 
$_SESSION['bales']=$a12;





$a25=$_POST['f25'];
$a26=$_POST['f25'];
$a27=$_POST['f26'];
$a28=$_POST['f27'];
$a29=$_POST['f28'];
$a30=$_POST['f30'];
$a31=$_POST['f31'];
$a32=$_POST['f32'];
$a33=$_POST['f33'];
$a34=$_POST['f34'];
$a35=$_POST['f35'];
$a36=$_POST['f36'];
$a37=$_POST['f37'];
$a38=$_POST['f38'];
$a39=$_POST['f39'];
$a40=$_POST['f40'];

 include 'db.php';
  date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
   
   
   $q=mysql_query("INSERT INTO `rawmgtissue`(`id`, `date`, `itemname`, `milllotno`, `cotton`, `supplier`, `bales`, `boras`, `convbales`, `count`, `processlotno`, `unit`, `noofbales`, `baleno`, `sl1`, `sl2`, `ur`, `microniar`, `strength`, `mr`, `rd`, `b`, `trash`, `moist`, `fqi`, `elong`, `sfc`, `balewtt`, `phywtt`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a25','$a26','$a27','$a28','$a29','$a30','$a31','$a32','$a33','$a34','$a35','$a36','$a37','$a38','$a39','$a40','$dt')");
    
if($q)
echo "<script>alert('Data Inserted');window.location='rawissue1.php';</script>";
  
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
    header('location:../index.php');
}
?>
