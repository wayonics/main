<html>

<head>

<title>Jyotirmay Texttiles</title>

</head>


<body>

<?php
session_start();
  $dt1=$_SESSION['date1'];
  $dt2=$_SESSION['date2'];


date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 

?> 


	<table width="1000" cellspacing="0" cellpadding="0" align="center">
	<tr>
		<td width="1000" height="80"><p align="center" style="font-size:20px;margin-bottom:0px;margin-top:20px"><b>JYOTIRMAYE TEXTILES PVT. LTD.</b></p></td>
	</tr>
	<tr>
	<td><p align="center" style="font-size:15px;margin-top:0px;margin-bottom:10px">#11-12-12, RAMIREDDYPET, NARASARAOPET,GUNTUR D.T.</p></td>
	</tr>
	<tr>
	<td><p style="font-size:15px;margin-top:0px;margin-bottom:30px">AUTOCONER COUNTWISE DAILY PRODUCTION STATEMENT ON  <?php echo $dt1 ?></p></td>
	</tr>
	<tr>
			<td width="1000" height="300">
			<table width"1000" height="300" cellspacing="0" cellpadding="0">
				<tr height="300">
					<td width="250" height="300" style="border:1px solid black;">
						<table width="250" height="240" cellspacing="0" cellpadding="0">
						<tr style="height:30px" align="center">
							<td width="40" height="30" cellspacing="0" cellpadding="0" style=" " align="center" colspan="6"><p align="center">1st Shift</p>	</td>
						</tr>
						<tr height="50">
							<td width="40" height="50" style="border:1px solid black;font-size:13px" >Count</td>
							 <td width="40" height="50" style="border:1px solid black;font-size:13px">M/C NO</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">Altd Drums</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">Prod kgs</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">prod/each drum</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">efficiency</td>
							 
						</tr>
						
						<?php
						include 'db.php'; 
						 
 $sum=mysql_query("select count(*) from `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Day Shift'");
 $sum1=mysql_fetch_array($sum);
   $mc1=$sum1[0];
						
 $q=mysql_query("SELECT * FROM `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Day Shift'")or die(mysql_error());
  
 while($a=mysql_fetch_array($q))
 { 
 ?>
 
                 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['count']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['mno']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['noofdrums']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['prdn']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['prodeachdrum']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['standardefficiency']; ?></td>
				  </tr>
						
 
  <?php
 
 }  
 ?>
			 			</table>
						
					</td>
					<td style="width:3px;border:none;"></td>
					<td width="200" height="300" style="border:1px solid black;">
						<table width="200" height="240" cellspacing="0" cellpadding="0">
						<tr style="height:30px">
						<td width="40" height="30" cellspacing="0" cellpadding="0" style=" "colspan="6"><p align="center">IInd Shift</td>
						</tr>
						<td width="40" height="50" style="border:1px solid black;font-size:13px" >Count</td>
							 <td width="40" height="50" style="border:1px solid black;font-size:13px">M/C NO</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">Altd Drums</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">Prod kgs</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">prod/each drum</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">efficiency</td>
							 
						</tr>
						
						<?php
						include 'db.php'; 
						 
 $sum=mysql_query("select count(*) from `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Evening Shift'");
 $sum1=mysql_fetch_array($sum);
   $mc1=$sum1[0];
						
 $q=mysql_query("SELECT * FROM `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Evening Shift'")or die(mysql_error());
  
 while($a=mysql_fetch_array($q))
 { 
 ?>
 
                 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['count']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['mno']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['noofdrums']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['prdn']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['prodeachdrum']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['standardefficiency']; ?></td>
				  </tr>
						
 
  <?php
 
 }  
 ?>
			 			</table>
					</td>
					<td style="width:10px;border:none;"></td>
					<td width="200" height="300" style="border:1px solid black;">
						<table width="200" height="240" cellspacing="0" cellpadding="0">
						<tr style="height:30px">
						<td width="40" height="30" cellspacing="0" cellpadding="0" style=" "colspan="6"><p align="center">IIIrd Shift</td>
						</tr>
						<td width="40" height="50" style="border:1px solid black;font-size:13px" >Count</td>
							 <td width="40" height="50" style="border:1px solid black;font-size:13px">M/C NO</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">Altd Drums</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">Prod kgs</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">prod/each drum</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">efficiency</td>
							 
						</tr>
						
						<?php
						include 'db.php'; 
						 
 $sum=mysql_query("select count(*) from `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Night Shift'");
 $sum1=mysql_fetch_array($sum);
   $mc1=$sum1[0];
						
 $q=mysql_query("SELECT * FROM `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Night Shift'")or die(mysql_error());
  
 while($a=mysql_fetch_array($q))
 { 
 ?>
 
                 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['count']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['mno']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['noofdrums']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['prdn']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['prodeachdrum']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['standardefficiency']; ?></td>
				  </tr>
						
 
  <?php
 
 }  
 ?>
			 			</table>
						
					</td>
					<td style="width:3;border:none;"></td>
					<td width="300" height="300" style="border:1px solid black;">
						<table width="300" height="240" cellspacing="0" cellpadding="0">
						<tr style="height:30px">
						<td width="40" height="30" cellspacing="0" cellpadding="0" style=" "colspan="6"><p align="center">Total Day</td>
						</tr>
						<tr height="50">
							 
							 <td width="40" height="50" style="border:1px solid black;font-size:13px">M/C NO</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">Altd Drums</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">Prod kgs</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">prod/each drum</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">efficiency</td>
							 </tr>
							 <?php
						include 'db.php'; 
						
	$std=mysql_query("select count(*) from `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2'")or die(mysql_error());
 $std1=mysql_fetch_array($std);
  $mcno=$std1[0];
 
						
						 
 $std=mysql_query("select sum(noofdrums) from `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2'")or die(mysql_error());
 $std1=mysql_fetch_array($std);
  $tspndls=$std1[0];
 
 
 $w=mysql_query("select sum(prdn) from `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2'")or die(mysql_error());
 $w1=mysql_fetch_array($w);
  $wspndls=$w1[0];
 
 
 $tp=mysql_query("select sum(prodeachdrum) from `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2'")or die(mysql_error());
 $tp1=mysql_fetch_array($tp);
  $tprod=$tp1[0];
 
 
 $ap=mysql_query("select sum(standardefficiency) from `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2'")or die(mysql_error());
 $ap1=mysql_fetch_array($ap);
  $aprod=$ap1[0];
  
 ?>
   
                  <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $mcno; ?></td>
				  <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $tspndls; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo  $wspndls;; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $tprod; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $aprod; ?></td>
				  
				  </tr>
						
   
		
 </table>
						
					</td>
					
				</tr>
				
			</table>
		</td>
		
	</tr>
	<tr><td style="width:1000px;height:4px;border:none;"></td></tr>
	<tr>
			<td width="1000" height="50">
			<table width"1000" height="50" cellspacing="0" cellpadding="0">
				<tr height="50">
					<td width="250" height="20" style="border:1px solid black;">
						<table width="250" height="50" cellspacing="0" cellpadding="0">
						
						<?php
				$std=mysql_query("select count(*) from `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Day Shift'")or die(mysql_error());
 $std1=mysql_fetch_array($std);
  $mcno=$std1[0];
 
						
						 
 $std=mysql_query("select sum(noofdrums) from `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2'  and shift='Day Shift'")or die(mysql_error());
 $std1=mysql_fetch_array($std);
  $tspndls=$std1[0];
 
 
 $w=mysql_query("select sum(prdn) from `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2'  and shift='Day Shift'")or die(mysql_error());
 $w1=mysql_fetch_array($w);
  $wspndls=$w1[0];
 
 
 $tp=mysql_query("select sum(prodeachdrum) from `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2'  and shift='Day Shift'")or die(mysql_error());
 $tp1=mysql_fetch_array($tp);
  $tprod=$tp1[0];
 
 
 $ap=mysql_query("select sum(standardefficiency) from `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2'  and shift='Day Shift'")or die(mysql_error());
 $ap1=mysql_fetch_array($ap);
  $aprod=$ap1[0];
						?>
						 
						<tr height="50">
							<td width="40" height="50" style="border:1px solid black;font-size:15px" >-----</td>
					 
							  <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $mcno; ?></td>
				  <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $tspndls; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo  $wspndls;; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $tprod; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $aprod; ?></td>
				  
							  
						</tr>
						
						
						
						</table>
						
					</td>
					<td style="width:10;border:none;"></td>
					<td width="200" height="50" style="border:1px solid black;">
						<table width="200" height="50" cellspacing="0" cellpadding="0">
						<?php
				$std=mysql_query("select count(*) from `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Evening Shift'")or die(mysql_error());
 $std1=mysql_fetch_array($std);
  $mcno=$std1[0];
 
						
						 
 $std=mysql_query("select sum(noofdrums) from `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2'  and shift='Evening Shift'")or die(mysql_error());
 $std1=mysql_fetch_array($std);
  $tspndls=$std1[0];
 
 
 $w=mysql_query("select sum(prdn) from `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2'  and shift='Evening Shift'")or die(mysql_error());
 $w1=mysql_fetch_array($w);
  $wspndls=$w1[0];
 
 
 $tp=mysql_query("select sum(prodeachdrum) from `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2'  and shift='Evening Shift'")or die(mysql_error());
 $tp1=mysql_fetch_array($tp);
  $tprod=$tp1[0];
 
 
 $ap=mysql_query("select sum(standardefficiency) from `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2'  and shift='Evening Shift'")or die(mysql_error());
 $ap1=mysql_fetch_array($ap);
  $aprod=$ap1[0];
						?>
						 
						<tr height="50">
							<td width="40" height="50" style="border:1px solid black;font-size:15px" >-----</td>
					 
							  <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $mcno; ?></td>
				  <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $tspndls; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo  $wspndls;; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $tprod; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $aprod; ?></td>
				  
							  
						</tr>
						
						
						
						</table>
						
					</td>
					<td style="width:5px;;border:none;"></td>
					<td width="200" height="50" style="border:1px solid black;">
						<table width="250" height="50" cellspacing="0" cellpadding="0">
						<?php
				$std=mysql_query("select count(*) from `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Night Shift'")or die(mysql_error());
 $std1=mysql_fetch_array($std);
  $mcno=$std1[0];
 
						
						 
 $std=mysql_query("select sum(noofdrums) from `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2'  and shift='Night Shift'")or die(mysql_error());
 $std1=mysql_fetch_array($std);
  $tspndls=$std1[0];
 
 
 $w=mysql_query("select sum(prdn) from `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2'  and shift='Night Shift'")or die(mysql_error());
 $w1=mysql_fetch_array($w);
  $wspndls=$w1[0];
 
 
 $tp=mysql_query("select sum(prodeachdrum) from `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2'  and shift='Night Shift'")or die(mysql_error());
 $tp1=mysql_fetch_array($tp);
  $tprod=$tp1[0];
 
 
 $ap=mysql_query("select sum(standardefficiency) from `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2'  and shift='Night Shift'")or die(mysql_error());
 $ap1=mysql_fetch_array($ap);
  $aprod=$ap1[0];
						?>
						 
						<tr height="50">
							<td width="40" height="50" style="border:1px solid black;font-size:15px" >-----</td>
					 
							  <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $mcno; ?></td>
				  <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $tspndls; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo  $wspndls;; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $tprod; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $aprod; ?></td>
				  
							  
						</tr>
						
						</table>
						
					</td>
					<td style="width:5px;border:none;"></td>
					<td width="300"  style="border:1px solid black;">
						<table width="300"  cellspacing="0" cellpadding="0">
						 
							<?php
				$std=mysql_query("select count(*) from `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2'")or die(mysql_error());
 $std1=mysql_fetch_array($std);
  $mcno=$std1[0];
 
						
						 
 $std=mysql_query("select sum(noofdrums) from `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' ")or die(mysql_error());
 $std1=mysql_fetch_array($std);
  $tspndls=$std1[0];
 
 
 $w=mysql_query("select sum(prdn) from `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' ")or die(mysql_error());
 $w1=mysql_fetch_array($w);
  $wspndls=$w1[0];
 
 
 $tp=mysql_query("select sum(prodeachdrum) from `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' ")or die(mysql_error());
 $tp1=mysql_fetch_array($tp);
  $tprod=$tp1[0];
 
 
 $ap=mysql_query("select sum(standardefficiency) from `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' ")or die(mysql_error());
 $ap1=mysql_fetch_array($ap);
  $aprod=$ap1[0];
						?>
						 
						<tr height="50">
							<td width="40" height="50" style="border:1px solid black;font-size:15px" >-----</td>
					 
							  <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $mcno; ?></td>
				  <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $tspndls; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo  $wspndls;; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $tprod; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $aprod; ?></td>
				  
							  
						</tr>
						
					 
						
						
						
						</table>
						
					</td>
					
				</tr>
				
			</table>
		</td>
			
		</td>
		
	</tr>
	<tr>
			<td width="1000" height="30" >
			<table width"1000" height="30" cellspacing="0" cellpadding="0">
				<tr>
					<td width="100" height="30" ></td>
					<td width="500" height="30" >
					
						
					
					</td>
					<td width="100" height="30" >
					
						
					</td>
					<td width="100" height="30" >
					
						
					
					</td>
					<td width="158" height="30" >
						
					</td>
					
				</tr>
			</table>
		</td>
		
	</tr>
	
	<tr>
			<td width="1000" >
			<table width="1000" cellspacing="0" cellpadding="0">
				<tr>
					<td width="700" style="">
						<table width="700" cellspacing="0" cellpadding="0">
						<tr>
						<td width="700"  style="">
							<table width="700" cellspacing="0" cellpadding="0">
								 
							</table>
						</td>
						</tr>
 						<tr>
						
						<td width="600" height="" style="margin-top:20px">
					 
						
					</td>
					<td width="325" style="margin-top:0px">
						<table width="205" cellspacing="0" cellpadding="0">
						<tr>
							 
						</tr>
						</table>
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