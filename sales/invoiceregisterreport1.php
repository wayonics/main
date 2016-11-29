<html>
<head>
<title>Export to excel in php</title>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js'></script>
<style type="text/css">
.myClass
{
font-family:verdana;
font-size:11px;
}
table,th
{
font-size:14px;
color:#993300;text-align:center;
    border: 1px solid black;
}
td
{
font-size:14px;
font-family:"Courier New", Courier, monospace;
color:#000000;text-align:center;
font-weight:bold; border: 1px solid black;
}
table
{
margin-left:7px;
  width: 100%; border-collapse: collapse;
 
}
</style>
</head>
<body>
<center>

   	 
<?php

 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a");
 ?>
<h2>Jyotirmaye Textiles Pvt. Ltd.</h2>
<h2>sales report on:<?php echo $dt; ?></h2><br>


<form action="exporttoexcel.php" method="post" 
onClick='$("#datatodisplay").val( $("<div>").append( $("#ReportTable").eq(0).clone() ).html() )'>
  <table id="ReportTable" width="600" cellpadding="2" cellspacing="2" class="myClass" border="1" align="center">
    	  
			  <tr>
			 <th>SL NO</th>
			  <th>INVOICE NO</th>
			 <th>INVOICE DATE</th>
			 <th>NAME OF THE PARTY</th> 
			 <th>VERITY</th>
			 <th>SIZE/COUNT</th>
			 <th>NO Of Bags/Bales/Cortons</th>
			 <th>No of kgs</th>
			 <th>Rate<br>Rs.</th>
			 <th>Asseble value<br>Rs.</th>
			 <th>Insurance<br>Rs.</th>
			 <th>P&F <br> Rs.</th>
			 <th>FRIGHT<br> Rs.</th>
			 <th>VAT<br> Rs.</th>
			 <th>CST<br> Rs.</th>
			 <th>OTHERS<br> Rs.</th>
			 <th>TOTAL AMOUNT<br> Rs.</th>
			 <th>AGENT NAME</th>
			   
			 </tr>
			 
			 <?php
	 session_start();
			 include 'db.php';
				 
				   $dt1=$_SESSION['date1'];
  $dt2=$_SESSION['date2'];
				 $invno=$_SESSION['invno'];
				  $q=mysql_query("SELECT * FROM `salesinvoicentry` WHERE invissuedate='$dt1' AND invno='$invno'")or die(mysql_error());
				  // $q=mysql_query("select * from salesinvoicentry")or die(mysql_error());
				  $i=1; 
             while($a=mysql_fetch_array($q))
				 {
				  
				 $total=$a['amount']+$a['insuranceval']+$a['pfval']+$a['frightval']+$a['vatval']+$a['cstval']+$a['othersval']; 
				 
				 echo "<tr><td>$i<td>$a[invno]<td>$a[invissuedate]<td>$a[buyername]<td>$a[verity]<td>$a[sizecount] <td>$a[bagto] <td>$a[nos] <td>$a[rate] <td>$a[amount] <td>$a[insuranceval] <td>$a[pfval] <td>$a[frightval] <td>$a[vatval] <td>$a[cstval] <td>$a[othersval]  <td>$total <td>$a[agent] ";
			    $i++;
				 }
				
				     
	?>   
   </table>
   
   <br><br>
       <td align="center"><input type="hidden" id="datatodisplay" name="datatodisplay">
        <input type="submit" value="Export to Excel">
     
  
</form>


 
  <script>
  function p()
  {
  window.print();
} 
  </script>
 
 <button onClick="p()">PRINT</button>
 
 
</body>
</html>
