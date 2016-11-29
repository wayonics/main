<?php
session_start();
  $dt1=$_SESSION['date1'];
  $dt2=$_SESSION['date2'];
  $shift=$_SESSION['shift'];


date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 

?> 
<center> <caption><h1>JYOTIRMAYE TEXTILES PVT. LTD.</caption><br />#11-12-12, RAMIREDDYPET, NARASARAOPET,GUNTUR D.T.</h1></center><br />
 <h2>SHIFTWISE PRODUCTION STATEMENT ON <?php echo $dt1 ?></h2>

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
 
 <?php
 
 include 'db.php';
 $q1=mysql_query("SELECT * FROM `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='$shift'")or die(mysql_error());
  $q2=mysql_fetch_array($q1);
  ?>
 <caption><b>supervisor:<?php echo $q2[1] ?> </b></caption>
 <table>
 <tr>
 <th>M/C NO</th>
 <th>EMP NAME</th>
 <th> MIX</th>
 <th> DELIVERY HANK</th>
 <th>STD KGS/HANKS</th>
 <th>ACT HANKS</th>
 <th>ACT KGS</th>
 <th>ACT EFF%</th>
 <th>OPTR EFF%</th>
 <th>WASTE</th>
 <th>W%</th>
 <th>REMARKS</th> 
 </tr>	
 
 <?php 
 include 'db.php'; 
 $q=mysql_query("SELECT * FROM `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='$shift'")or die(mysql_error());
  
 $q2=mysql_query("SELECT sum(spdls) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='$shift'")or die(mysql_error());
 $q3=mysql_query("SELECT sum(workedspdls) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='$shift'");
 $q4=mysql_query("SELECT sum(grms) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='$shift'");
 $q5=mysql_query("SELECT sum(production) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='$shift'");
 $q6=mysql_query("SELECT sum(pneuwaste) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='$shift'");
 $q7=mysql_query("SELECT sum(gps) FROM  `ringframe` WHERE date  BETWEEN '$dt1' AND '$dt2' and shift='$shift'"); 
 
 while($a=mysql_fetch_array($q))
 { 
 echo "<tr><td>$a[mcno]<td>$a[empname1]<td><td><td>$a[hank]<td>$a[actualhanks]<td>$a[production]<td>$a[efficiency]<td><td>$a[pneuwaste]<td><td> ";
 }  
 echo "</tr>";
  
 $c=mysql_fetch_array($q2);
 $d=mysql_fetch_array($q3);
 $e=mysql_fetch_array($q4);
 $f=mysql_fetch_array($q5);
 $g=mysql_fetch_array($q6);
 $h=mysql_fetch_array($q7);
  echo "<tr><td></td><td></td><td>$c[0]<td>$d[0]<td>$e[0]<td>$f[0]<td>$g[0]<td>$h[0]<td>$h[0]<td>$h[0]<td>$h[0]<td>$h[0]";
 
 echo "</tr>";
 ?> 
 </table>
 <br /><br /><br /><br /><br />
  
    <br /><br /><br /><br /><br /> <br /><br /><br /><br /><br />