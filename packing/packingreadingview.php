 <?php
session_start();
	 
	 ?>

 <!DOCTYPE HTML>
<html>

<head>
  <title>Jyotirmaye Textiles</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
     
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css1/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     

</head>

<body>
 
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text"> 
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><b><a href="#">Jyotirmaye<span class="logo_colour">Textiles Pvt.Ltd</span></a></b></h1>
         
        </div>
      </div>
      <nav>
        <?php include 'menu.php'; ?>
      </nav>
    </header>
	  
            <center><h1><b><font color="purple">MACHINE PACKING DETAILS</font></h1>
           	<div class="one_quarter2">
         <table bgcolor="white" align="center" class="cl" width="950px" height="" border="2">
			 
			  <tr>
			 <th>ID</th>
			 <th>UNIT TYPE</th>
			 <th>COUNT</th>
			 <th>DATE</th>
			 <th>SHIFT</th>
			 <th>TOTAL MACHINE WEIGHT</th>
			 <th>ACTION</th>
			  
			 </tr>
			 
			 <?php
	 
			 include 'db.php';
				 
				   $q=mysql_query("select * from machinereading")or die(mysql_error()); 
             while($a=mysql_fetch_array($q))
				 {
				 
				 echo "<tr><td>$a[0]<td>$a[1]<td>$a[2]<td>$a[3]<td>$a[4]<td>$a[5]KG<td><a href='machinepackingedit.php?id=$a[id]'>EDIT&nbsp;&nbsp;&nbsp;&nbsp;<a href='machinepackingdelete.php?id=$a[id]'>DELETE</td>";
			   
				 }
				     
	?>   
   </table>
   <br> 

 <BR><BR><BR> <center><h1><b><font color="purple">ACTUAL PACKING DETAILS</font></b></h1>
          <table bgcolor="white" align="center" class="cl" width="950px" height="" border="2">
			 
			  <tr>
			 <th>ID</th>
			 <th>UNIT TYPE</th>
			 <th>COUNT</th>
			 <th>DATE</th>
			 <th>SHIFT</th>
			 <th>TOTAL GROUND WEIGHT</th>
		 
			 
			 <th>ACTION</th>
			  
			 </tr>
			 
			 <?php
	 
			 include 'db.php';
				 $q=mysql_query("select * from machinereading")or die(mysql_error()); 
                
				   $q1=mysql_query("select * from groundreading")or die(mysql_error()); 
             while($a=mysql_fetch_array($q1) and $b=mysql_fetch_array($q))
				 {
				 
				 $diff=$b[5]-$a[5];
				 
				 echo "<tr><td>$a[0]<td>$a[1]<td>$a[2]<td>$a[3]<td>$a[4]<td>$a[5]KG <td><a href='groundpackingedit.php?id=$a[id]'>EDIT&nbsp;&nbsp;&nbsp;&nbsp;<a href='groundpackingdelete.php?id=$a[id]'>DELETE</td>";
			   
				 }
				     
	?>   
   </table>
   <br>
   <button onClick="print()">PRINT</button>


 
<script>
function print()
{
window.print();

</script>
 

  </center>
 
 
 </main> 
	
	
	
  <style>
  .submit
  {
  color:#0000FF;
 
  font-size:18px;
  }  
  .date
  {
  border-radius:7px;
  width:107%;
  }
   th 
  {
  color:#0000FF;
 
  }
  td
  {
  color:#000066;
  text-align:center;
  }</style>
  </div>
  
</div> 


<br><br>
 

 
<br><br>
<div class="wrapper list">
  <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
    
    <!-- ################################################################################################ --> 
  </div>
</div>
<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
     <b style="color:#FF0000">Copyrights &copy;2016 All Reserved @<a href="http://eautomation.in/" target="_blank">eautomation Pvt Ltd</a></b>
         
    </nav>
  </div>
</div>
 <br><br><br><br>
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>
</body>
</html> 
