<?php
//session_start();
if($_SESSION['user'])
{
?>
<body>
  <div id="main">
    <header>
      <div id="logo">
        
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><span> <b class="t"><font color="#FFFFFF"><center>Jyotirmaye Textiles Pvt.Ltd</font></b></span></h1>
         
      
      </div>
      <nav>
 <ul class="sf-menu" id="nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="inoutword.php">Inward/Outward</a> 
        </li>
		 <li><a href="view.php">TRANSACTIONS</a> 
        </li>
       
	    <li><a href="viewreports.php">REPORTS</a> 
        </li>
       
        <li><a href="logout.php">logout</a></li>
      </ul>
	  
<?php
}
else
{
    header('location:../index.php');
}
?>

	  
	  
	  
	  
	  
	  
	  
	  
	  
	  