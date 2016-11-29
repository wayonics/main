<?php
session_start();
  $dt1=$_SESSION['date1'];
  $dt2=$_SESSION['date2'];

   


date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 

?> 
<center> <caption><h1>JYOTIRMAYE TEXTILES PVT. LTD.</caption><br />#11-12-12, RAMIREDDYPET, NARASARAOPET,GUNTUR D.T.</h1></center><br />
 <h2>RAW MATERIAL DAY WISE STOCK REPORT  FROM <?php echo $dt1 ?> TO  <?php echo $dt2 ?> </h2>

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
   <th>DATE</th>  
		 	 <th colspan="4">OPENING STOCK</th> 
			  <th colspan="4">ISSUED STOCK</th> 
			   <th colspan="4">CLOSING STOCK</th> 
 
  </tr>	
 
 <?php 
 include 'db.php'; 
 $q=mysql_query("SELECT * FROM `rawmgt` WHERE date  BETWEEN '$dt1' AND '$dt2'")or die(mysql_error());
   
   $d=date('d/m/y');
    
 echo "<tr><td></td>     <td>BALES</td><td>BORAS</td><td>CONV BALES</td><td>KGS</td>  <td>BALES</td><td>BORAS</td><td>CONV BALES</td><td>KGS</td>   <td>BALES</td><td>BORAS</td><td>CONV BALES</td><td>KGS</td>     </tr>";
   
 while($a=mysql_fetch_array($q))
 {  
			  echo "<tr> <td>$d<td>$a[bales]<td>$a[boras]<td>$a[convbales]<td>$a[kg]   <td>$a[bales]<td>$a[boras]<td>$a[convbales]<td>$a[kg]   <td>$a[bales]<td>$a[boras]<td>$a[convbales]<td>$a[kg]   ";
 }  
 echo "</tr>";
  
 ?> 
 </table>
 <br /><br /><br /><br /><br />
  