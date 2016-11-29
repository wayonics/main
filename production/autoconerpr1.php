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
 <th>NO OF M/C</th>
 <th> ALLOTED DRUMS</th>
 <th> PROD KGS</th>
 <th>PROD/EACH DRUM</th>
 <th>EFFICIENCY</th>
  </tr>	
 
 <?php 
 include 'db.php'; 
 $q=mysql_query("SELECT * FROM `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Day Shift'")or die(mysql_error());
  
 $q2=mysql_query("SELECT COUNT(mno) FROM  `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Day Shift'")or die(mysql_error());
 $q3=mysql_query("SELECT sum(noofdrums) FROM  `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Day Shift'");
 $q4=mysql_query("SELECT sum(prdn) FROM  `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Day Shift'");
 $q5=mysql_query("SELECT sum(prodruntime) FROM  `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Day Shift'");
 $q6=mysql_query("SELECT sum(mceffy) FROM  `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Day Shift'");
  
 while($a=mysql_fetch_array($q))
 { 
 echo "<tr><td>$a[count]<td>$a[mno]<td>$a[noofdrums]<td>$a[prdn]<td>$a[prodruntime]<td>$a[mceffy] ";
 }  
 echo "</tr>";
  
 
  $c=mysql_fetch_array($q2);
 $d=mysql_fetch_array($q3);
 $e=mysql_fetch_array($q4);
 $f=mysql_fetch_array($q5);
 $g=mysql_fetch_array($q6);
   echo "<tr><td></td><td>$c[0]<td>$d[0]<td>$e[0]<td>$f[0]<td>$g[0]";
 
 echo "</tr>";
 ?> 
 </table>
 <br /><br /><br /><br /><br />
 
 
 
 
  <caption><b>IInd SHIFT</b></caption>
 <table>
 <tr>
 <th>COUNT</th>
 <th>NO OF M/C</th>
 <th> ALLOTED DRUMS</th>
 <th> PROD KGS</th>
 <th>PROD/EACH DRUM</th>
 <th>EFFICIENCY</th>
  </tr>	
 
 <?php 
 include 'db.php'; 
 $q=mysql_query("SELECT * FROM `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Evening Shift'")or die(mysql_error());
  
 $q2=mysql_query("SELECT COUNT(mno) FROM  `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Evening Shift'")or die(mysql_error());
 $q3=mysql_query("SELECT sum(noofdrums) FROM  `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Evening Shift'");
 $q4=mysql_query("SELECT sum(prdn) FROM  `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Evening Shift'");
 $q5=mysql_query("SELECT sum(prodruntime) FROM  `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Evening Shift'");
 $q6=mysql_query("SELECT sum(mceffy) FROM  `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Evening Shift'");
  
 while($a=mysql_fetch_array($q))
 { 
 echo "<tr><td>$a[count]<td>$a[mno]<td>$a[noofdrums]<td>$a[prdn]<td>$a[prodruntime]<td>$a[mceffy] ";
 }  
 echo "</tr>";
  
 
  $c=mysql_fetch_array($q2);
 $d=mysql_fetch_array($q3);
 $e=mysql_fetch_array($q4);
 $f=mysql_fetch_array($q5);
 $g=mysql_fetch_array($q6);
   echo "<tr><td></td><td>$c[0]<td>$d[0]<td>$e[0]<td>$f[0]<td>$g[0]";
 
 echo "</tr>";
 ?> 
 </table>
 <br /><br /><br /><br /><br />
 
 
 
 
 <caption><b>IIIrd SHIFT</b></caption>
 <table>
 <tr>
 <th>COUNT</th>
 <th>NO OF M/C</th>
 <th> ALLOTED DRUMS</th>
 <th> PROD KGS</th>
 <th>PROD/EACH DRUM</th>
 <th>EFFICIENCY</th>
  </tr>	
 
 <?php 
 include 'db.php'; 
 $q=mysql_query("SELECT * FROM `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Night Shift'")or die(mysql_error());
  
 $q2=mysql_query("SELECT COUNT(mno) FROM  `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Night Shift'")or die(mysql_error());
 $q3=mysql_query("SELECT sum(noofdrums) FROM  `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Night Shift'");
 $q4=mysql_query("SELECT sum(prdn) FROM  `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Night Shift'");
 $q5=mysql_query("SELECT sum(prodruntime) FROM  `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Night Shift'");
 $q6=mysql_query("SELECT sum(mceffy) FROM  `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='Night Shift'");
  
 while($a=mysql_fetch_array($q))
 { 
 echo "<tr><td>$a[count]<td>$a[mno]<td>$a[noofdrums]<td>$a[prdn]<td>$a[prodruntime]<td>$a[mceffy] ";
 }  
 echo "</tr>";
  
 
  $c=mysql_fetch_array($q2);
 $d=mysql_fetch_array($q3);
 $e=mysql_fetch_array($q4);
 $f=mysql_fetch_array($q5);
 $g=mysql_fetch_array($q6);
   echo "<tr><td></td><td>$c[0]<td>$d[0]<td>$e[0]<td>$f[0]<td>$g[0]";
 
 echo "</tr>";
 ?> 
 </table>
 <br /><br /><br /><br /><br />
 
 
 
 
 
 <caption><b>TOTAL DAY</b></caption>
 <table>
 <tr>
 <th>COUNT</th>
 <th>NO OF M/C</th>
 <th> ALLOTED DRUMS</th>
 <th> PROD KGS</th>
 <th>PROD/EACH DRUM</th>
 <th>EFFICIENCY</th>
  </tr>	
 
 <?php 
 include 'db.php'; 
 $q=mysql_query("SELECT * FROM `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' ")or die(mysql_error());
  
 $q2=mysql_query("SELECT COUNT(mno) FROM  `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' ")or die(mysql_error());
 $q3=mysql_query("SELECT sum(noofdrums) FROM  `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' ");
 $q4=mysql_query("SELECT sum(prdn) FROM  `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' ");
 $q5=mysql_query("SELECT sum(prodruntime) FROM  `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2' ");
 $q6=mysql_query("SELECT sum(mceffy) FROM  `autoconer` WHERE date  BETWEEN '$dt1' AND '$dt2'  ");
  
 while($a=mysql_fetch_array($q))
 { 
 echo "<tr><td>$a[count]<td>$a[mno]<td>$a[noofdrums]<td>$a[prdn]<td>$a[prodruntime]<td>$a[mceffy] ";
 }  
 echo "</tr>";
  
 
  $c=mysql_fetch_array($q2);
 $d=mysql_fetch_array($q3);
 $e=mysql_fetch_array($q4);
 $f=mysql_fetch_array($q5);
 $g=mysql_fetch_array($q6);
   echo "<tr><td></td><td>$c[0]<td>$d[0]<td>$e[0]<td>$f[0]<td>$g[0]";
 
 echo "</tr>";
 ?> 
 </table>
 <br /><br /><br /><br /><br />
 
 
 
 
 
 
 
 
 
  