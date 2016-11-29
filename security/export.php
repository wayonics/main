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
</style>
</head>
<body>
<form action="exporttoexcel.php" method="post" 
onClick='$("#datatodisplay").val( $("<div>").append( $("#ReportTable").eq(0).clone() ).html() )'>
  <table id="ReportTable" width="600" cellpadding="2" cellspacing="2" class="myClass" border="2" align="center">
    	 
			  <tr>
			 <th>ID</th>
			  <th>DATE</th>
			 <th>UNIT TYPE</th>
			 <th>COUNT</th>
			
			 <th>SHIFT</th>
			 <th>TOTAL MACHINE WEIGHT</th>
			 
			  
			 </tr>
			 
			 <?php
	 
			 include 'db.php';
				 
				   $q=mysql_query("select * from machinereading")or die(mysql_error()); 
             while($a=mysql_fetch_array($q))
				 {
				 
				 echo "<tr><td>$a[0]<td>$a[3]<td>$a[1]<td>$a[2]<td>$a[4]<td>$a[5]KG ";
			   
				 }
				     
	?>   
   </table>
  <table width="600px" cellpadding="2" cellspacing="2" border="0">
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="hidden" id="datatodisplay" name="datatodisplay">
        <input type="submit" value="Export to Excel">
      </td>
    </tr>
  </table>
</form>
</body>
</html>
