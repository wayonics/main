<?php
session_start();
if($_SESSION['user'])
{
?><html>
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
<h2>purchase report on:<?php echo $dt; ?></h2><br>


<form action="exporttoexcel.php" method="post" 
onClick='$("#datatodisplay").val( $("<div>").append( $("#ReportTable").eq(0).clone() ).html() )'>
  <table id="ReportTable" width="600" cellpadding="2" cellspacing="2" class="myClass" border="1" align="center">
    	  
			  <tr>
			 <th>SL NO</th>
			  <th>BILL  NO</th>
			 <th>INVOICE DATE</th>
			 <th>ENTER DATE</th> 
			 <th>NAME OF THE PARTY</th>
			 <th>VERIETY</th>
			 <th>BALES</th>
			  <th>MILL LOT NO</th>
			  <th>LOT NO</th>
			  <th>NO OF KGS</th>
			  <th>RATE<BR>Rs.</th>
			  <th>ASSEBLE VALUE<BR>Rs.</th>
			  <th>VAT<BR>Rs.</th>
			  <th>CST<BR>Rs.</th>
			      
			 </tr>
			 
			 <?php
	 session_start();
			 include 'db.php';
				 
				   $dt1=$_SESSION['date1'];
  $dt2=$_SESSION['date2'];
				 
				  $q=mysql_query("SELECT * FROM `purchaseentry` WHERE suppbillnodate  BETWEEN '$dt1' AND '$dt2'")or die(mysql_error());
				    $q3=mysql_query("SELECT sum(amount) FROM  `purchaseentry` WHERE suppbillnodate  BETWEEN '$dt1' AND '$dt2'");

				  
				  $i=1; 
             while($a=mysql_fetch_array($q))
				 {
				   
				 echo "<tr><td>$i<td>$a[suppbillno]<td>$a[suppbillnodate]<td>$a[purchasecontractnodate]<td>$a[suppliernamme]<td>$a[verity] <td>$a[bagslnoto] <td>$a[milllotno] <td>$a[partylotno] <td>$a[netwt] <td>$a[rate] <td>$a[amount] <td>$a[vatval] <td>$a[cstval] ";
			    $i++;
				 }
				
 echo "</tr>";
  
 $c=mysql_fetch_array($q3);
 
  echo "<tr><td colspan=11></td><td>$c[0]</td><td></td><td></td>";
 

				     
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

<?php
}
else
{
    header('location:../index.php');
}
?>
