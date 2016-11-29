<?php
session_start();
  $dt1=$_SESSION['date1'];
  $dt2=$_SESSION['date2'];

   


date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 

?> 
<center> <caption><h1>JYOTIRMAYE TEXTILES PVT. LTD.</caption><br />#11-12-12, RAMIREDDYPET, NARASARAOPET,GUNTUR D.T.</h1></center><br />
 <h2>PURCHASE ORDER REPORT  FROM <?php echo $dt1 ?> TO  <?php echo $dt2 ?> </h2>

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
   <th>DATE</th> 
  <th>PO NO</th>  
  			 <th>SUPPLIER NAME</th> 
			 <th>AGENT NAME</th> 
			   <th>PAYMENT TERMS</th> 
		 	  <th>RATE FOR CANDY</th> 
			 <th>TYPE</th> 
			 <th>DELIVERY TERMS</th> 
			  <th>ORDER QUANTITY</th> 
			  	  <th>RECEIVED QUANTITY</th> 
				  	  <th>PENDING QUANTITY</th>  
  </tr>	 
 <?php 
 include 'db.php'; 
  $date=date('d/m/y');
 $q=mysql_query("SELECT * FROM `purchaseorder` WHERE purchaseorderdate  BETWEEN '$dt1' AND '$dt2'")or die(mysql_error());
     
 while($a=mysql_fetch_array($q))
 {  
			  echo "<tr> <td>$date<td>$a[purchaseorderno]<td>$a[suppliername]<td>$a[agentname]<td>$a[paymentterms]<td>$a[rate]<td>$a[bagtype]<td>$a[deliveryweight]<td>$a[noofpacks]<td>$a[noofpacks]<td>$a[noofpacks]  ";
 }  
 echo "</tr>";
 
 
  
   
 ?> 
 </table>
 <br /><br /><br /><br /><br />
  