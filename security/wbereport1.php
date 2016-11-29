<?php
session_start();
  $dt1=$_SESSION['date1'];
  $dt2=$_SESSION['date2'];
 
date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 

?> 


<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js'></script>
<style type="text/css">
.myClass
{
font-family:verdana;
font-size:11px;
}
</style>
<center> <caption><h1>JYOTIRMAYE TEXTILES PVT. LTD.</caption><br />#11-12-12, RAMIREDDYPET, NARASARAOPET,GUNTUR D.T.</h1></center><br />
 <h2>WEIGH BRIDGE  FROM <?php echo $dt1 ?> TO  <?php echo $dt2 ?> </h2>



<form action="exporttoexcel.php" method="post" 
onClick='$("#datatodisplay").val( $("<div>").append( $("#ReportTable").eq(0).clone() ).html() )'>
  <table id="ReportTable" width="600" cellpadding="2" cellspacing="2" class="myClass" border="2" align="center">
    	 
			  <tr>
			 <th>SLIP NO</th> 
  <th>VEHICLE NO</th>  
 <th>CHARGES</th> 
			 <th>GROSS WEIGHT</th> 
			 <th>TARE WEIGHT</th> 
			   <th>NET WEIGHT</th> 
		 	 <th>DATE</th> 
		 	  <th>TIME</th>  
			  
			 </tr>
			 
			
 <?php 
 include 'db.php'; 
 $q=mysql_query("SELECT * FROM `weighbridge` WHERE date  BETWEEN '$dt1' AND '$dt2'")or die(mysql_error());
   
 
 while($a=mysql_fetch_array($q))
 { 
  
			  echo "<tr>  <td>$a[1]<td>$a[2]<td>$a[3]<td>$a[4]<td>$a[5]<td>$a[6]<td>$a[7]<td>$a[8] ";
 }  
 echo "</tr>";
   
 ?>  <input type="hidden" id="datatodisplay" name="datatodisplay">
        <input type="submit" value="Export to Excel">
      
</form>
</table>
</body>
</html>

<br /><br />


 

<button onclick="p()" />PRINT</button>


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
 
   