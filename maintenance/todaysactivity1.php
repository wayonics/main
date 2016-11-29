<?php
session_start();
  $dt1=$_SESSION['date'];
   $dept=$_SESSION['dept'];
   $unit=$_SESSION['unit'];
    
date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 

?> 
<center> <caption><h1>JYOTIRMAYE TEXTILES PVT. LTD.</caption><br />#11-12-12, RAMIREDDYPET, NARASARAOPET,GUNTUR D.T.</h1></center><br />
 <h2>ACTIVITY FOR THE DATE ON <?php echo $dt1 ?></h2>

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
 
  
 <table>
 <tr>
 <th>DEPARTMENT NAME</th>
 <th>MACHINE NAME</th>
 <th> MACHINE NO</th>
 <th> ACTIVITY</th>
 <th>SCHEDULE DATE</th>
  </tr>	
 
 <?php 
 include 'db.php'; 
 $q=mysql_query("SELECT * FROM `schedulemaster` WHERE maintaineddate='$dt1' and deptname='$dept' and unit='$unit'")or die(mysql_error());
   
 
 while($a=mysql_fetch_array($q))
 { 
 echo "<tr><td>$a[deptname]<td>$a[machinename]<td>$a[machineno]<td>$a[activity]<td>$a[maintaineddate]";
 }  
 echo "</tr>";
   
 ?> 
 </table>
 <br /><br /><br /><br /><br />
  