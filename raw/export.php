<html>
<head>
<title>Export to excel in php</title>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js'></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
<script src="jQuery.ui.datepicker.js"></script>
  <script src="jquery.ui.datepicker.mobile.js"></script>
<script>   
	 $(function () {
            $('#calendar').datepicker({
                dateFormat: "dd/mm/yy",
                changeMonth: true,
                changeYear: true
            });
        });
	
</script>
<style type="text/css">
.myClass
{
font-family:verdana;
font-size:11px;
}
</style>
</head>
 
<p>Calendar: <input type="text" id="calendar" /></p><body>


<form action="exporttoexcel.php" method="post" 
onClick='$("#datatodisplay").val( $("<div>").append( $("#ReportTable").eq(0).clone() ).html() )'>
 
  <table id="ReportTable" width="600" cellpadding="0" cellspacing="0" class="myClass" border="2" align="center">
    	 
		<tr> <td align="center" colspan="7">dhyfhjdfbdfkjbvkjbfvjkbfvkvbfkvjfb</td></tr>
		 
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

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"
        type="text/javascript"></script>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css"
        rel="Stylesheet" type="text/css" />
    
    <style type="text/css">
        body
        {
            font-family: Arial;
            font-size: 10pt;
        }
        
    </style>
</head>
 
'


 

</body>
</html>
