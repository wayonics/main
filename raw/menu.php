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
              <li><a href="supplierentry.php">SUPPLIER ENTRY</a></li>
              <li><a href="agententry.php">AGENT ENTRY</a></li>
                <li><a href="purchaseitemmaster.php">PURCHASE ITEM MASTER</a></li>
              <li><a href="expensemaster.php">EXPENSE MASTER</a></li>
              <li><a href="balemgtvalues.php">BALE MANAGEMENT VALUES</a></li>
              <li><a href="itemmaster.php">ITEM MASTER</a></li>
              <li><a href="veriety.php">VERIETY MASTER</a></li>
              <li><a href="sizecountmaster.php">SIZE/COUNT MASTER</a></li>
              
            </ul>
          </li>
		  
		  
		  
		   <li><a href="#">TRANSACTIONS</a>
            <ul>
              <li><a href="rawmgt.php">RAW MATERIAL MANAGEMENT</a></li>
				  <li><a href="rawissue.php">RAW MATERIAL ISSUE</a></li>
			  <li><a href="purchaseorder.php">PURCHASE ORDER</a></li>
			    
               </ul>
          </li>
	  
		   <li><a href="#">REPORTS</a>
            <ul>
              <li><a href="rawmaterialstockreport.php">RAW MATERIAL STOCK REPORT</a></li>
               
              <li><a href="rawmaterialissuereport.php">RAW MATERIAL ISSUE REPORT</a></li>
              <li><a href="purchaseorderreport.php">PURCHASE ORDER REPORT</a></li>
              <li><a href="daywiseopeningclosingstock.php">DAY WISE OPENING & CLOSING STOCK</a></li>
			  <li><a href="supplieragentreport.php">SUPPLIER/AGENT REPORT</a></li>
			  
 
            </ul>
          
		  </li>
		 <li><a href="pwd.php">CHANGE PASSWORD</a></li>
         
		 <li><a href="logout.php">LOGOUT</a></li>
           
		   
        </ul>
		
<?php
}
else
{
    header('location:../index.php');
}
?>
