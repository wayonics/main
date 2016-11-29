<?php
session_start();
if($_SESSION['user'])
{
?><html>

<head>

<title>Jyotirmay Report</title>

</head>

<?php
//session_start();
?>

<body>

	<table width="1000" cellspacing="0" cellpadding="0" border="1" align="center">
	<tr>
		<td width="1000" height="230"><img src="edited.jpg"></td>
	</tr>
	<tr>
			<td width="1000" height="150">
			<table width"1000" height="150" cellspacing="0" cellpadding="0">
				<tr>
					<td width="250" height="150" style="border:1px solid black;">
					
					<h4 style="text-align:center">TIN NO: 37600609399</h4>
					<h4 style="text-align:center">CST NO: 37600609399</h4>
					<h4 style="text-align:center">Tel  &nbsp &nbsp &nbsp :08647 - 212699</h4>
					<h4 style="text-align:center">&nbsp &nbsp 37600609399</h4>
					
					</td>
					<td width="500" height="150" style="border:1px solid black;">
					
						<p >Range &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp :Range-II, Guntur,The Sup.of Central Excise,4/17,</p>
						<p> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp Brodipet,Guntur. </p>
						
						
						<p >Division  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp :Asst.Commissioner of central Excise,4/17,</p>
						<p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp Brodipet,Commisionarate,Guntur.</p>
						
						
						<p >Corporate Identity No. :U17291AP2009PTC066049. </p>
						
						<p >E.C.C .NO. &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :AACCJ2751LEM001. </p>
						
						<p >PAN  No &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :AACCJ2751L. </p>
					
					</td>
					<td width="250" height="150">
						
						<table width="250" height="240" cellspacing="0" cellpadding="0">
							<tr><td width="250" height="30"style="border:1px solid black;">
							
								<p>Invoice No. :<?php echo  $inv=$_SESSION['invno']; ?> </p>
							
							</td></tr>
							<tr><td width="250" height="30" style="border:1px solid black;">
							
								<p>DATE &nbsp &nbsp :<?php echo date('d/m/Y'); ?></p>
							
							</td></tr>
							<tr><td width="250" height="30" style="border:1px solid black;">
							
								<p>Notification NO.:30/2004-CE(NT) Dt.09-07-2004</p>
							
							</td></tr>
							
							<tr><td width="250" height="30" style="border:1px solid black;">
							
								<p>Tariff Heading No.5205.11</p>
							</td></tr>
							<tr><td width="250" height="30" style="border:1px solid black;">
							
								<p>IEC No:0910000093</p>
							</td></tr>
						</table>
					
					</td>
				</tr>
			</table>
		</td>
		
	</tr>
	
	<tr>
			<td width="1000" height="150"  >
			<table width"1000" height="150" cellspacing="0" cellpadding="0">
				<tr>
					<td width="500" height="150" style="border:1px solid black;">
					
						<p> &nbsp &nbsp Name and Address of the Consignee</p>
						<h4> &nbsp &nbsp <?php echo 	 
$_SESSION['buyer']; ?></h4>
						<p align="center">Rajarshi Sahu Market,Block No.4</p>
						<p align="center"> Ist Floor</p>
						<p align="center">Ichalkaranji-416115.</p>
						<h4> &nbsp &nbsp Pan No:0</h4>
						<h4> &nbsp &nbsp Delivary at :</h4>
					</td>
					<td width="500" height="150" style="border:1px solid black;">
					
						<p>Date and Time of Issue of Invoice &nbsp: <?php  echo $_SESSION['invissuedate']; ?> &nbsp &nbsp <?php  echo  $_SESSION['invissuetime']; ?> &nbsp &nbsp Hours: </p>
						<p>Date and Time of removal of goods :  <?php  echo $_SESSION['goodsreomvedate']; ?>  &nbsp &nbsp  <?php  echo $_SESSION['goodsreomvetime']; ?> &nbsp &nbsp Hours: </p>
						<p>Confirmation No &nbsp &nbsp :607,DTPP</p>
						<p>Vehicle Regn.No.&nbsp  &nbsp :<?php echo 
$_SESSION['vehicleregno']; ?> </p>
						<p>Transport Name &nbsp  &nbsp  &nbsp :<?php echo 
$_SESSION['transport']; ?></p>
						<p>LR NO &nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :<?php echo $_SESSION['lrno']; ?></p>
						<p>Party TIN No &nbsp  &nbsp &nbsp &nbsp &nbsp  :
<?php echo $_SESSION['partyno']; ?></p>
						<p>CST No &nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : <?php echo $_SESSION['partyno']; ?></p>
						<p>Agent &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :<?php echo $_SESSION['agent']; ?></p>
					</td>
					
				</tr>
			</table>
		</td>
		
	</tr>
	<tr>
			<td width="1000" height="40" >
			<table width"1000" height="40" cellspacing="0" cellpadding="0">
				<tr>
					<td width="100" height="40" style="border:1px solid black;">
					
						<h4 align="center">Sl NO</h4>
						
					</td>
					<td width="500" height="40" style="border:1px solid black;">
					
						<h4 align="center">Description Of Goods</h4>
						
					</td>
					<td width="80" height="40" style="border:1px solid black;">
					
						<h4 align="center">No.of Packages</h4>
						
					</td>
					<td width="80" height="40" style="border:1px solid black;">
					
						<h4 align="center">Qty in Kgs</h4>
						
					</td>
					<td width="80" height="40" style="border:1px solid black;">
						
						<h4 align="center">Rate Per Kg Rs</h4>
					
					</td>
					<td width="150" height="40" style="border:1px solid black;">
					
						<h4 align="center">Total Value Rs</h4>
					
					</td>
				</tr>
			</table>
		</td>
		
	</tr>
	<tr>
			<td width="1000" height="220" >
			<table width"1000" height="220" cellspacing="0" cellpadding="0">
				<tr>
					<td width="100" height="220" style="border:1px solid black; text-align:center">1</td>
					<td width="500" height="220" style="border:1px solid black;">
					
						<h4>100% COTTON CONE YARN</h4>
						<h4>Ne 10/1 COMBED HOSIERY</h4>
						<h4>AUTO CONED SIRO CLEARED</h4>
						<h4>Each bag contains &nbsp 24*2.00</h4>
						<h5>Cones Of 48.00  Kgs Net </h5>
						<p>LOT NO: 1, CE NO: 1 TO 100</p>
						
					
					</td>
					<td width="80" height="220" style="border:1px solid black;">
					
						<p align="center"><?php echo $_SESSION['bags']; ?></p>
						<p>CARTOON</p>
					
					</td>
					<td width="80" height="220" style="border:1px solid black;">
					
						<p align="center"><?php echo $_SESSION['amount']; ?></p>
					
					</td>
					<td width="80" height="220" style="border:1px solid black;">
					
						<p align="center"><?php echo $_SESSION['rate']; ?></p>
						
					</td>
					<td width="150" height="220" style="border:1px solid black;">
					
						<p align="center"><?php echo $_SESSION['amount']; ?></p>
					
					</td>
				</tr>
			</table>
		</td>
		
	</tr>
	<tr>
			<td width="1000" height="220" >
			<table width"1000" height="220" cellspacing="0" cellpadding="0">
				<tr>
					<td width="800" height="220" style="border:1px solid black;">
					
						<table width"800" height="220" cellspacing="0" cellpadding="0">
							<tr>
								<td width="400" height="220">
								
									<h4>Gross Wt (Kgs) &nbsp &nbsp  &nbsp  &nbsp  &nbsp :<?php echo $_SESSION['gross']; ?></h4>
									<h4>Net Wt (Kgs) &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  :<?php echo $_SESSION['netwt']; ?></h4>
									<h4>Waybill No &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp :<?php echo $_SESSION['waybillno']; ?></h4>
									<h4>Insurance Policy No. &nbsp : XXX</h4>
								
								</td>
								<td width="400" height="220" >
								
									<p align="center"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Total Assessable Value</p>
									<p align="center" style="line-height:10px"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Add : Yarn Cess 0.05% </p>
									<p align="right" style="line-height:10px">Basic Excise Duty @ ----------%</p>
									<p align="right" style="line-height:10px">A E D @--------- % on BED Rs.</p>
									<p align="center" style="line-height:10px"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Total Excise duty payable  ----     </p>
									<p align="center" style="line-height:10px"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp Transport Charges</p>
									<p align="center" style="line-height:10px"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Insurance</p>
									<h4 align="center" style="line-height:10px">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  CST @ 2 % </h4>
									<h4 align="center" style="line-height:10px">This Sales isAgainst "C" FORM UNDER "E1" SALE</h4>
								
								
								</td>
					
							</tr>
						</table>
					
					
					</td>
					<td width="200" height="220" style="border:1px solid black;">
					
						<p align="right">48000.00</p><br><br><br>
						<p align="right">2000.00</p>
						<p align="right" style="line-height:10px">48.00</p><br>
						<p align="right">1001.00</p>
					
					
					</td>
					
				</tr>
			</table>
		</td>
		
	</tr>
	<tr>
			<td width="1000" height="40" >
			<table width"1000" height="40" cellspacing="0" cellpadding="0">
				<tr>
					<td width="800" height="40" style="border:1px solid black;">
					
						<p><b>Inwords :Rs</b> &nbsp &nbsp FIFTY ONE THOUSAND FORTY NINE ONLY &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<b>TOTAL</b></p>
					
					</td>
					<td width="200" height="40" style="border:1px solid black;">
					
						<p align="right"> 51049.00 </p>
					
					</td>
					
				</tr>
			</table>
		</td>
		
	</tr>
	<tr>
			<td width="1000" height="200" >
			<table width"1000" height="200" cellspacing="0" cellpadding="0">
				<tr>
					<td width="1000" >
					
						<p> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Certified that the particulars given above are true and correct and the amount indicated represents the price actually charged and that 
							there is no flow of additional consideration directly or indirectly from the buyer<br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp OR<br>
							&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Certified that the particulars given above are true and correct and the amount indicated is provisionals as additional consideration will be 
							received from the buyer on account of___________________________________________________________
			  
						</p>
					
					
					</td>
					
					
				</tr>
				<tr>
					<td width="1000"  >
						<table width"1000"  cellspacing="0" cellpadding="0">
						
							<td width="500" > 
							
								<table width="300 " height="100">
								
									<td width="200" height="100" style="border:2px solid black;">
										<h4>Our Bank    : ANDHRA BANK, GUNTUR </h4>
										<h4>A/c No : 015013100000283</h4>
										<h4>RTGS Code : ANDB0000150 </h4>
									</td>
								
								</table>
							
							
							</td>
							<td width="500"  >							
							<p align="center">For <b>JYOTIRMAYE TEXTILES PVT.LTD.</b></p><br><br>
							<p align="center">Authorised Signatory</p>
							
							
							
							</td>
						
					
						</table>
					
					</td>
					
					
					
				</tr>
			</table>
		</td>
		
	</tr>&nbsp &nbsp
	<tr>
			<td width="1000" height="40" >
			<table width"1000" height="40" cellspacing="0" cellpadding="0">
				<tr>
					<td width="1000" height="40" style="border:1px solid black;">
					
						<h4 align="center" > Subject To Narasaraopet Jurisdiction</h4>
					
					</td>
					
					
				</tr>
			</table>
		</td>
		
	</tr>

		
	</table>
	
	<button onClick="p()">PRINT</button>
	
	
	
	<script>
	function p()
	{
	window.print();
	
	}
	
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
