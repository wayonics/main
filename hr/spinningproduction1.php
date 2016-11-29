<?php
session_start();
  $dt1=$_SESSION['date1'];
  $dt2=$_SESSION['date2'];


date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 

?> 
<center> <caption><h1>JYOTIRMAYE TEXTILES PVT. LTD.</caption><br />#11-12-12, RAMIREDDYPET, NARASARAOPET,GUNTUR D.T.</h1></center><br />
 <h2>COUNTWISE DAILY PRODUCTION STATEMENT ON <?php echo $dt1 ?></h2>

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
 
 
 <caption><b>Ist SHIFT</b></caption>
 <table>
 <tr>
 <th>COUNT</th>
 <th>PROD CONST</th>
 <th> ALLOTED SPNDLS</th>
 <th> WORKED SPDLS</th>
 <th>STD KGS</th>
 <th>ACT KGS</th>
 <th>P.W%</th>
 <th>GPS</th> 
 </tr>	
 
 <?php 
 include 'db.php'; 
 $q=mysql_query("SELECT * FROM `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Day Shift'")or die(mysql_error());
  
 $q2=mysql_query("SELECT sum(spdls) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Day Shift'")or die(mysql_error());
 $q3=mysql_query("SELECT sum(workedspdls) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Day Shift'");
 $q4=mysql_query("SELECT sum(grms) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Day Shift'");
 $q5=mysql_query("SELECT sum(production) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Day Shift'");
 $q6=mysql_query("SELECT sum(pneuwaste) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Day Shift'");
 $q7=mysql_query("SELECT sum(gps) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Day Shift'"); 
 
 while($a=mysql_fetch_array($q))
 { 
 echo "<tr><td>$a[countcode]<td>$a[connstannt]<td>$a[spdls]<td>$a[workedspdls]<td>$a[grms]<td>$a[production]<td>$a[pneuwaste]<td>$a[gps]";
 }  
 echo "</tr>";
  
 $c=mysql_fetch_array($q2);
 $d=mysql_fetch_array($q3);
 $e=mysql_fetch_array($q4);
 $f=mysql_fetch_array($q5);
 $g=mysql_fetch_array($q6);
 $h=mysql_fetch_array($q7);
  echo "<tr><td></td><td></td><td>$c[0]<td>$d[0]<td>$e[0]<td>$f[0]<td>$g[0]<td>$h[0]";
 
 echo "</tr>";
 ?> 
 </table>
 <br /><br /><br /><br /><br />
 
  <caption><b>IInd SHIFT</b></caption>
 <table border="2">
 <tr>
 <th>COUNT</th>
 <th>PROD CONST</th>
 <th> ALLOTED SPNDLS</th>
 <th> WORKED SPDLS</th>
 <th>STD KGS</th>
 <th>ACT KGS</th>
 <th>P.W%</th>
 <th>GPS</th> 
 </tr>	
 
 <?php 
 include 'db.php'; 
 $q=mysql_query("SELECT * FROM `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Evening Shift'")or die(mysql_error());
  
 $q2=mysql_query("SELECT sum(spdls) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Evening Shift'")or die(mysql_error());
 $q3=mysql_query("SELECT sum(workedspdls) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Evening Shift'");
 $q4=mysql_query("SELECT sum(grms) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Evening Shift'");
 $q5=mysql_query("SELECT sum(production) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Evening Shift'");
 $q6=mysql_query("SELECT sum(pneuwaste) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Evening Shift'");
 $q7=mysql_query("SELECT sum(gps) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Evening Shift'"); 
 
 while($a1=mysql_fetch_array($q))
 { 
 echo "<tr><td>$a1[countcode]<td>$a1[connstannt]<td>$a1[spdls]<td>$a1[workedspdls]<td>$a1[grms]<td>$a1[production]<td>$a1[pneuwaste]<td>$a1[gps]";
 }  
 echo "</tr>";
  
 $c1=mysql_fetch_array($q2);
 $d1=mysql_fetch_array($q3);
 $e1=mysql_fetch_array($q4);
 $f1=mysql_fetch_array($q5);
 $g1=mysql_fetch_array($q6);
 $h1=mysql_fetch_array($q7);
  echo "<tr><td></td><td></td><td>$c1[0]<td>$d1[0]<td>$e1[0]<td>$f1[0]<td>$g1[0]<td>$h1[0]";
 
 echo "</tr>";
 ?> 
 </table>
 
 
  <br /><br /><br /><br /><br />
 
  <caption><b>IIIrd SHIFT</b></caption>
 <table border="2">
 <tr>
 <th>COUNT</th>
 <th>PROD CONST</th>
 <th> ALLOTED SPNDLS</th>
 <th> WORKED SPDLS</th>
 <th>STD KGS</th>
 <th>ACT KGS</th>
 <th>P.W%</th>
 <th>GPS</th> 
 </tr>	
 
 <?php 
 include 'db.php'; 
 $q=mysql_query("SELECT * FROM `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Night Shift'")or die(mysql_error());
  
 $q2=mysql_query("SELECT sum(spdls) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Night Shift'")or die(mysql_error());
 $q3=mysql_query("SELECT sum(workedspdls) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Night Shift'");
 $q4=mysql_query("SELECT sum(grms) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Night Shift'");
 $q5=mysql_query("SELECT sum(production) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Night Shift'");
 $q6=mysql_query("SELECT sum(pneuwaste) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Night Shift'");
 $q7=mysql_query("SELECT sum(gps) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Night Shift'"); 
 
 while($a2=mysql_fetch_array($q))
 { 
 echo "<tr><td>$a2[countcode]<td>$a2[connstannt]<td>$a2[spdls]<td>$a2[workedspdls]<td>$a2[grms]<td>$a2[production]<td>$a2[pneuwaste]<td>$a2[gps]";
 }  
 echo "</tr>";
  
 $c2=mysql_fetch_array($q2);
 $d2=mysql_fetch_array($q3);
 $e2=mysql_fetch_array($q4);
 $f2=mysql_fetch_array($q5);
 $g2=mysql_fetch_array($q6);
 $h2=mysql_fetch_array($q7);
  echo "<tr><td></td><td></td><td>$c2[0]<td>$d2[0]<td>$e2[0]<td>$f2[0]<td>$g2[0]<td>$h2[0]";
 
 echo "</tr>";
 ?> 
 </table>
  
 <br /><br /><br /><br /><br />
 
  <caption><b>TOTAL DAY</b></caption>
 <table border="2">
 <tr>
 <th>COUNT</th>
 <th>PROD CONST</th>
 <th> ALLOTED SPNDLS</th>
 <th> WORKED SPDLS</th>
 <th>STD KGS</th>
 <th>ACT KGS</th>
 <th>P.W%</th>
 <th>GPS</th> 
 </tr>	
 
<?php 
 include 'db.php';  
 $q=mysql_query("SELECT * FROM `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2'")or die(mysql_error());
 
 $q2=mysql_query("SELECT sum(spdls) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2'  ")or die(mysql_error());
 $q3=mysql_query("SELECT sum(workedspdls) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' ");
 $q4=mysql_query("SELECT sum(grms) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' ");
 $q5=mysql_query("SELECT sum(production) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' ");
 $q6=mysql_query("SELECT sum(pneuwaste) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' ");
 $q7=mysql_query("SELECT sum(gps) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' "); 
 
 while($a3=mysql_fetch_array($q))
 { 
echo "<tr><td>$a3[countcode]<td>$a3[connstannt]<td>$a3[spdls]<td>$a3[workedspdls]<td>$a3[grms]<td>$a3[production]<td>$a3[pneuwaste]<td>$a3[gps]";
 }  
 echo "</tr>";
  
 $c2=mysql_fetch_array($q2);
 $d2=mysql_fetch_array($q3);
 $e2=mysql_fetch_array($q4);
 $f2=mysql_fetch_array($q5);
 $g2=mysql_fetch_array($q6);
 $h2=mysql_fetch_array($q7);
  echo "<tr><td></td><td></td><td>$c2[0]<td>$d2[0]<td>$e2[0]<td>$f2[0]<td>$g2[0]<td>$h2[0]";
 
 echo "</tr>";
 ?> 
 </table>
    <br /><br /><br /><br /><br /> <br /><br /><br /><br /><br />