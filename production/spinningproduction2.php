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
	<td><p style="font-size:15px;margin-top:0px;margin-bottom:30px">COUNTWISE DAILY PRODUCTION STATEMENT ON  <?php echo $dt1 ?></p></td>
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
							<td width="40" height="50" style="border:1px solid black;font-size:13px" >count <br>main<br>tained</td>
							 <td width="40" height="50" style="border:1px solid black;font-size:13px">M/C NO</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">Altd spls</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">Wrkd spls</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">Const</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">Std kgs</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">Act kgs</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">W%</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">GPS</td>
							
							
						</tr>
						
						<?php
						include 'db.php'; 
						 
 $sum=mysql_query("select count(*) from `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Day Shift'");
 $sum1=mysql_fetch_array($sum);
   $mc1=$sum1[0];
						
 $q=mysql_query("SELECT * FROM `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Day Shift'")or die(mysql_error());
  
 while($a=mysql_fetch_array($q))
 { 
 ?>
 
                 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['countcode']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['countmaintain']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['mcno']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['spdls']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['workedspdls']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['connstannt']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['stdkgs']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['actkgs']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['pneuwaste']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['gps']; ?></td>
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
						<tr height="50">
							<td width="40" height="50" style="border:1px solid black;font-size:13px" >Count</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px" >count <br>main<br>tained</td>
							 <td width="40" height="50" style="border:1px solid black;font-size:13px">M/C NO</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">Altd spls</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">Wrkd spls</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">Const</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">Std kgs</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">Act kgs</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">W%</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">GPS</td>
							
							
						</tr>
						<?php
						include 'db.php'; 
						 
 $sum=mysql_query("select count(*) from `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Evening Shift'");
 $sum1=mysql_fetch_array($sum);
 $mc2=$sum1[0];
						
 $q=mysql_query("SELECT * FROM `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Evening Shift'")or die(mysql_error());
  
 while($a=mysql_fetch_array($q))
 { 
 ?>
 
                 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['countcode']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['countmaintain']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['mcno']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['spdls']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['workedspdls']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['connstannt']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['stdkgs']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['actkgs']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['pneuwaste']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['gps']; ?></td>
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
						<tr height="50">
							<td width="40" height="50" style="border:1px solid black;font-size:13px" >Count</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px" >count <br>main<br>tained</td>
							 <td width="40" height="50" style="border:1px solid black;font-size:13px">M/C NO</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">Altd spls</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">Wrkd spls</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">Const</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">Std kgs</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">Act kgs</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">W%</td>
							<td width="40" height="50" style="border:1px solid black;font-size:13px">GPS</td>
							
							
						</tr>
						<?php
						include 'db.php'; 
						 
 $sum=mysql_query("select count(*) from `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Night Shift'");
 $sum1=mysql_fetch_array($sum);
$mc2=$sum1[0];
						
 $q=mysql_query("SELECT * FROM `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Night Shift'")or die(mysql_error());
  
 while($a=mysql_fetch_array($q))
 { 
 ?>
 
                 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['countcode']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['countmaintain']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['mcno']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['spdls']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['workedspdls']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['connstannt']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['stdkgs']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['actkgs']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['pneuwaste']; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $a['gps']; ?></td>
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
							<td width="100" height="50" style="border:1px solid black;font-size:13px" >Altd spdls</td> 
							<td width="100" height="50" style="border:1px solid black;font-size:13px">wrkd spdls</td>
							<td width="100" height="50" style="border:1px solid black;font-size:13px">Target prod</td>
							<td width="100" height="50" style="border:1px solid black;font-size:13px">Actu prod</td>
							<td width="100" height="50" style="border:1px solid black;font-size:13px">Target Grms</td>
							<td width="100" height="50" style="border:1px solid black;font-size:13px">Act gps</td> 
							<td width="100" height="50" style="border:1px solid black;font-size:13px">40's Conv prod</td>
							<td width="100" height="50" style="border:1px solid black;font-size:13px">40's conv Gps</td>
						</tr>
						<?php
						include 'db.php'; 
						 
 $std=mysql_query("select sum(spdls) from `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2'")or die(mysql_error());
 $std1=mysql_fetch_array($std);
  $tspndls=$std1[0];
 
 
 $w=mysql_query("select sum(workedspdls) from `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2'")or die(mysql_error());
 $w1=mysql_fetch_array($w);
  $wspndls=$w1[0];
 
 
 $tp=mysql_query("select sum(stdkgs) from `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2'")or die(mysql_error());
 $tp1=mysql_fetch_array($tp);
  $tprod=$tp1[0];
 
 
 $ap=mysql_query("select sum(actkgs) from `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2'")or die(mysql_error());
 $ap1=mysql_fetch_array($ap);
  $aprod=$ap1[0];
 
 
 $grms=mysql_query("select sum(grms) from `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2'")or die(mysql_error());
 $grms1=mysql_fetch_array($grms);
  $tgrms=ceil($ap1[0]/3);
 
  $gps=mysql_query("select sum(gps) from `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2'")or die(mysql_error());
 $gps1=mysql_fetch_array($gps);
  $tgps=ceil($gps1[0]/3);
 ?>
  
  						 
 
                  <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $tspndls; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo  $wspndls;; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $tprod; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $aprod; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $tgrms; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $tgps; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"> </td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"> </td>
				 
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
					include 'db.php';			 
 $std=mysql_query("select sum(spdls) from `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and  shift='Day Shift'")or die(mysql_error());
 $std1=mysql_fetch_array($std);
  $altspndls=$std1[0];
						
						 $std=mysql_query("select sum(workedspdls) from `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and  shift='Day Shift'")or die(mysql_error());
 $std1=mysql_fetch_array($std);
  $wrdspndls=$std1[0];
  
   $std=mysql_query("select sum(connstannt) from `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and  shift='Day Shift'")or die(mysql_error());
 $std1=mysql_fetch_array($std);
  $const=ceil($std1[0]);
  
  
   $std=mysql_query("select sum(stdkgs) from `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and  shift='Day Shift'")or die(mysql_error());
 $std1=mysql_fetch_array($std);
  $stdkgs=ceil($std1[0]);
  
   $std=mysql_query("select sum(actkgs) from `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and  shift='Day Shift'")or die(mysql_error());
 $std1=mysql_fetch_array($std);
  $actkgs=ceil($std1[0]);
  
   $std=mysql_query("select sum(gps) from `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and  shift='Day Shift'")or die(mysql_error());
 $std1=mysql_fetch_array($std);
  $tgps=ceil($std1[0]);
						?>
						 
						<tr height="50">
							<td width="40" height="50" style="border:1px solid black;font-size:15px" >-----</td>
							<td width="40" height="50" style="border:1px solid black;font-size:15px">---------</td>
							<td width="40" height="50" style="border:1px solid black;font-size:15px; text-align:center;">  &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $mc1; ?>   </td>
							<td width="40" height="50" style="border:1px solid black;font-size:15px">&nbsp;&nbsp;<?php echo $altspndls; ?></td>
							<td width="40" height="50" style="border:1px solid black;font-size:15px">&nbsp;&nbsp;<?php echo $wrdspndls; ?></td>
							<td width="40" height="50" style="border:1px solid black;font-size:15px">&nbsp;&nbsp;<?php echo $const;?></td>
							<td width="40" height="50" style="border:1px solid black;font-size:15px">  <?php echo $stdkgs; ?></td>
							<td width="40" height="50" style="border:1px solid black;font-size:15px">  <?php echo $actkgs; ?></td>
							<td width="40" height="50" style="border:1px solid black;font-size:15px">  1.2</td>
							<td width="40" height="50" style="border:1px solid black;font-size:15px">  <?php echo $tgps; ?></td>
							  
						</tr>
						
						
						
						</table>
						
					</td>
					<td style="width:10;border:none;"></td>
					<td width="200" height="50" style="border:1px solid black;">
						<table width="200" height="50" cellspacing="0" cellpadding="0">
						
						<?php
					include 'db.php';			 
 $std=mysql_query("select sum(spdls) from `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and  shift='Evening Shift'")or die(mysql_error());
 $std1=mysql_fetch_array($std);
  $altspndls=$std1[0];
						
						 $std=mysql_query("select sum(workedspdls) from `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and  shift='Evening Shift'")or die(mysql_error());
 $std1=mysql_fetch_array($std);
  $wrdspndls=$std1[0];
  
   $std=mysql_query("select sum(connstannt) from `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and  shift='Evening Shift'")or die(mysql_error());
 $std1=mysql_fetch_array($std);
  $const=ceil($std1[0]);
  
  
   $std=mysql_query("select sum(stdkgs) from `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and  shift='Evening Shift'")or die(mysql_error());
 $std1=mysql_fetch_array($std);
  $stdkgs=ceil($std1[0]);
  
   $std=mysql_query("select sum(actkgs) from `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and  shift='Evening Shift'")or die(mysql_error());
 $std1=mysql_fetch_array($std);
  $actkgs=ceil($std1[0]);
  
   $std=mysql_query("select sum(gps) from `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and  shift='Evening Shift'")or die(mysql_error());
 $std1=mysql_fetch_array($std);
  $tgps=ceil($std1[0]);
						?>
						 
						<tr height="50">
							<td width="40" height="50" style="border:1px solid black;font-size:15px" >-----</td>
							<td width="40" height="50" style="border:1px solid black;font-size:15px">-------</td>
							<td width="40" height="50" style="border:1px solid black;font-size:15px; text-align:center;">  &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $mc1; ?>   </td>
							<td width="40" height="50" style="border:1px solid black;font-size:15px">&nbsp;&nbsp;<?php echo $altspndls; ?></td>
							<td width="40" height="50" style="border:1px solid black;font-size:15px">&nbsp;&nbsp;<?php echo $wrdspndls; ?></td>
							<td width="40" height="50" style="border:1px solid black;font-size:15px">&nbsp;&nbsp;<?php echo $const;?></td>
							<td width="40" height="50" style="border:1px solid black;font-size:15px">  <?php echo $stdkgs; ?></td>
							<td width="40" height="50" style="border:1px solid black;font-size:15px">  <?php echo $actkgs; ?></td>
							<td width="40" height="50" style="border:1px solid black;font-size:15px">  1</td>
							<td width="40" height="50" style="border:1px solid black;font-size:15px">  <?php echo $tgps; ?></td>
							  
						</tr>
						
						
						</table>
						
					</td>
					<td style="width:5px;;border:none;"></td>
					<td width="200" height="50" style="border:1px solid black;">
						<table width="250" height="50" cellspacing="0" cellpadding="0">
						<?php
					include 'db.php';			 
 $std=mysql_query("select sum(spdls) from `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and  shift='Night Shift'")or die(mysql_error());
 $std1=mysql_fetch_array($std);
  $altspndls=$std1[0];
						
						 $std=mysql_query("select sum(workedspdls) from `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and  shift='Night Shift'")or die(mysql_error());
 $std1=mysql_fetch_array($std);
  $wrdspndls=$std1[0];
  
   $std=mysql_query("select sum(connstannt) from `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and  shift='Night Shift'")or die(mysql_error());
 $std1=mysql_fetch_array($std);
  $const=ceil($std1[0]);
  
  
   $std=mysql_query("select sum(stdkgs) from `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and  shift='Night Shift'")or die(mysql_error());
 $std1=mysql_fetch_array($std);
  $stdkgs=ceil($std1[0]);
  
   $std=mysql_query("select sum(actkgs) from `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and  shift='Night Shift'")or die(mysql_error());
 $std1=mysql_fetch_array($std);
  $actkgs=ceil($std1[0]);
  
   $std=mysql_query("select sum(gps) from `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and  shift='Night Shift'")or die(mysql_error());
 $std1=mysql_fetch_array($std);
  $tgps=ceil($std1[0]);
						?>
						 
						<tr height="50">
							<td width="40" height="50" style="border:1px solid black;font-size:15px" >-----</td>
							<td width="40" height="50" style="border:1px solid black;font-size:15px">-------</td>
							<td width="40" height="50" style="border:1px solid black;font-size:15px; text-align:center;">  &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $mc1; ?>   </td>
							<td width="40" height="50" style="border:1px solid black;font-size:15px">&nbsp;&nbsp;<?php echo $altspndls; ?></td>
							<td width="40" height="50" style="border:1px solid black;font-size:15px">&nbsp;&nbsp;<?php echo $wrdspndls; ?></td>
							<td width="40" height="50" style="border:1px solid black;font-size:15px">&nbsp;&nbsp;<?php echo $const;?></td>
							<td width="40" height="50" style="border:1px solid black;font-size:15px">  <?php echo $stdkgs; ?></td>
							<td width="40" height="50" style="border:1px solid black;font-size:15px">  <?php echo $actkgs; ?></td>
							<td width="40" height="50" style="border:1px solid black;font-size:15px">  1.2</td>
							<td width="40" height="50" style="border:1px solid black;font-size:15px">  <?php echo $tgps; ?></td>
							  
						</tr>
						
						</table>
						
					</td>
					<td style="width:5px;border:none;"></td>
					<td width="300"  style="border:1px solid black;">
						<table width="300"  cellspacing="0" cellpadding="0">
						
						<tr height="50">
							<?php
						include 'db.php'; 
						 
 $std=mysql_query("select sum(spdls) from `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2'")or die(mysql_error());
 $std1=mysql_fetch_array($std);
  $tspndls=$std1[0];
 
 
 $w=mysql_query("select sum(workedspdls) from `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2'")or die(mysql_error());
 $w1=mysql_fetch_array($w);
  $wspndls=$w1[0];
 
 
 $tp=mysql_query("select sum(stdkgs) from `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2'")or die(mysql_error());
 $tp1=mysql_fetch_array($tp);
  $tprod=$tp1[0];
 
 
 $ap=mysql_query("select sum(actkgs) from `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2'")or die(mysql_error());
 $ap1=mysql_fetch_array($ap);
  $aprod=$ap1[0];
 
 
 $grms=mysql_query("select sum(grms) from `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2'")or die(mysql_error());
 $grms1=mysql_fetch_array($grms);
  $tgrms=ceil($ap1[0]/3);
 
  $gps=mysql_query("select sum(gps) from `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2'")or die(mysql_error());
 $gps1=mysql_fetch_array($gps);
  $tgps=ceil($gps1[0]/3);
 ?>
  
  						 
 
                  <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $tspndls; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo  $wspndls;; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $tprod; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $aprod; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $tgrms; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"><?php echo $tgps; ?></td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"> </td>
				 <td width="40" height="50" style="border:1px solid black;font-size:13px"> </td>
				 
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
								<tr style="margin-top:0px">
								<td width="150"  style="font-size:15px;border:none">U% &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp = &nbsp 93.99 <br>P% &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp = &nbsp 101.22<br>OE% &nbsp &nbsp &nbsp &nbsp &nbsp = &nbsp 101.65<br>WASTE% &nbsp = &nbsp 1.01
								</td>
								<td width="150"  style="font-size:15px;border:none">U% &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp = &nbsp 94.87 <br>P% &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp = &nbsp 105.22<br>OE% &nbsp &nbsp &nbsp &nbsp &nbsp = &nbsp 104.45<br>WASTE% &nbsp = &nbsp 0.98
								</td>
								<td width="150" style="font-size:15px;border:none">U% &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp = &nbsp 98.99 <br>P% &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp = &nbsp 102.32<br>OE% &nbsp &nbsp &nbsp &nbsp &nbsp = &nbsp 106.85<br>WASTE% &nbsp = &nbsp 0.98
								</td>
								<td width="150" style="font-size:13px;border:none">U% &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp = &nbsp 100.02 <br>P% &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp = &nbsp 104.62<br>OE% &nbsp &nbsp &nbsp &nbsp &nbsp = &nbsp 103.96<br>WASTE% &nbsp = &nbsp 0.93<br>UKG &nbsp = &nbsp 0.00<br>40'S Conv UKG &nbsp = &nbsp 0.00<br>AVG Count &nbsp = &nbsp 18.24</td>
								</tr>
								
							</table>
						</td>
						</tr>
 						<tr>
						
						<td width="600" height="" style="margin-top:20px">
					 
						
					</td>
					<td width="325" style="margin-top:0px">
						<table width="205" cellspacing="0" cellpadding="0">
						<tr>
							
							<p>UPTO DATE VALUES</p>
								<td width="120" style="border:1px solid black;font-size:14px">
								U% &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp =   98.38 <br>P% &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp = 106.68<br>OE% &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp = 104.95<br>PNE WASTE%&nbsp &nbsp &nbsp &nbsp &nbsp =1.01<br>UKG &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	&nbsp  &nbsp  &nbsp  &nbsp &nbsp &nbsp = 0.14<br>40's Conv UKG&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp = 0.37
								</td> 
							
						
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