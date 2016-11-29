<?php
session_start();
  $dt1=$_SESSION['date1'];
  $dt2=$_SESSION['date2'];

   


date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 

?> 
<center> <caption><h1>JYOTIRMAYE TEXTILES PVT. LTD.</caption><br />#11-12-12, RAMIREDDYPET, NARASARAOPET,GUNTUR D.T.</h1></center><br />
 <h2>RAW MATERIAL ISSUE REPORT  FROM <?php echo $dt1 ?> TO  <?php echo $dt2 ?> </h2>

<br>	<br><p align="right">
  <form action="packingexport.php" method="post">
	<input type="submit" name="submit1" value="EXPORT">
	</form></p>	


<input type="submit" value="PRINT" onclick="p()" />	


<script>
function p()
{
window.print();
}

</script>
<center>
 <style>

table,th
{
color:#660000;text-align:center;
    border: 1px solid black;
}
td
{
color:#707070;text-align:center;
 border: 1px solid black;
 font-weight:bold;
}
table
{
  width:989px; border-collapse: collapse;
 
}
 .total
 {
 background:#FFFF00;
 }
 </style>
 
  
 <table>
 <tr>
 
 <th>MILL LOT NO</th>
 <th>COTTON VARIETY</th>
 <th>CANDY RATE</th>
    <th>BALE NO</th> 
  <th>PURCHASED FOR</th>  
 <th>ISSUED</th> 
			  <th>2.5% SL</th> 
			 <th>50% SL</th> 
			  <th>UR</th> 
			 <th>MICRONIAR</th>
			 <th>STRENGTH</th>
			 <th>MR</th>
			 <th>RD</th>
			 <th>+B</th>
			 <th>TRASH</th>
			 <th>MOIST</th>
			 <th>FQT</th>
			 <th>ELONG</th>
			 <th>SFC</th>
			 <th>BALE WT</th>
			 <th>DIFF BALE WT</th>
			 <th>AVG BALE WT</th>
			    
  </tr>	
 
 <?php 
 include 'db.php'; 
 $q=mysql_query("SELECT * FROM `rawmgtissue` WHERE date  BETWEEN '$dt1' AND '$dt2'")or die(mysql_error());
    
  
 while($a=mysql_fetch_array($q))
 { 
  
			  echo "<tr>  <td>$a[milllotno]<td>$a[cotton]<td></td><td>$a[count]<td></td>  <td>$a[14]<td>$a[15]<td>$a[16]<td>$a[17]<td>$a[18]<td>$a[19]<td>$a[20]<td>$a[21]<td>$a[22]<td>$a[23]<td>$a[24]<td>$a[25]<td>$a[26]<td>$a[27]<td>$a[27]<td>$a[27]<td>$a[27]";
  }  
 echo "</tr>";
 
 
  
 ?> 
 </table>
 <br /><br /><br /><br /><br />
  