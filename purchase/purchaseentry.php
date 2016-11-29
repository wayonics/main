
<?php
session_start();
if($_SESSION['user'])
{
?><!DOCTYPE HTML>
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
 


<style>

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
td
{color:#000066;
font-size:12px;
}
</style>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>

<script>   
    $(function() {
         $( "#calendar" ).datepicker();   
    }); 
</script>

<body>
<BR><BR>
<center><h1>PURCHASE ENTRY</h1></center>
<form action="purchaseentry.php" method="post" enctype="multipart/form-data">

	<table width="500" cellspacing="0" cellpadding="0"  align="center">
	<!--<tr>
		<td width="500" height="150"><img src="newimg.jpg"></td>
	</tr>-->
	<tr> 	</tr>
	<tr>
			<td width="500">
			<table width"500" cellspacing="0" cellpadding="0" style="border:1px solid black;">
				<tr>
					<td width="50" >
						<table width="50" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
							<td width="20" height="30" cellspacing="0" cellpadding="0" >PURCHASE ORDER&nbsp;&nbsp;&nbsp;</td>
							<td width="20" height="30" cellspacing="0" cellpadding="0" style=" "><input type="text" class="normal" name="f1"></td>
						</tr>
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40">
						<table width="40" cellspacing="0" cellpadding="0">
						<tr  style="height:20px">
						<td width="20"  cellspacing="0" cellpadding="0" >FINAL/PROVISIONAL</td>
						<td width="20"  cellspacing="0" cellpadding="0" style=" ">
							<select name="f2">        
							<option>Final</option>
							<option>Final</option>
							<option>Final</option>
							<option>Final</option>
							</select>
         				</td>
						</tr>
						
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40"   >
						<table width="40" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" >DESPATCHED FROM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
						<td width="20" cellspacing="0" cellpadding="0" style=" "><input type="text" class="normal" name="f3"></td>
						
						</tr>
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40" >
						<table width="40" cellspacing="0" cellpadding="0" >
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" style=" font-size:11px">AMC NO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text1" name="f4"></td>
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text1" name="f5"></td>
						</tr>
						
						</table>
						
					</td>
					
				</tr>
				<tr>
					<td width="50" >
						<table width="50" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
							<td width="20" height="30" cellspacing="0" cellpadding="0" >TRANSACTION TYPE</td>
							<td width="20" height="30" cellspacing="" cellpadding="0" style=" ">
							<select name="f6">        
							<option >Purchase</option>
							<option >Purchase</option>
							<option >Purchase</option>
							<option >Purchase</option>
							</select>
							
							</td>
						</tr>
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40">
						<table width="40" cellspacing="0" cellpadding="0">
						<tr  style="height:20px">
						<td width="20"  cellspacing="0" cellpadding="0" >SUPPLIER BILLNO/BILLDATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td  cellspacing="0" cellpadding="0" ><input type="text" class="text1" name="f7"></td>
						<td cellspacing="0" cellpadding="0" style=" "><input type="date" id= "calendar" class="text1" name="f8"></td>

         				
						</tr>
						
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40"   >
						<table width="40" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" >PORT OF LOADING DISCHARGE&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td  cellspacing="0" cellpadding="0" style=" "><input type="text" class="text1" name="f9"></td>
						<td  cellspacing="0" cellpadding="0" style=" "><input type="text" class="text1" name="f10"></td>
						
						</tr>
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="20" >
						<table width="40" cellspacing="0" cellpadding="0" >
						<tr style="height:20px">
						<td  width="20" cellspacing="0" cellpadding="0" style=" font-size:11px;width:10px">AMC PLACE&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="20" cellspacing="0" cellpadding="0" style=""><input type="text" class="normal" name="f11"></td>
						
						</tr>
						
						</table>
						
					</td>
					
				</tr>
				<tr>
					<td width="50" >
						<table width="50" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
							<td width="20" height="30" cellspacing="0" cellpadding="0" >INWARDNO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td  height="0" cellspacing="0" cellpadding="0" style="align:center "><input type="text" name="f12"></td>
							 </tr>
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40">
						<table width="40" cellspacing="0" cellpadding="0">
						<tr  style="height:20px">
						<td width="20"  cellspacing="0" cellpadding="0" >SUPPLIER NAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="20"  cellspacing="0" cellpadding="0" style=" ">
							<select name="f13">        
							<option >Final</option>
							<option >Final</option>
							<option >Final</option>
							<option >Final</option>
							</select>
         				</td>
						</tr>
						
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40"   >
						<table width="40" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" >FINAL DESTINATION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="20" cellspacing="0" cellpadding="0" style=" "><input type="text" class="normal" name="f14"></td>
						
						</tr>
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40" >
						<table width="40" cellspacing="0" cellpadding="0" >
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" style=" font-size:11px">EPCGNO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="20" cellspacing="0" cellpadding="0" style=" "><input type="text" class="normal" name="f15"></td>
						
						</tr>
						
						</table>
						
					</td>
					
				</tr>
				<tr>
					<td width="50" >
						<table width="50" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
							<td width="20" height="30" cellspacing="0" cellpadding="0" >INWARDDATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td height="30" cellspacing="0" cellpadding="0" style=" "><input type="date" class="text1" name="f16"></td>
							 </tr>
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40">
						<table width="40" cellspacing="0" cellpadding="0">
						<tr  style="height:20px">
						<td width="20"  cellspacing="0" cellpadding="0" >PARTY APVAT/CSTNO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td height="30" cellspacing="0" cellpadding="0" style=" "><input type="text" class="normal" name="f17"></td>
						 </tr>
						
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40"   >
						<table width="40" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" >MODE OF TRANSPORT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="20" cellspacing="0" cellpadding="0" style=" "><input type="text" class="normal" name="f18"></td>
						
						</tr>
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40" >
						<table width="40" cellspacing="0" cellpadding="0" >
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" style=" font-size:11px">OTLNO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="normal" name="f19"></td>
						
						</tr>
						
						</table>
						
					</td>
					
				</tr>
				<tr>
					<td width="50" >
						<table width="50" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
							<td width="20" height="30" cellspacing="0" cellpadding="0" >BILLTYPE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td width="20"  cellspacing="0" cellpadding="0" style=" ">
							<select name="f20">        
							<option >CREDITBILL</option>
							<option >CREDITBILL</option>
							<option >CREDITBILL</option>
							<option >CREDITBILL</option>
							</select>
         				</td>
						</tr>
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40">
						<table width="40" cellspacing="0" cellpadding="0">
						<tr  style="height:20px">
						<td width="20"  cellspacing="0" cellpadding="0" >AGENT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="20"  cellspacing="0" cellpadding="0" style=" "><input type="text" class="normal" name="f21"></td>
							
						</tr>
						
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40"   >
						<table width="40" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" >VEHICLE REGISTRATIONNO</td>
						<td width="20" cellspacing="0" cellpadding="0" style=" "><input type="text" class="normal" name="f22"></td>
						
						</tr>
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40" >
						<table width="40" cellspacing="0" cellpadding="0" >
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" style=" font-size:11px">C.EX. RANGE NO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="normal" name="f23"></td>
						 </tr>
						
						</table>
						
					</td>
					
				</tr>
				<tr>
					<td width="50" >
						<table width="50" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
							<td width="20" height="30" cellspacing="0" cellpadding="0" >IMPORT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td width="20" height="30" cellspacing="0" cellpadding="0" style=" ">
							
							<select name="f24">        
							<option >COTTON-LINT</option>
					 		</select>
							</td>
						</tr>
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40">
						<table width="40" cellspacing="0" cellpadding="0">
						<tr  style="height:20px">
						<td width="20"  cellspacing="0" cellpadding="0" >PURCHASE CONTRACTNO/DATE&nbsp;</td>
						<td width="20"  cellspacing="0" cellpadding="0" class="text3" ><input type="text" class="text1" name="f25"></td>
						<td width="20"  cellspacing="0" cellpadding="0" style=" ">
							 <input type="DATE" class="text1" name="f26">
							 
							 	</td>
						</tr>
						
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40"   >
						<table width="40" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" >CONTAINERNO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="20" cellspacing="0" cellpadding="0" style=" "><input type="text" class="normal" name="f27"></td>
						
						</tr>
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40" >
						<table width="40" cellspacing="0" cellpadding="0" >
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" style=" font-size:11px">CURRENCY TYPE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="5" cellspacing="0" cellpadding="0" style=" "><select class="text1" name="f28">        
							<option >RUPEES</option>
							<option >RUPEES</option>
							<option >RUPEES</option>
							<option >RUPEES</option>
							<option >RUPEES</option>
							</select></td>
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text1" name="f29"></td>
						</tr>
						
						</table>
						
					</td>
					
				</tr>
				<tr>
					<td width="50" >
						<table width="50" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
							<td width="20" height="30" cellspacing="0" cellpadding="0" >IMPORT TYPE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							
							<td width="20"  cellspacing="0" cellpadding="0" style=" ">
							<select name="f30">        
							<option >COTTON-LINT</option>
							 </select>
         				</td>
						</tr>
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40">
						<table width="40" cellspacing="0" cellpadding="0">
						<tr  style="height:20px">
						<td width="20"  cellspacing="0" cellpadding="0" >IMPORT REF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="20" height="30" cellspacing="0" cellpadding="0" style=" "><input type="text" class="normal" name="f31"></td>
						</tr>
						
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40"   >
						<table width="40" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" >VESSEL FLIGHT/NO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="20" cellspacing="0" cellpadding="0" style=" "><input type="text" class="normal" name="f32"></td>
						
						</tr>
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40" >
						<table width="40" cellspacing="0" cellpadding="0" >
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" style=" font-size:11px">CONVERSION </td>
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text1" name="f33"></td>
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="TEXT" class="text1" name="f34"></td>
						</tr>
						
						</table>
						
					</td>
					
				</tr>
				<tr>
					<td width="50" >
						<table width="50" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
							<td width="20" height="30" cellspacing="0" cellpadding="0" >PURCHASE MODE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td width="20"  cellspacing="0" cellpadding="0" style=" ">
							<select name="f35">        
							<option >REGISTERED</option>
							<option >REGISTERED</option>
							<option >REGISTERED</option>
							<option >REGISTERED</option>
							</select>
         				</td>
						</tr>
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40">
						<table width="40" cellspacing="0" cellpadding="0">
						<tr  style="height:20px">
						<td width="20"  cellspacing="0" cellpadding="0" >DUE DAYS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="20" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text1" name="f36"></td>
						<td width="20" cellspacing="0" cellpadding="0" style=" "><input type="date" class="text1"name="f37"></td>
						
						</tr>
						
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40"   >
						<table width="40" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" >LRNO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="20" cellspacing="0" cellpadding="0" style=" "><input type="text" class="normal" name="f38"></td>
						
						</tr>
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40" >
						<table width="40" cellspacing="0" cellpadding="0" >
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" style=" font-size:11px">RATE-TIME DATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="time" class="text1" name="f39">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
						
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="date" class="text1" name="f40"></td>
						</tr>
						
						</table>
						
					</td>
					
				</tr>
				<tr>
					<td width="50" >
						<table width="50" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
							<td width="20" height="30" cellspacing="0" cellpadding="0" >STATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td width="20"  cellspacing="0" cellpadding="0" style=" ">
							<select name="f41">        
							<option >WITHINSTATE</option>
							<option >OUTSTATE</option>
							 </select>
         				</td>
						</tr>
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40">
						<table width="40" cellspacing="0" cellpadding="0">
						<tr  style="height:20px">
						<td width="20"  cellspacing="0" cellpadding="0" >TERMSOF-DELIVERY AND-PAYMENT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="20"  cellspacing="0" cellpadding="0" style=" ">
							<input type="text" class="normal" name="f42">
         				</td>
						</tr>
						
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40"   >
						<table width="40" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" >WAYBILL-NO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="20" cellspacing="0" cellpadding="0" style=" "><input type="text" class="normal" name="f43"></td>
						
						</tr>
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40" >
						<table width="40" cellspacing="0" cellpadding="0" >
						<tr style="height:20px">
						
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" name="f44" value="PURCHASES COTTON-LINT"></td>
						
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
			<td width="700">
			<table width"700" cellspacing="0" cellpadding="0" style="border:1px solid black;">
				<tr>
					<td width="50" >
						<table width="50" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
							<td width="20" height="30" cellspacing="0" cellpadding="0" >ITEM NAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td width="20" height="30" cellspacing="0" cellpadding="0" style=" "><input type="text" class="normal" name="f45"></td>
						</tr>
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40">
						<table width="40" cellspacing="0" cellpadding="0">
						<tr  style="height:20px">
						<td width="20"  cellspacing="0" cellpadding="0" >DELIVARY-WT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="20"  cellspacing="0" cellpadding="0" style=" ">
							<select name="f46">        
							<option ></option>
							<option ></option>
							<option ></option>
							<option ></option>
							</select>
         				</td>
						</tr>
						
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40"   >
						<table width="40" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="20" cellspacing="0" cellpadding="0" style=" "><select name="f1">        
							<option ></option>
							<option ></option>
							<option ></option>
							<option ></option>
							</select></td>
						
						</tr>
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40" >
						<table width="40" cellspacing="0" cellpadding="0" >
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" style=" font-size:11px">TARE-WEIGHT&nbsp;&nbsp;</td>
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text"  class="normal1" name="f47"></td>
						
						</tr>
						
						</table>
						
					</td>
					
				</tr>
				<tr>
					<td width="50" >
						<table width="50" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
							<td width="20" height="30" cellspacing="0" cellpadding="0" >VERITY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td width="20" height="30" cellspacing="" cellpadding="0" style=" ">
							<input type="text" class="normal" name="f48">
							</td>
						</tr>
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40">
						<table width="40" cellspacing="0" cellpadding="0">
						<tr  style="height:20px">
						<td width="20"  cellspacing="0" cellpadding="0" >PRESSMARK-NO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="20"  cellspacing="0" cellpadding="0" >
						 <input type="text" class="normal" name="f49">
							</td>
						</tr>
						
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40"   >
						<table width="40" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" >QUALITY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td  cellspacing="0" cellpadding="0" style=" "><select name="f50">        
							<option ></option>
							<option ></option>
							<option ></option>
							 </select>
						</td>
						
						
						</tr>
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40">
						<table width="40" cellspacing="0" cellpadding="0">
						<tr  style="height:20px">
						<td width="20"  cellspacing="0" cellpadding="0" >ALLOWANCE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="20"  cellspacing="0" cellpadding="0" >
						<input type="text" class="normal1" name="f51">
         				</td>
						</tr>
						
						
						</table>
						
					</td>
					
				</tr>
				<tr>
					<td width="50" >
						<table width="50" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
							<td width="20" height="30" cellspacing="0" cellpadding="0" >SIZECOUNT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td  height="0" cellspacing="0" cellpadding="0" style=" "><input type="text" class="normal" name="f52"></td>
						</tr>
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40">
						<table width="40" cellspacing="0" cellpadding="0">
						<tr  style="height:20px">
						<td width="20"  cellspacing="0" cellpadding="0" >BAG-SLNO FROM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td  height="0" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text2" name="f53"></td>
						<td  height="0" cellspacing="0" cellpadding="0" style=" ">TO</td>
						<td  height="0" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text2" name="f54"></td>
						
						</tr>
						
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40"   >
						<table width="40" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" >UNITS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td  cellspacing="0" cellpadding="0" style=" "><select name="f55">        
							<option >KGS</option>
							<option >GRMS</option>
							 </select>
						</td>
						</tr>
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40" >
						<table width="40" cellspacing="0" cellpadding="0" >
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" style=" font-size:11px">NETWT KGS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="20" cellspacing="0" cellpadding="0" style=" "><input type="text" class="normal1" name="f56"></td>
						
						</tr>
						
						</table>
						
					</td>
					
				</tr>
				<tr>
					<td width="50" >
						<table width="50" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
							<td width="20" height="30" cellspacing="0" cellpadding="0" >TYPE-OF PACK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td height="30" cellspacing="0" cellpadding="0" style=" "><select name="f57">        
							<option >BALES</option>
							<option >BAGS</option>
							<option >BORAS</option>
						 	</select></td>
						</tr>
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40">
						<table width="40" cellspacing="0" cellpadding="0">
						<tr  style="height:20px">
						<td width="20"  cellspacing="0" cellpadding="0" >BAG-TYPE SIZE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td height="30" cellspacing="0" cellpadding="0" style=" "><select class="text1" name="f58">        
							<option ></option>
							<option ></option>
							<option ></option>
							<option ></option>
							</select></td><td style="width:2px;border:none;"></td>
						<td height="30" cellspacing="0" cellpadding="0" style=" "><input type="TEXT" class="text1" name="f59"></td>
						</tr>
						
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40">
						<table width="40" cellspacing="0" cellpadding="0">
						<tr  style="height:20px">
						<td width="20"  cellspacing="0" cellpadding="0" >UNIT TO-BE CONVERTED&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td height="30" cellspacing="0" cellpadding="0" style=" "><select class="text1" name="f60">        
							<option >KGS</option>
							<option >KGS</option>
							<option >KGS</option>
							<option >KGS</option>
							</select></td><td style="width:0.5px;border:none;"></td>
						<td height="30" cellspacing="0" cellpadding="0" style=" "><input type="TEXT" class="text2" name="f61"></td>
						</tr>
						
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40" >
						<table width="40" cellspacing="0" cellpadding="0" >
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" style=" font-size:11px">RATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="normal1" name="f62"></td>
						
						</tr>
						
						</table>
						
					</td>
					
				</tr>
				<tr>
					<td width="50" >
						<table width="50" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
							<td width="20" height="30" cellspacing="0" cellpadding="0" >PARTY LOT-NO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td width="20"  cellspacing="0" cellpadding="0" style=" ">
							<input type="text" class="normal" name="f63">
         				</td>
						</tr>
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40">
						<table width="40" cellspacing="0" cellpadding="0">
						<tr  style="height:20px">
						<td width="20"  cellspacing="0" cellpadding="0" >CONV-FACTOR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="20"  cellspacing="0" cellpadding="0" style=" "><input type="text" class="normal" name="f64"></td>
							
						</tr>
						
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40"   >
						<table width="40" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" >QUANTITY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="20" cellspacing="0" cellpadding="0" style=" "><input type="text" class="normal" name="f65"></td>
						
						</tr>
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40" >
						<table width="40" cellspacing="0" cellpadding="0" >
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" style=" font-size:11px">TOT UNIT VAL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="normal1" name="f66"></td>
						
						</tr>
						
						</table>
						
					</td>
					
				</tr>
				<tr>
					<td width="50" >
						<table width="50" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
							<td width="20" height="30" cellspacing="0" cellpadding="0" >MILL-LOT-NO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td width="20" height="30" cellspacing="0" cellpadding="0" style=" ">
							
							<input type="text" class="normal" name="f67">
							</td>
						</tr>
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40">
						<table width="40" cellspacing="0" cellpadding="0">
						<tr  style="height:20px">
						<td width="20"  cellspacing="0" cellpadding="0" >CONV-BALES&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="20"  cellspacing="0" cellpadding="0" ><input type="text" class="normal" name="f68"></td>
						
						</tr>
						
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40"   >
						<table width="40" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" >GROSS WEIGHT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width="20" cellspacing="0" cellpadding="0" style=" "><input type="text" class="normal" name="f69"></td>
						
						</tr>
						
						</table>
						
					</td>
					<td style="width:4px;border:none;"></td>
					<td width="40" >
						<table width="40" cellspacing="0" cellpadding="0" >
						<tr style="height:20px">
						<td width="20" cellspacing="0" cellpadding="0" style=" font-size:11px">AMOUNT <BR> BASIC VALUE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="normal1" name="f70"><input type="text" class="normal1" name="f71"></td>
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
		<td width="300">
			<table width"500" cellspacing="0" cellpadding="0" style="border:1px solid black;">
				<tr>
					<td width="50" >
						<table width="50" cellspacing="0" cellpadding="0">
						<tr style="height:20px">
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="checkbox" name="f72" value="checked"></td>
						<td width="20" cellspacing="0" cellpadding="0" style=" font-size:11px">DISCOUNT </td>
						
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text4" name="f73"></td>
						<td style="width:3px"></td>
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text3" name="f74"></td>
						</tr>
						
						<tr><td height="5"></td></tr>
						
						<tr style="height:20px">
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="checkbox" name="f75" value="checked"></td>
						<td width="20" cellspacing="0" cellpadding="0" style=" font-size:11px">INSURANCE </td>
						
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text4" name="f76"></td>
						<td style="width:3px"></td>
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text3" name="f77"></td>
						</tr>
						
						<tr><td height="5"></td></tr>
						
						<tr style="height:20px">
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="checkbox" name="f78" value="checked"></td>
						<td width="20" cellspacing="0" cellpadding="0" style=" font-size:11px">P AND F</td>
						
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text4" name="f79"></td>
						<td style="width:3px"></td>
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text3" name="f80"></td>
						</tr>
					
						<tr><td height="5"></td></tr>
						
						<tr style="height:20px">
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="checkbox" name="f81" value="checked"></td>
						<td width="20" cellspacing="0" cellpadding="0" style=" font-size:11px">FRIEGHT</td>
						
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text4" name="f82"></td>
						<td style="width:3px"></td>
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text3" name="f83"></td>
						</tr>
						
						<tr><td height="5"></td></tr>
						
						<tr style="height:20px">
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="checkbox" name="f84" value="checked"></td>
						<td width="20" cellspacing="0" cellpadding="0" style=" font-size:11px">COURIER</td>
						
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text4" name="f85"></td>
						<td style="width:3px"></td>
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text3" name="f86"></td>
						</tr>
						
						<tr><td height="5"></td></tr>
						
						<tr style="height:20px">
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="checkbox" name="f87" value="checked"></td>
						<td width="20" cellspacing="0" cellpadding="0" style=" font-size:11px">B.E.D</td>
						
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text4" name="f88"></td>
						<td style="width:3px"></td>
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text3" name="f89"></td>
						</tr>
						
						<tr><td height="5"></td></tr>
						
						<tr style="height:20px">
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="checkbox" name="f90" value="checked"></td>
						<td width="20" cellspacing="0" cellpadding="0" style=" font-size:11px">A.E.D</td>
						
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text4" name="f91"></td>
						<td style="width:3px"></td>
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text3" name="f92"></td>
						</tr>
						
						<tr><td height="5"></td></tr>
						
						<tr style="height:20px">
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="checkbox" name="f93" value="checked"></td>
						<td width="20" cellspacing="0" cellpadding="0" style=" font-size:11px">CESS</td>
						
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text4" name="f94"></td>
						<td style="width:3px"></td>
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text3" name="f95"></td>
						</tr>
						
						<tr><td height="5"></td></tr>
						
						<tr style="height:20px">
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="checkbox" name="f96" value="checked"></td>
						<td width="20" cellspacing="0" cellpadding="0" style=" font-size:11px">A.P.VAT</td>
						
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text4" name="f97"></td>
						<td style="width:3px"></td>
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text3" name="f98"></td>
						</tr>
						
						<tr><td height="5"></td></tr>
						
						<tr style="height:20px">
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="checkbox" name="f99" value="checked"></td>
						<td width="20" cellspacing="0" cellpadding="0" style=" font-size:11px">CST</td>
						
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text4" name="f100"></td>
						<td style="width:3px"></td>
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text3" name="f101"></td>
						</tr>
						
						<tr><td height="5"></td></tr>
						
						<tr style="height:20px">
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="checkbox" name="f102" value="checked"></td>
						<td width="20" cellspacing="0" cellpadding="0" style=" font-size:11px">EPCG</td>
						
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text4" name="f103"></td>
						<td style="width:3px"></td>
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text3" name="f104"></td>
						</tr>
						
						<tr><td height="5"></td></tr>
						
						<tr style="height:20px">
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="checkbox" name="f105" value="checked"></td>
						<td width="20" cellspacing="0" cellpadding="0" style=" font-size:11px">OTHERS</td>
						
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text4" name="f106"></td>
						<td style="width:3px"></td>
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text3" name="f107"></td>
						</tr>
						
						<tr><td height="5"></td></tr>
						
						<tr style="height:20px">
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="checkbox" name="f108" value="checked"></td>
						<td width="20" cellspacing="0" cellpadding="0" style=" font-size:11px">MISLANIOUS</td>
						
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text4" name="f109"></td>
						<td style="width:3px"></td>
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text3" name="f110"></td>
						</tr>
						
						<tr><td height="5"></td></tr>
						
						<tr style="height:20px">
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="checkbox" name="f111" value="checked"></td>
						<td width="20" cellspacing="0" cellpadding="0" style=" font-size:11px">AMC</td>
						
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text4" name="f112"></td>
						<td style="width:3px"></td>
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text3" name="f113"></td>
						</tr>
						
						<tr><td height="5"></td></tr>
						
						<tr style="height:20px">
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="checkbox" name="f114" value="checked"></td>
						<td width="20" cellspacing="0" cellpadding="0" style=" font-size:11px">TDS AMOUNT</td>
						
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text4" name="f115"></td>
						<td style="width:3px"></td>
						<td width="5" cellspacing="0" cellpadding="0" style=" "><input type="text" class="text3" name="f116"></td>
						</tr>
						
						</table>
	
					</td>
					<td width="900" style="border:1px solid black">
					
							<table width"700" cellspacing="0" cellpadding="0" style="margin-top:0px;">
								<!--<tr  style="border:1px solid black;height:40px">
									<td cellspacing="0" cellpadding="0" style=" " class="width"></td>
									<td width="5" cellspacing="0" cellpadding="0" style=" "><img src="excel.jpg"></td>
								</tr>-->
								
								<tr  style="border:1px solid black;height:20px;margin-top:0px;" class="width">
									
									<th style="font-size:12px">DISCOUNT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
									<th style="font-size:12px">INSURANCE&nbsp;&nbsp;&nbsp;&nbsp;</th> 
									<th style="font-size:12px">P &amp; F&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
									<th style="font-size:12px">FRIEGHT&nbsp;&nbsp;&nbsp;&nbsp;</th>
									<th style="font-size:12px">COURIER&nbsp;&nbsp;&nbsp;&nbsp;</th> 
									<th style="font-size:12px">BED&nbsp;&nbsp;&nbsp;&nbsp;</th>
									<th style="font-size:12px">AED&nbsp;&nbsp;&nbsp;&nbsp;</th>
									<th style="font-size:12px">CESS&nbsp;&nbsp;&nbsp;&nbsp;</th> 
									<th style="font-size:12px">APVAT&nbsp;&nbsp;&nbsp;&nbsp;</th>
									<th style="font-size:12px">CST&nbsp;&nbsp;&nbsp;&nbsp;</th>
								</tr>
								<tr style="height:20px">
									<td><input type="text" class="text" name="f117"></td>
									<td><input type="text"class="text" name="f118"></td> 
									<td><input type="text"class="text" name="f119"></td>
									<td cellspacing="3"><input type="text"class="text" name="f120"></td>
									<td cellspacing="3"><input type="text"class="text" name="f121"></td> 
									<td cellspacing="3"><input type="text"class="text" name="f122"></td>
									<td><input type="text"class="text" name="f123"></td>
									<td><input type="text"class="text" name="f124"></td> 
									<td><input type="text"class="text" name="f125"></td>
									<td><input type="text"class="text" name="f126"></td>
								</tr>
								<tr><td height="5"></td></tr>
								<tr style="height:20px">
								<tr  style="border:1px solid black;height:20px;" class="width">
									
									<th style="font-size:12px">EPCG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
									<th style="font-size:12px">OTHERS&nbsp;&nbsp;&nbsp;&nbsp;</th> 
									<th style="font-size:12px">MISLANIOUS&nbsp;&nbsp;&nbsp;&nbsp;</th>
									<th style="font-size:12px">AMC&nbsp;&nbsp;&nbsp;&nbsp;</th>
									<th style="font-size:12px">TDS&nbsp;&nbsp;&nbsp;&nbsp;</th> 
									<th style="font-size:12px">TOTAL AMOUNT&nbsp;&nbsp;&nbsp;&nbsp;</th>
									<th style="font-size:12px">TOTAL BILL AMOUNT&nbsp;&nbsp;&nbsp;&nbsp;</th>
									<th style="font-size:12px">TOTAL KGS&nbsp;&nbsp;&nbsp;&nbsp;</th> 
									 </tr>
								<tr style="height:20px">
								
									<td><input type="text" class="text" name="f127"></td>
									<td><input type="text"class="text" name="f128"></td> 
									<td><input type="text"class="text" name="f129"></td>
									<td><input type="text"class="text" name="f130"></td>
									<td><input type="text"class="text" name="f131"></td> 
									<td><input type="text"class="normal" name="f132"></td>
									<td><input type="text"class="normal" name="f133"></td>
									<td><input type="text"class="normal" name="f134"></td> 
									 </tr>
								<tr style="height:20px">
								<tr style="height:20px">
								<tr>
								<td align="center" width="50"><input type="submit" value="SUBMIT" name="submit"></td>
								
								<td align="right" width="50"><input type="reset" value="CLEAR"></td>
								</tr>
							</table>
						</td>
					
					
				</tr>
			</table>	
		</td>	
	</tr>
	</table>
	
</form>
</body>


	<?php
	session_start();
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
$a36=$_POST['f36'];
$a37=$_POST['f37'];
$a38=$_POST['f38'];
$a39=$_POST['f39'];
$a40=$_POST['f40'];
$a41=$_POST['f41'];
$a42=$_POST['f42'];
$a43=$_POST['f43'];
$a44=$_POST['f44'];
$a45=$_POST['f45'];
$a46=$_POST['f46'];
$a47=$_POST['f47'];
$a48=$_POST['f48'];
$a49=$_POST['f49'];
$a50=$_POST['f50']; 
$a51=$_POST['f51'];
$a52=$_POST['f52'];
$a53=$_POST['f53'];
$a54=$_POST['f54'];
$a55=$_POST['f55'];
$a56=$_POST['f56'];
$a57=$_POST['f57']; 
$a58=$_POST['f58'];
$a59=$_POST['f59']; 
$a60=$_POST['f60'];
$a61=$_POST['f61']; 
$a62=$_POST['f62'];
$a63=$_POST['f63']; 
$a64=$_POST['f64']; 
$a65=$_POST['f65']; 
$a66=$_POST['f66']; 
$a67=$_POST['f67']; 
$a68=$_POST['f68']; 
$a69=$_POST['f69']; 
$a70=$_POST['f70']; 
$a71=$_POST['f71']; 
$a72=$_POST['f72']; 
$a73=$_POST['f73']; 
$a74=$_POST['f74']; 
$a75=$_POST['f75']; 
$a76=$_POST['f76']; 
$a77=$_POST['f77']; 
$a78=$_POST['f78']; 
$a79=$_POST['f79']; 
$a80=$_POST['f80']; 
$a81=$_POST['f81']; 
$a82=$_POST['f82']; 
$a83=$_POST['f83']; 
$a84=$_POST['f84']; 
$a85=$_POST['f85']; 
$a86=$_POST['f86']; 
$a87=$_POST['f87']; 
$a88=$_POST['f88']; 
$a89=$_POST['f89']; 
$a90=$_POST['f90']; 
$a91=$_POST['f91']; 
$a92=$_POST['f92']; 
$a93=$_POST['f93']; 
$a94=$_POST['f94']; 
$a95=$_POST['f95']; 
$a96=$_POST['f96']; 
$a97=$_POST['f97']; 
$a98=$_POST['f98']; 
$a99=$_POST['f99']; 
$a100=$_POST['f100']; 
$a101=$_POST['f101']; 
$a102=$_POST['f102']; 
$a103=$_POST['f103']; 
$a104=$_POST['f104']; 
$a105=$_POST['f105']; 
$a106=$_POST['f106']; 
$a107=$_POST['f107']; 
$a108=$_POST['f108']; 
$a109=$_POST['f109']; 
$a110=$_POST['f110']; 
$a111=$_POST['f111']; 
$a112=$_POST['f112']; 
$a113=$_POST['f113']; 
$a114=$_POST['f114']; 
$a115=$_POST['f115']; 
$a116=$_POST['f116']; 
$a117=$_POST['f117']; 
$a118=$_POST['f118']; 
$a119=$_POST['f119']; 
$a120=$_POST['f120']; 
$a121=$_POST['f121']; 
$a122=$_POST['f122']; 
$a123=$_POST['f123']; 
$a124=$_POST['f124']; 
$a125=$_POST['f125']; 
$a126=$_POST['f126']; 
$a127=$_POST['f127']; 
$a128=$_POST['f128']; 
$a129=$_POST['f129']; 
$a130=$_POST['f130']; 
$a131=$_POST['f131']; 
$a132=$_POST['f132']; 
$a133=$_POST['f133']; 
$a134=$_POST['f134'];  

include 'db.php';


$q=mysql_query("INSERT INTO `purchaseentry`(`id`, `purorder`, `finalprovisional`, `despatchedfrom`, `amcno`, `amcnoo`, `transactiontype`, `suppbillno`, `suppbillnodate`, `portofloading`, `portofloadingdischarge`, `amcplace`, `inwardno`, `suppliernamme`, `finaldestination`, `epcgno`, `inwarddate`, `partyvatno`, `modeoftransport`, `otlno`, `billtype`, `agent`, `vehicleregno`, `cexrangeno`, `import`, `purchasecontractno`, `purchasecontractnodate`, `containerno`, `currencytype`, `currencytypee`, `importtype`, `importref`, `vesselflieht`, `conversion`, `conversionn`, `purchasemode`, `duedays`, `duedayss`, `lrno`, `ratetime`, `ratetimedate`, `state`, `termsofdelivery`, `waybillno`, `purchasecotton`, `itemname`, `deliverywt`, `tarewt`, `verity`, `pressmarkno`, `quality`, `allowance`, `sizecount`, `bagslno`, `bagslnoto`, `units`, `netwt`, `typeofpack`, `bagtype`, `bagsize`, `unittobeconvert`, `unittobeconvertt`, `rate`, `partylotno`, `convfactor`, `quantity`, `totunitval`, `milllotno`, `convbales`, `grosswt`, `amount`, `basicval`, `discountcheck`, `discountper`, `discountval`, `insurancecheck`, `insuranceper`, `insuranceval`, `pfcheck`, `pfper`, `pfval`, `frieghtcheck`, `frieghtper`, `frieghtval`, `couriercheck`, `courierper`, `courierval`, `bedcheck`, `bedper`, `bedval`, `aedcheck`, `aedper`, `aedval`, `cesscheck`, `cessper`, `cessval`, `vatcheck`, `vatper`, `vatval`, `cstcheck`, `cstper`, `cstval`, `epcgcheck`, `epcgper`, `epcgval`, `otherscheck`, `othersper`, `othersval`, `mislaniuscheck`, `mislaniusper`, `mislaniusval`, `amccheck`, `amcper`, `amcval`, `tdsamtcheck`, `tdsamtper`, `tdsamtval`, `discount`, `insurance`, `pf`, `fright`, `courier`, `bed`, `aed`, `cess`, `vat`, `cst`, `epcg`, `others`, `mislanius`, `amc`, `tds`, `totamt`, `totbillamt`, `totkgs`) VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24','$a25','$a26','$a27','$a28','$a29','$a30','$a31','$a32','$a33','$a34','$a35','$a36','$a37','$a38','$a39','$a40','$a41','$a42','$a43','$a44','$a45','$a46','$a47','$a48','$a49','$a50','$a51','$a52','$a53','$a54','$a55','$a56','$a57','$a58','$a59','$a60','$a61','$a62','$a63','$a64','$a65','$a66','$a67','$a68','$a69','$a70','$a71','$a72','$a73','$a74','$a75','$a76','$a77','$a78','$a79','$a80','$a81','$a82','$a83','$a84','$a85','$a86','$a87','$a88','$a89','$a90','$a91','$a92','$a93','$a94','$a95','$a96','$a97','$a98','$a99','$a100','$a101','$a102','$a103','$a104','$a105','$a106','$a107','$a108','$a109','$a110','$a111','$a112','$a113','$a114','$a115','$a116','$a117','$a118','$a119','$a120','$a121','$a122','$a123','$a124','$a125','$a126','$a127','$a128','$a129','$a130','$a131','$a132','$a133','$a134')");




if($q)
echo "<script>alert('Data Inserted');window.location='purchaseentry.php';</script>";
  

}




    ?>




 
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

</html>	