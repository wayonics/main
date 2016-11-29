<?php
session_start();
  $dt1=$_SESSION['date1'];
  $dt2=$_SESSION['date2'];
  $head=$_SESSION['head'];
 $dept=$_SESSION['dept']; 
  $machine=$_SESSION['machine'];
   $transmode=$_SESSION['transmode'];

date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 

?> 
<center> <caption><h1>JYOTIRMAYE TEXTILES PVT. LTD.</caption><br />#11-12-12, RAMIREDDYPET, NARASARAOPET,GUNTUR D.T.</h1></center><br />
 <h2>PURCHASE REGISTER FOR ALL FINANCIAL HEADS ON <?php echo $dt1 ?>  </h2>

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
 
 
 <caption><b> </b></caption>
 <table>
 <tr>
 <th>SL NO</th>
 
 <th>INWARD NO</th>
 <th>DATE</th>
 <th>BILL NO</th>
 <th>PUR ORDER NO</th>
 <th>SUPPLIER NAME</th>
 <th>RECEIPT NO</th>
 
 
 
 <th>ITEM NAME</th>
 <th> QUANTITY</th>
 <th>RATE</th>
 <th>BASIC AMOUNT</th>
 <th>DISC AMOUNT</th>
 <th>INSURANCE</th>
 <th>P&F</th>
 <th>FRIEGHT</th>
 <th>COURIER</th>
 
 <th>VAT</th>
 <th>CST</th>
 <th>SERVICE TAX</th>
 <th>OTHERS CHARGES</th>
 <th>TOTAL AMOUNT</th> 
 </tr>	
 
 <?php 
 include 'db.php'; 
 $q=mysql_query("SELECT * FROM `purchaseentry` WHERE entrydate  BETWEEN '$dt1' AND '$dt2'")or die(mysql_error());
  
 /* 
 $q2=mysql_query("SELECT sum(spdls) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Day Shift'")or die(mysql_error());
 $q3=mysql_query("SELECT sum(workedspdls) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Day Shift'");
 $q4=mysql_query("SELECT sum(grms) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Day Shift'");
 $q5=mysql_query("SELECT sum(production) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Day Shift'");
 $q6=mysql_query("SELECT sum(pneuwaste) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Day Shift'");
 $q7=mysql_query("SELECT sum(gps) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Day Shift'"); 
 */
 while($a=mysql_fetch_array($q) )
 { 
 
 $total=$a['amount']-$a['discount']+$a['insurance']+$a['pandf']+$a['frieght']+$a['courier']+$a['vat']+$a['cat']+$a['servicetax']+$a['othercharges'];
 
 echo "<tr><td>$a[id]  <td>$a[inwardno]<td>$a[entrydate]<td>$a[billno]<td>$a[purorderno]<td>$a[suppliername]<td>$a[suppliername]                                                     <td>$a[itemname]<td>$a[qty]<td>$a[rate]<td>$a[amount]<td>$a[discount]<td>$a[insurance]<td>$a[pandf]<td>$a[frieght]<td>$a[courier]<td>$a[vat]<td>$a[cat] <td>$a[servicetax] <td>$a[othercharges] <td>$total  ";
 }  
 echo "</tr>";
  /*
 $c=mysql_fetch_array($q2);
 $d=mysql_fetch_array($q3);
 $e=mysql_fetch_array($q4);
 $f=mysql_fetch_array($q5);
 $g=mysql_fetch_array($q6);
 $h=mysql_fetch_array($q7);
  echo "<tr><td></td><td></td><td>$c[0]<td>$d[0]<td>$e[0]<td>$f[0]<td>$g[0]<td>$h[0]";
 
 echo "</tr>";
 */
 ?> 
 </table>
 <br /><br /><br /><br /><br />
  