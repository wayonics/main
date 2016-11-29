<?php
session_start();
  $dt1=$_SESSION['date1'];
  $dt2=$_SESSION['date2'];

   


date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 

?> 
<center> <caption><h1>JYOTIRMAYE TEXTILES PVT. LTD.</caption><br />#11-12-12, RAMIREDDYPET, NARASARAOPET,GUNTUR D.T.</h1></center><br />
 <h2>ACTIVITIES CARRIED  FROM <?php echo $dt1 ?> TO  <?php echo $dt2 ?> </h2>

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
   <th>DATE</th> 
  <th>DEPARTMENT NAME</th>  
 <th>MACHINE NAME</th> 
			 <th>MACHINE NO</th> 
			 <th>ACTIVITY</th> 
			   <th>OFF TIME</th> 
		 	 <th>ON TIME</th> 
		 	  <th>DURATION</th> 
			 <th>SPARE/ITEM ISSUED</th> 
			 <th>RATE</th> 
			  <th>QTY</th> 
			 <th>REMARKS</th> 
  </tr>	
 
 <?php 
 include 'db.php'; 
 $q=mysql_query("SELECT * FROM `daywiseactivity` WHERE donedate  BETWEEN '$dt1' AND '$dt2'")or die(mysql_error());
   
 
 while($a=mysql_fetch_array($q))
 { 
  
			  echo "<tr> <td>$a[donedate]<td>$a[deptname]<td>$a[machinename]<td>$a[machineno]<td>$a[activity]<td>$a[offtime]<td>$a[ontime]<td>$a[duration]<td>$a[spareitemused]<td>$a[rate]<td>$a[qty]<td>$a[remarks] ";
 }  
 echo "</tr>";
   
 ?> 
 </table>
 <br /><br /><br /><br /><br />
  