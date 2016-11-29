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
          <li class="selected"><a href="index.php">Home</a></li>
         
           <li><a href="#">MASTERS</a>
            <ul>
              <li><a href="agents.php">AGENTS</a></li>
               
              <li><a href="buyers.php">BUYERS</a></li>
              <li><a  href="counts.php">COUNTS</a></li>
              <li><a href="bagtypes.php">BAG TYPES</a></li>
			    <li><a href="invoicemaster.php"> INVOICE MASTER</a></li>
             
                <li><a href="formtype.php"> FORM TYPE</a></li>
                <li><a href="itemmaster.php"> ITEM MASTER</a></li>
                <li><a href="veriety.php"> VERIETY</a></li>
				<li><a href="sizecountmaster.php"> SIZE/COUNT MASTER</a></li>
				
                
            </ul>
          </li>
		  
		  
		  
		   <li><a href="#">TRANSACTIONS</a>
            <ul>
              <li><a href="invoiceentry.php">INVOICE ENTRY</a></li> 
               
               
               </ul>
          </li>
	  
		  
		   <li><a href="#">REPORTS</a>
            <ul>
              <li><a href="invoiceregister.php">INVOICE REGISTER</a></li>
             
               
			  
            </ul>
          </li>
		 <li><a href="logout.php">LOGOUT</a></li>
           
        </ul>
<?php
}
else
{
    header('location:../index.php');
}
?>
