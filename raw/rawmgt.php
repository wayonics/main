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
  <h1 align="center">RAW MATERIAL MANAGEMENT</h1> <hr>
    <div  id="sidebar"> 	   
	    
		
	   <form action="rawmgt.php" method="post" enctype="multipart/form-data">
   <html>

<head>

<title>Raw Material Management</title>




<style>

td,tr
{margin:15px;
padding:4px;
}
td
{
color:#333333;
font-size:12px;
}
select{
width:120px;}
.text{
width:70px;
}
.text1
{
width:59px;
}
.text2
{
width:50px;
}
.text3
{
width:35px;
}
.text4{
width:20px;
}
.width
{
	width:90px;
}
.normal
{
width:120px;
}
.normal1
{
	width:100px;
}
td,tr{

margin:15px;
padding:2px;
}

input,select,option
{
padding:5px 2px 5px 2px;
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

	<table width="1000" cellspacing="0" cellpadding="0"  align="center">
 	<tr>
			<td width="1000">
			<table width"1000" cellspacing="0" cellpadding="0" style="border:1px solid black;">
				<tr>
					<td width="50" >
						<table width="50" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
							<td width="20" height="30" cellspacing="0" cellpadding="0" >DATE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td width="20" height="30" cellspacing="0" cellpadding="0" style=" "><input type="calendar" class="normal" name="f1"></td>
						</tr>
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40">
						<table width="40" cellspacing="0" cellpadding="0">
						<tr  style="height:20px">
						<td width="20"  cellspacing="0" cellpadding="0" >ITEMNAME:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="20"  cellspacing="0" cellpadding="0" style=" ">
							<select name="f2">        
							<option >COTTON-LINT</option>
							</select>
         				</td>
						</tr>
						
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40"   >
						<table width="40" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" >SL NO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
						<td width="20" cellspacing="0" cellpadding="0" style=" "><input type="text" class="normal" name="f3"></td>
						
						</tr>
						
						</table>
						
					</td>
					
					
				</tr>
				<tr>
					<td width="50" >
						<table width="50" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
							<td width="20" height="30" cellspacing="0" cellpadding="0" >SUPPLIER:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td width="200" height="30" cellspacing="" cellpadding="0" style=" "><input type="text" name="f4"></td>
						</tr>
						</table>
						
					</td>
					
					<td style="width:4px;border:none;"></td>
					<td width="40"   >
						<table width="40" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" >SUPPLIERLOTNO:&nbsp;&nbsp;&nbsp;</td>
						<td  width="100" cellspacing="0" cellpadding="0" style=" "><input type="text"name="f5"></td>
						
						
						</tr>
						
						</table>
						
					</td>
					
					
				</tr>
				<tr>
					<td width="50" >
						<table width="50" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
							<td width="20" height="30" cellspacing="0" cellpadding="0" >AGENT:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td  height="0" cellspacing="0" cellpadding="0" style="align:center "><input type="text" class="normal" name="f6"></td>
							
						</tr>
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40">
						<table width="40" cellspacing="0" cellpadding="0">
						<tr  style="height:20px">
						<td width="20"  cellspacing="0" cellpadding="0" >AREA:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="20"  cellspacing="0" cellpadding="0" style=" "><input type="text" name="f7"></td>
					
						</tr>
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40"   >
						<table width="40" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" >COUNT/VAREITY:</td>
						<td width="20" cellspacing="0" cellpadding="0" style=" " >
							<select name="f8">        
							<option value=""></option>
							<option value=""></option>
							<option value=""></option>
							<option value=""></option>
							</select>
						
						</td>
						<td width="20" cellspacing="0" cellpadding="0" style=" ">
							<select name="f9" >        
							<option value=""></option>
							<option value=""></option>
							<option value=""></option>
							<option value=""></option>
							</select>
						
						</td>
						</tr>
						
						</table>
						
					</td>
					
					
				</tr>
				<tr>
					<td width="50" >
						<table width="50" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
							<td width="20" height="30" cellspacing="0" cellpadding="0" >MILL-LOT-NO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td height="30" cellspacing="0" cellpadding="0" style=" "><input type="date" class="normal" name="f10"></td>
							
						</tr>
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40">
						<table width="40" cellspacing="0" cellpadding="0">
						<tr  style="height:20px">
						<td width="20"  cellspacing="0" cellpadding="0" >BALES&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="20" cellspacing="0" cellpadding="0" >BORAS&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="20" cellspacing="0" cellpadding="0" style=" font-size:12px ">CONVBALES</td>
						</tr>
						
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40"   >
						<table width="40" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" >RATE/KG:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="20" cellspacing="0" cellpadding="0" style=" "><input type="text" class="normal" name="f11"></td>
						
						</tr>
						
						</table>
						
					</td>
					
				</tr>
				<tr>
					<td width="50" >
						<table width="50" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
							<td width="20" height="30" cellspacing="0" cellpadding="0" >COTTONVARIETY:</td>
							<td width="20"  cellspacing="0" cellpadding="0" style=" "><input type="text" name="f12"></td>
							
         				
						</tr>
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40">
						<table width="40" cellspacing="0" cellpadding="0">
						<tr  style="height:20px">
						
						<td width="20"  cellspacing="0" cellpadding="0" style=" "><input type="text" class="text2" name="f13"></td>
						<td width="20"  cellspacing="0" cellpadding="0" style=" "><input type="text" class="text2" name="f14"></td>
						<td width="20"  cellspacing="0" cellpadding="0" style=" "><input type="text" class="text2" name="f15"></td>
							
						</tr>
						
						
						</table>
						
					</td>
					
					
				</tr>
				<tr>
					<td width="50" >
						<table width="50" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
							<td width="20" height="30" cellspacing="0" cellpadding="0" >STOCKING AT:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td width="20" height="30" cellspacing="0" cellpadding="0" style=" ">
							
							<select name="f16">        
							<option value=""></option>
							<option value=""></option>
							<option value=""></option>
							<option value=""></option>
							</select>
							</td>
						</tr>
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40">
						<table width="40" cellspacing="0" cellpadding="0">
						<tr  style="height:20px">
						<td width="20"  cellspacing="0" cellpadding="0" >BALENO'S:</td>
						<td width="20"  cellspacing="0" cellpadding="0"  ><input type="text" class="text2" name="f17"></td>
						<td width="20"  cellspacing="0" cellpadding="0"  ><input type="text" class="text2" name="f18"></td>
						
						</tr>
						
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40"   >
						<table width="40" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" >BALE WEIGHT:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="20" cellspacing="0" cellpadding="0" style=" "><input type="text" class="normal" NAME="f19"></td>
						
						</tr>
						
						</table>
						
					</td>
					
					
				</tr>
				<tr>
					<td width="50" >
						<table width="50" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
							<td width="20" height="30" cellspacing="0" cellpadding="0" >BINLOCATION:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							
							<td width="20"  cellspacing="0" cellpadding="0" style=" "><input type="text" class="normal"  name="f20"></td>
							
         				
						</tr>
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40">
						<table width="40" cellspacing="0" cellpadding="0">
						<tr  style="height:20px">
						<td width="20"  cellspacing="0" cellpadding="0" >RATE/CANDY:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="20" height="30" cellspacing="0" cellpadding="0" style=" "><input type="text" class="normal" name="f21"></td>
						</tr>
						
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40"   >
						<table width="40" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" >PHY WT:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="20" cellspacing="0" cellpadding="0" style=" "><input type="text" class="normal" name="f22"></td>
						
						</tr>
						
						</table>
						
					</td>
					
					
				</tr>
				<tr>
					<td width="50" >
						<table width="50" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
							<td width="20" height="30" cellspacing="0" cellpadding="0" >FRIEGHT:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td width="20"  cellspacing="0" cellpadding="0" style=" "><input type="text" class="normal" name="f23"></td>
							
         				
						</tr>
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40">
						<table width="40" cellspacing="0" cellpadding="0">
						<tr  style="height:20px">
						<td width="20"  cellspacing="0" cellpadding="0" >HANDLING CHGS:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="20" cellspacing="0" cellpadding="0" style=" "><input type="text" class="normal" name="f24"></td>
						
						
						</tr>
						
						
						</table>
						
					</td>
					<td style="width:10px;border:none;"></td>
					<td width="40"   >
						<table width="40" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" >ABSOLUTE VALUE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="20" cellspacing="0" cellpadding="0" style=" "><input type="text" class="normal" name="f25"></td>
						
						</tr>
						
						</table>
						
					</td>
					
				</tr>
				<tr>
					<td width="50" >
						<table width="50" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
							<td width="20" height="30" cellspacing="0" cellpadding="0" ></td>
							<td width="20"  cellspacing="0" cellpadding="0" style=" ">
							
         				</td>
						</tr>
						</table>
						
					</td>
					<td style="width:10px;border:none;"></td>
					<td width="40">
						<table width="40" cellspacing="0" cellpadding="0">
						<tr  style="height:20px">
						<td width="20"  cellspacing="0" cellpadding="0" >SIZECOUNT:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="20"  cellspacing="0" cellpadding="0" style=" ">
							<input type="text" class="normal" name="f26">
         				</td>
						</tr>
						
						
						</table>
						
					</td>
					<td style="width:10px;border:none;"></td>
					<td width="40"   >
						<table width="40" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" ></td>
						<td width="20" cellspacing="0" cellpadding="0" style=" "></td>
						
						</tr>
						
						</table>
						
					</td>
					<td style="width:10px;border:none;"></td>
					<td width="40"   >
						<table width="40" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" ></td>
						<td width="20" cellspacing="0" cellpadding="0" style=" "></td>
						
						</tr>
						
						</table>
						
					</td>
					<td style="width:10px;border:none;"></td>
					<td width="40"   >
						<table width="40" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" ></td>
						<td width="20" cellspacing="0" cellpadding="0" style=" "></td>
						
						</tr>
						
						</table>
						
					</td>
					
					
				</tr>
				
			</table>
		</td>
		
	</tr>
	<!--FIRST ROW COMPLETED-->
	<tr><td height="5"></td></tr>
		<tr>
			<td width="1000">
			<table width"1000" cellspacing="0" cellpadding="0" style="border:1px solid black;">
				<tr>
					<td width="1000" >
						<table width="1000" cellspacing="0" cellpadding="0">
							<tr style="height:20px">
								<td width="20" height="30" cellspacing="0" cellpadding="0" >BALENO.</td>
								<td width="20" height="30" cellspacing="0" cellpadding="0" style=" ">2.5%SL</td>
								<td width="20" height="30" cellspacing="0" cellpadding="0" style=" ">50%SL</td>
								<td width="20" height="30" cellspacing="0" cellpadding="0" style=" ">UR%</td>
								<td width="20" height="30" cellspacing="0" cellpadding="0" style=" ">MICR ONIAR</td>
								<td width="20" height="30" cellspacing="0" cellpadding="0" style=" ">STRENGTH</td>
								<td width="20" height="30" cellspacing="0" cellpadding="0" style=" ">MR%</td>
								<td width="20" height="30" cellspacing="0" cellpadding="0" style=" ">RD</td>
								<td width="20" height="30" cellspacing="0" cellpadding="0" style=" ">+B</td>
								<td width="20" height="30" cellspacing="0" cellpadding="0" style=" ">%TRASH</td>
								<td width="20" height="30" cellspacing="0" cellpadding="0" style=" ">%Moist</td>
								<td width="20" height="30" cellspacing="0" cellpadding="0" style=" ">FQI</td>
								<td width="20" height="30" cellspacing="0" cellpadding="0" style=" ">ELONG</td>
								<td width="20" height="30" cellspacing="0" cellpadding="0" style=" ">SFC</td>
								<td width="20" height="30" cellspacing="0" cellpadding="0" style=" ">BALE WT</td>
								<td width="20" height="30" cellspacing="0" cellpadding="0" style=" ">PHYWT</td>
							
							</tr>
							<tr style="height:20px">
								<td width="20"  cellspacing="0" cellpadding="0" style=" "><input type="text" class="text3" name="f27"></td>
								<td width="20"  cellspacing="0" cellpadding="0" style=" "><input type="text" class="text3" name="f28"></td>
								<td width="20"  cellspacing="0" cellpadding="0" style=" "><input type="text" class="text3" name="f29"></td>
								<td width="20"  cellspacing="0" cellpadding="0" style=" "><input type="text" class="text3" name="f30"></td>
								<td width="20"  cellspacing="0" cellpadding="0" style=" "><input type="text" class="text3" name="f31"></td>
								<td width="20"  cellspacing="0" cellpadding="0" style=" "><input type="text" class="text3" name="f32"></td>
								<td width="20"  cellspacing="0" cellpadding="0" style=" "><input type="text" class="text3" name="f33"></td>
								<td width="20"  cellspacing="0" cellpadding="0" style=" "><input type="text" class="text3" name="f34"></td>
								<td width="20"  cellspacing="0" cellpadding="0" style=" "><input type="text" class="text3" name="f35"></td>
								<td width="20"  cellspacing="0" cellpadding="0" style=" "><input type="text" class="text3" name="f36"></td>
								<td width="20"  cellspacing="0" cellpadding="0" style=" "><input type="text" class="text3" name="f37"></td>
								<td width="20"  cellspacing="0" cellpadding="0" style=" "><input type="text" class="text3" name="f38"></td>
								<td width="20"  cellspacing="0" cellpadding="0" style=" "><input type="text" class="text3" name="f39"></td>
								<td width="20"  cellspacing="0" cellpadding="0" style=" "><input type="text" class="text3" name="f40"></td>
								<td width="20"  cellspacing="0" cellpadding="0" style=" "><input type="text" class="text3" name="f41"></td>
								<td width="20"  cellspacing="0" cellpadding="0" style=" "><input type="text" class="text3" name="f42"></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			</td>
		</tr>		
	<!--completed second row-->	
	<tr><td height="5"></td></tr>
	<tr>
		<td cellspacing="0" cellpadding="0">
	<table width="1000" cellspacing="0" cellpadding="0"  align="center">
	   <tr>
		<td width="1000"cellspacing="0" cellpadding="0"> 
		<table width="950" cellspacing="0" cellpadding="0"  align="center" class="table">
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
		<td width="50"cellspacing="0" cellpadding="0">
			<table width="50" cellspacing="0" cellpadding="0"  align="center">
				
				
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
		</td>	
	</tr>
	</table>
	

</body>

</html>	<br>	 

<br><br>
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
 
 $q=mysql_query("INSERT INTO `rawmgt`(`id`, `date`, `supplier`, `agent`, `milllotno`, `cottonvariety`, `stockingat`, `binlocation`, `frieght`, `itemname`, `area`, `bales`, `boras`, `convbales`, `balenos`, `rate`, `handling`, `size`, `serialno`, `supplierlotno`, `count`, `rate/kg`, `balewt`, `phywt`, `assblevalue`, `baleno`, `sl1`, `sl2`, `ur`, `microniar`, `strength`, `mr`, `rd`, `+b`, `trash%`, `moist%`, `fqi`, `elong`, `sfc`, `balewtt`, `phywtt`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24','$a25','$a26','$a27','$a28','$a29','$a30','$a31','$a32','$a33','$a34','$a35','$a36','$a37','$a38','$a39','$a40','$dt')");
 
$q=mysql_query("INSERT INTO `rawmgt1`(`id`, `date`, `supplier`, `agent`, `milllotno`, `cottonvariety`, `stockingat`, `binlocation`, `frieght`, `itemname`, `area`, `bales`, `boras`, `convbales`, `balenos`, `rate`, `handling`, `size`, `serialno`, `supplierlotno`, `count`, `rate/kg`, `balewt`, `phywt`, `assblevalue`, `baleno`, `sl1`, `sl2`, `ur`, `microniar`, `strength`, `mr`, `rd`, `+b`, `trash%`, `moist%`, `fqi`, `elong`, `sfc`, `balewtt`, `phywtt`, `datetime`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24','$a25','$a26','$a27','$a28','$a29','$a30','$a31','$a32','$a33','$a34','$a35','$a36','$a37','$a38','$a39','$a40','$dt')");
 
  
  
if($q==true and $q1==true)
echo "<script>alert('Data Inserted');window.location='rawmgt.php';</script>";
  
}
?>

  
 
	
    <footer>
      <p>Copyright | <a href="http://www.css3templates.co.uk"> </a></p>
    </footer>
  </div>
  <p></p>
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
