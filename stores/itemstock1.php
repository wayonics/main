<?php
session_start();
   $dt1=$_SESSION['date1'];
  $dt2=$_SESSION['date2'];
  $head=$_SESSION['head'];
  $item=$_SESSION['item']; 
  

date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 

?> 
<center> <caption><h1>JYOTIRMAYE TEXTILES PVT. LTD.</caption><br />#11-12-12, RAMIREDDYPET, NARASARAOPET,GUNTUR D.T.</h1></center><br />
 <h2>ITEM WISE STOCK REPORT ON <?php echo $dt1 ?>  </h2>

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
 <th>ITEM CODE</th>
 <th>ITEM NAME</th>
 <th> DRAWING NO</th>
 <th>UNIT</th>
 <th>BIN </th>
 <th colspan="3">CLOSING</th>
  </tr>	
 
 <?php 
 include 'db.php'; 
 
  
 $q=mysql_query("SELECT * FROM `indententry` WHERE indentdate  BETWEEN '$dt1' AND '$dt2' AND itemname='$item'")or die(mysql_error());
 
  $q1=mysql_query("SELECT * FROM `indententry` WHERE itemname='$item'")or die(mysql_error());
  $q2=mysql_num_rows($q1);
  
  
 /* 
 $q2=mysql_query("SELECT sum(spdls) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Day Shift'")or die(mysql_error());
 $q3=mysql_query("SELECT sum(workedspdls) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Day Shift'");
 $q4=mysql_query("SELECT sum(grms) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Day Shift'");
 $q5=mysql_query("SELECT sum(production) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Day Shift'");
 $q6=mysql_query("SELECT sum(pneuwaste) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Day Shift'");
 $q7=mysql_query("SELECT sum(gps) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Day Shift'"); 
 */
 echo "<tr><td></td><td></td><td></td><td></td><td></td><th>STOCK</td><th>VALUE</td><th>AVG.RATE</td>";
 echo "</tr>";
 
 while($a=mysql_fetch_array($q)  )
 { 
 echo "<tr><td>$a[itemcode]<td>$a[itemname]<td>$a[drawingno]<td>$a[unit]<td>$a[finhead] <td>   $a[avaialble]<td>  $a[value]<td> $a[avgrate]   ";
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
  