
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
			<li><a href="financeheads.php">FINANCIAL HEADS</a></li>
			
			<li><a href="mainheads.php">DEPARTMENTS</a></li>
			<li><a href="machinarymaster.php">MACHINARY MASTER </a></li>
			  
              <li><a href="itemcreation.php">ITEM CREATION</a></li>
               
              <li><a href="supplier.php">SUPPLIER</a></li>
              
              <li><a href="purchaserequsation.php">PURCHASE REQUSATION </a></li>
			  
			   
            </ul>
          </li>
		   
		   <li><a href="#">TRANSACTIONS</a>
            <ul>
              <li><a href="purchaseentry.php">PURCHASE ENTRY</a></li> 
			  <li><a href="indententry.php">INDENT ENTRY</a></li> 
			  <li><a href="purchaseorder.php">PURCHASE ORDER</a></li> 
			  <li><a href="servicebill.php">SERVICE BILL</a></li>  
              <li><a href="gatepass.php">GATE PASS</a></li>
			  <li><a href="indentrequest.php">INDENT REQUEST</a></li>
			  <li><a href="issueslip.php">ISSUE SLIP</a></li>
			  
               </ul>
          </li>
	   
		   
		   <li><a href="#">REPORTS</a>
            <ul>
              <li><a href="headwisestock.php">HEADWISE STOCK</a></li>
               
              <li><a href="purchasestatement.php">PURCHASE STATEMENT</a></li>
              <li><a href="indententryreport.php">INDENT ENTRY</a></li>
              <li><a href="itemstock.php">ITEM STOCK</a></li>
			  <li><a href="gatepassstatement.php">GATEPASS STATEMENT</a></li>
			  
            </ul>
          </li>
		 <li><a href="logout.php">LOGOUT</a></li>
           
        </ul>
<?php
}
else
{
    header('location:index.php');
}
?>
