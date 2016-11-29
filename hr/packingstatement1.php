<?php
session_start();
  $dt1=$_SESSION['date1'];
  $dt2=$_SESSION['date2'];


date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 

?> 
<center> <caption><h1>JYOTIRMAYE TEXTILES PVT. LTD.</caption><br />#11-12-12, RAMIREDDYPET, NARASARAOPET,GUNTUR D.T.</h1></center><br />
 <h2>PACKING STATEMENT ON <?php echo $dt1 ?> TO <?php echo $dt2 ?> </h2>

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
 
 </style>
 
 
 <caption><b>PACKING REPORT </b></caption>
 <table>
  <table>
 <tr>
 <th>COUNT</th>
 <th>CONE TIP</th>
 <th> CONE WT</th>
 <th> BAG WT</th>
 
 <th colspan="3">OPENING STOCK </th> 
  
 
 <th>RTN GOODS</th>
 
 <th colspan="3">PRODUCTION</th>
 
 <th colspan="2">DISPATCHES</th>
 
 
 
 <th colspan="3">CLOSING STOCK</th>
 
 
 
 <th>REMARKS</th> 
 </tr>	
 
 
 
 
 
 <?php 
 include 'db.php'; 
 $q=mysql_query("SELECT * FROM `packing` WHERE date  BETWEEN '$dt1' AND '$dt2'")or die(mysql_error());
   
 
 echo "<tr> <td></td> <td></td> <td></td> <td></td>   <td>BAGS</td> <td>CONES</td> <td>KGS</td> <td></td> <td>BAGS</td> <td>CONES</td> <td>KGS</td> <td>BAGS</td> <td>KGS</td> <td>BAGS</td> <td>CONES</td> <td>KGS</td> <td></td>  ";
 echo "</tr>";  
 
 
 while($a=mysql_fetch_array($q))
 { 
 $bagkg=1.89*$a['bagsstock']; 
 $conekg=45*$a['conesstock'];
 $kg=$bagkg+$conekg;
 
 
 
 echo "<tr> <td>$a[count]$a[variety]</td> <td>$a[tapeconetip]</td> <td>1.89</td><td>45</td> <td> $a[bagsstock]</td> <td> $a[conesstock]</td> <td> $kg</td>  <td></td> <td> </td> <td> </td> <td> </td> <td> </td> <td> </td>  <td> $a[bagsstock]</td> <td> $a[conesstock]</td> <td> $kg</td>  <td></td>";
 }  
 echo "</tr>";
    
 ?> 
 </table>
 <br /><br /><br /><br /><br />
  