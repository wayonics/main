<?php
session_start();
  $dt1=$_SESSION['date1'];
  $dt2=$_SESSION['date2'];

   


date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 

?> 
<center> <caption><h1>JYOTIRMAYE TEXTILES PVT. LTD.</caption><br />#11-12-12, RAMIREDDYPET, NARASARAOPET,GUNTUR D.T.</h1></center><br />
 <h2>RAW MATERIAL STOCK REPORT  FROM <?php echo $dt1 ?> TO  <?php echo $dt2 ?> </h2>

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
   <th>COUNT</th> 
  <th>MILL LOT NO</th>  
 <th>BIN NO</th> 
			 <th>SUPPLIER</th> 
			 <th>SUP LOT NO </th> 
			   <th>COTTON VARIETY</th> 
		 	 <th colspan="3">QUANTITY</th> 
		 	  <th>AVG PHY WT</th> 
			 <th>2.5% SL</th> 
			 <th>50% SL</th> 
			  <th>UR</th> 
			 <th>MICRONIAR</th>
			 <th>STRENGTH</th>
			 <th>MR</th>
			 <th>RD</th>
			   
  </tr>	
 
 <?php 
 include 'db.php'; 
 $q=mysql_query("SELECT * FROM `rawmgt` WHERE date  BETWEEN '$dt1' AND '$dt2'")or die(mysql_error());
   
 
 echo "<tr><td></td>  <td></td>  <td></td>  <td></td>  <td></td> <td></td>  <td>BALES</td>  <td>BORAS</td>  <td>CONV BALES</td>  <td></td>  <td></td>  <td></td>  <td></td>  <td></td>  <td></td>  <td></td>  <td></td> </tr>";
 
 $q2=mysql_query("SELECT sum(bales) FROM  `rawmgt` WHERE date  BETWEEN '$dt1' AND '$dt2' ")or die(mysql_error());
 $q3=mysql_query("SELECT sum(boras) FROM  `rawmgt` WHERE date  BETWEEN '$dt1' AND '$dt2' ");
 $q4=mysql_query("SELECT sum(convbales) FROM  `rawmgt` WHERE date  BETWEEN '$dt1' AND '$dt2' ");
 $q5=mysql_query("SELECT sum(phywt) FROM  `rawmgt` WHERE date  BETWEEN '$dt1' AND '$dt2' ");
 $q6=mysql_query("SELECT sum(sl1) FROM  `rawmgt` WHERE date  BETWEEN '$dt1' AND '$dt2' ");
 $q7=mysql_query("SELECT sum(sl2) FROM  `rawmgt` WHERE date  BETWEEN '$dt1' AND '$dt2' "); 
 $q8=mysql_query("SELECT sum(ur) FROM  `rawmgt` WHERE date  BETWEEN '$dt1' AND '$dt2' "); 
 $q9=mysql_query("SELECT sum(microniar) FROM  `rawmgt` WHERE date  BETWEEN '$dt1' AND '$dt2' "); 
 $q10=mysql_query("SELECT sum(strength) FROM  `rawmgt` WHERE date  BETWEEN '$dt1' AND '$dt2' "); 
 $q11=mysql_query("SELECT sum(mr) FROM  `rawmgt` WHERE date  BETWEEN '$dt1' AND '$dt2' "); 
 $q12=mysql_query("SELECT sum(rd) FROM  `rawmgt` WHERE date  BETWEEN '$dt1' AND '$dt2' "); 
 
 
 
 
 while($a=mysql_fetch_array($q))
 { 
  
			  echo "<tr> <td>$a[count]<td>$a[milllotno]<td>$a[binlocation]<td>$a[supplier]<td>$a[supplierlotno]<td>$a[cottonvariety]<td>$a[bales]<td>$a[boras]<td>$a[convbales]<td>$a[phywt]<td>$a[sl1]<td>$a[sl2] <td>$a[ur]<td>$a[microniar]<td>$a[strength]<td>$a[mr]<td>$a[rd] ";
 }  
 echo "</tr>";
 
 
 
 
 $c=mysql_fetch_array($q2);
 $d=mysql_fetch_array($q3);
 $e=mysql_fetch_array($q4);
 $f=mysql_fetch_array($q5);
 $g=mysql_fetch_array($q6);
 $h=mysql_fetch_array($q7);
 $i=mysql_fetch_array($q8);
 $j=mysql_fetch_array($q9);
 $k=mysql_fetch_array($q10);
 $l=mysql_fetch_array($q11);
 $m=mysql_fetch_array($q12);
 
 
 echo "<tr class=total><td></td>  <td></td>  <td></td>  <td></td>  <td></td> <td></td>  <td>$c[0]</td>  <td>$d[0]</td>  <td>$e[0]</td>  <td>$f[0]</td>  <td>$g[0]</td>  <td>$h[0]</td>  <td>$i[0]</td>  <td>$j[0]</td>  <td>$k[0]</td>  <td>$l[0]</td>  <td>$m[0]</td> </tr>";
   
 ?> 
 </table>
 <br /><br /><br /><br /><br />
  